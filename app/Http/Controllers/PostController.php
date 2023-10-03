<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use App\Models\Banner;
use App\Models\Comment;
use App\Models\Joblist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;


class PostController extends Controller
{

    public function postCreateJoblist(Request $request)
{
    // Validate the input fields
    $this->validate($request, [
        'joblist_title' => 'required|max:1000',
        'joblist_company' => 'required|max:1000',
        'joblist_description' => 'required|max:1000',
        'joblist_additionalinfo' => 'required|max:1000',
        'joblist_type' => 'required|max:1000',
    ]);

    // Create a new Joblist instance
    $joblist = new Joblist();
    $joblist->joblist_title = $request['joblist_title'];
    $joblist->joblist_company = $request['joblist_company'];
    $joblist->joblist_description = $request['joblist_description'];
    $joblist->joblist_additionalinfo = $request['joblist_additionalinfo'];
    $joblist->joblist_type = $request['joblist_type'];

    // Save the job listing for the authenticated user
    if ($request->user()->joblists()->save($joblist)) {
        $message = 'Job listing successfully created!';
    } else {
        $message = 'There was an error creating the Job listing';
    }

    // Redirect back to the job listing page with a message
    return redirect()->route('vendors.joblisting')->with(['message' => $message]);
}
public function joblisting()
{
    // Get the authenticated user
    $user = Auth::user();

    // Retrieve all joblists from the database, ordered by their creation date in descending order
    $joblists = Joblist::orderBy('created_at', 'desc')->get();

    // Return the 'vendors.joblisting' view, passing the joblists and user data to the view
    return view('vendors.joblisting', ['joblists' => $joblists, 'user' => $user]);
}

     // HOME PAGE POSTING ==================================================================================================

     public function postCreateBanner(Request $request)
{
    // Get the count of existing banners
    $count = Banner::count();

    // Validate the input fields
    $this->validate($request, [
        'banner_hash' => 'required|max:1000',
        'banner_body' => 'required|max:1000',
        'banner_image' => 'required|image' // Added 'image' validation rule to ensure it's an image file.
    ]);

    // Create a new Banner instance
    $banner = new Banner();
    $banner->banner_hash = $request['banner_hash'];
    $banner->banner_body = $request['banner_body'];
    $banner->alter = $count % 2;

    // Store the uploaded image file
    if ($request->hasFile('banner_image')) {
        $image = $request->file('banner_image');
        $imageName = $image->getClientOriginalName();
        $imagePath = $image->storeAs('public', $imageName, 'public');
        $banner->banner_image = $imageName;
    } else {
        // Handle the case where no image was uploaded (optional).
        // You can set a default image or display an error message.
        // For now, let's assume you want to store a placeholder image.
        $banner->banner_image = 'placeholder.jpg'; // Replace with your default image path.
    }

    // Save the banner for the authenticated user
    if ($request->user()->banners()->save($banner)) {
        $message = 'Highlight successfully created!';
    } else {
        $message = 'There was an error creating the highlight';
    }

    // Redirect back to the home page with a message
    return redirect()->route('vendors.home')->with(['message' => $message]);
}

public function bannercontent(Banner $banner, Request $request)
{
    return view('home.BannerContent', compact('banner'));
}





public function home()
{
    // Get the authenticated user
    $user = Auth::user();

    // Retrieve all banners from the database, ordered by their creation date in descending order
    $banners = Banner::orderBy('created_at', 'desc')->get();

    // Return the 'vendors.home' view, passing the banners and user data to the view
    return view('vendors.home', ['banners' => $banners, 'user' => $user]);
}

public function getDeleteBanner($banner_id)
{
    // Find the banner by its ID
    $banner = Banner::find($banner_id);
    if (!$banner) {
        return redirect()->route('vendors.home')->with(['message' => 'Banner not found!']);
    }

    // Check if the authenticated user is authorized to delete the banner
    if (Auth::user() != $banner->user) {
        return redirect()->back()->with(['message' => 'You are not authorized to delete this banner!']);
    }

    // Delete the banner
    $banner->delete();

    // Redirect back to the home page with a message
    return redirect()->route('vendors.home')->with(['message' => 'Banner successfully deleted!']);
}

 

    // FEED PAGE POSTING ==================================================================================================

