<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ListingController extends Controller
{
    public function getListing(Request $request)
    {
        $user = Auth::user();
        $query = Listing::query()
            ->where('is_active', true)
            ->with('tags')
            ->latest();

        if ($request->has('s')) {
            $searchQuery = trim($request->get('s'));

            $query->where(function (Builder $builder) use ($searchQuery) {
                $builder
                    ->orWhere('title', 'like', "%{$searchQuery}%")
                    ->orWhere('company', 'like', "%{$searchQuery}%")
                    ->orWhere('location', 'like', "%{$searchQuery}%");
            });
        }

        if ($request->has('tag')) {
            $tag = $request->get('tag');
            $query->whereHas('tags', function (Builder $builder) use ($tag) {
                $builder->where('slug', $tag);
            });
        }

        $listings = $query->get();

        $tags = Tag::orderBy('name')
            ->get();

        return view('listings.listing',['user' => $user], compact('listings', 'tags'));
    }

    public function getshow(Listing $listing, Request $request)
    {
        return view('listings.show', compact('listing'));
    }

    public function getapply(Listing $listing, Request $request)
    {
        $listing->clicks()
            ->create([
                'user_agent' => $request->userAgent(),
                'ip' => $request->ip()
            ]);

        return redirect()->to($listing->apply_link);
    }

    public function getcreate()
    {
        return view('listings.create');
    }

    public function poststore(Request $request)
{
    // process the listing creation form
    $validationArray = [
        'title' => 'required',
        'company' => 'required',
        'logo' => 'file|max:2048',
        'location' => 'required',
        'apply_link' => 'required|url',
        'content' => 'required',
    ];

    if (!Auth::check()) {
        $validationArray = array_merge($validationArray, [
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:5',
           
        ]);
    }

    $request->validate($validationArray);

    // is a user signed in? if not, create one and authenticate
    $user = Auth::user();

    

    // process the listing creation
    try {
        $md = new \ParsedownExtra();

        $listing = $user->listings()->create([
            'title' => $request->title,
            'slug' => Str::slug($request->title) . '-' . rand(1111, 9999),
            'company' => $request->company,
            'logo' => basename($request->file('logo')->store('public')),
            'location' => $request->location,
            'apply_link' => $request->apply_link,
            'content' => $md->text($request->input('content')),
            'is_highlighted' => $request->filled('is_highlighted'),
            'is_active' => true
        ]);

        foreach (explode(',', $request->tags) as $requestTag) {
            $tag = Tag::firstOrCreate([
                'slug' => Str::slug(trim($requestTag))
            ], [
                'name' => ucwords(trim($requestTag))
            ]);

            $tag->listings()->attach($listing->id);
        }

        return redirect()->route('listings.mylisting');
    } catch (\Exception $e) {
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }
}
}