    public function postCreatePost(Request $request) 
{
    $this->validate($request, [
        'body' => 'required|max:1000',
        'post_image',
        'private_post'
    ]);

    $user = Auth::user();
    $post = new Post();
    $post->body = $request->input('body');
    $post->user_id = $request->user()->id;

        if ($request->hasFile('post_image')) {
            $image = $request->file('post_image');
            $imageName = $image->getClientOriginalName();
            $imagePath = $image->storeAs('public', $imageName, 'public');
            $post->post_image = $imageName;
            $post->type = 1;
    } else {
        $post->type = 0;
    }
 
    // Check if the 'private_post' checkbox is checked
    if ($request->has('private_post')) {
        $post->private = 1;
    } else {
        $post->private = 0;
    }

    $message = 'There was an error';
    if ($post->save()) {
        $message = 'Post successfully created!';
    }

    return redirect()->route('vendors.feed', ['user' => $user])->with('message', $message);
}

public function feed()
    {
        $user = Auth::user();
        $posts = Post::orderBy('created_at', 'desc')->get();
        $like = 'some value'; // Assign a value to $like
        $banners = Banner::orderBy('created_at', 'desc')->get();
        return view('vendors.feed', ['posts' => $posts, 'user' => $user, 'like' => $like, 'banners' => $banners]); 
    }

    public function getDeletePost($post_id)
    {
        $post = Post::find($post_id);
        if (!$post) {
            return redirect()->route('vendors.feed')->with(['message' => 'Post not found!']);
        }
        if (Auth::user() != $post->user) {
            return redirect()->back()->with(['message' => 'You are not authorized to delete this post!']);
        }
        $post->delete();
        return redirect()->route('vendors.feed')->with(['message' => 'Post successfully deleted!']);
    }

    public function postcontent(Post $post, Request $request)
{
    return view('feed.postcontent', compact('post'));
}

    public function getEditPost(Post $post, Request $request)   
    {
        return view('feed.postcontent', ['post' => $post]);
    }
        // $this->validate($request, [
        //     'body' => 'required|max:1000'
        // ]);
        
        // $post_id = $request['postId'];
        // $post = Post::find($request['postId']);
        
        // if (!$post) {
        //     return redirect()->route('vendors.feed')->with(['message' => 'Post not found!']);
        // }
        
        // if (Auth::user() != $post->user) {
        //     return redirect()->back()->with(['message' => 'You are not authorized to edit this post!']);
        // }
        
        // $post->body = $request['body'];
        // $post->update();
        
        // return redirect()->back()->with(['message' => 'Post updated successfully.']);
    

    public function postVotePost(Request $request, $id)
    {
        $post_id = $id;
        $user_id = Auth::user()->id;
    
        // Check if the user has already voted for this post
        $existingVote = Like::where('post_id', $post_id)
            ->where('user_id', $user_id)
            ->first();
    
        if ($existingVote) {
            // User has already voted, you can handle this case accordingly
            return redirect()->back()->with(['message' => 'You have already voted for this post.']);
        }
    
        // User hasn't voted, save the vote
        $like = new Like();
        $like->post_id = $post_id;
        $like->user_id = $user_id;
        $like->like = 1;
        $like->save();
    
        // Increment the vote count for the post
        Post::where('id', $post_id)->increment('vote_count');
    
        return redirect()->back()->with(['message' => 'Like added successfully.']);
    }

    public function postDownVotePost(Request $request, $id)
{
    $post = Post::find($id);
    if (!$post) {
        return redirect()->route('vendors.feed')->with(['message' => 'Post not found!']);
    }

    $user_id = Auth::user()->id;

    // Delete the user's vote for this post
    $post->likes()->where('user_id', $user_id)->delete();

    // Decrement the vote count for the post
    Post::where('id', $id)->decrement('vote_count');

    return redirect()->route('vendors.feed')->with(['message' => 'Downvote removed successfully.']);
}




public function postComment(Request $request)
{
    $post_id = $request->post_id;
    $user_id = Auth::user()->id;

    // Create a new Comment instance
    $comment = new Comment();
    $comment->post_id = $post_id;
    $comment->user_id = $user_id;
    $comment->comment = $request->comment; // Use $request->comment to assign the comment value
    $comment->save();

    return redirect()->route('vendors.feed')->with(['message' => 'Comment added successfully.']);
}
}



   
   

    

    

  
       
        
    








    



     



