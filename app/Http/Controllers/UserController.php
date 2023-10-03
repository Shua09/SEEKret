<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Banner;
use App\Models\Joblist;
use App\Models\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Hash;

class UserController extends Controller
{
    ///////////////////////////ADMIN
    public function getAdminHome()
    {
        $user = Auth::user();
        return view('admin.home', compact('user'));
    }
    /////////////////////////USER

    public function getIncompletePage()
    {
        return view('vendors.IncompletePage');

    }

    


    public function admin()
    {
        return $this->role === 'admin';

    }

    public function GetCounselorHome()
    {
        return view('login.index');

    }


    public function signin()
    {
        return view('login.index');

    }
    public function getLogout()
    {
        Auth::logout();
        return view('login.index');
    }

    public function getLogin()
    {
        return view('login.index');

    }

    public function getRegister()
    {
        return view('contact.signup');

    }

    public function getCareer()
    {
        return view('vendors.career');

    }

    public function getCounseling()
    {
        return view('vendors.counseling');

    }

    public function getCareercounseling()
    {
        return view('vendors.incompletePage');

    }

    public function getJobplacement()
    {
        return view('vendors.jobplacement');

    }

    public function getPartneredindustries()
    {
        return view('vendors.partneredindustries');

    }

    public function getWorkadu()
    {
        return view('vendors.workadu');

    }

    public function getJoblisting()
    {
        $user = Auth::user();
        $joblists = Joblist::orderBy('created_at', 'desc')->get();
        return view('vendors.joblisting', ['joblists' => $joblists, 'user' => $user]);

    }



    public function postSignIn(Request $request)
    {
        $banners = Banner::orderBy('created_at', 'desc')->get();
        $credentials = $request->all();
        
        $this->validate($request,[
            'username' => ['required',],
            'password' => ['required'],
        ]);
        if( auth()->attempt(array('username'=>$credentials['username'],'password'=> $credentials['password'])))
        {
            if (Auth()->user()->role == 'admin'){
                return redirect()->route('admin.home');//admin home view
            }else if(Auth()->user()->role == 'counselor'){
                return redirect()->route('counselor.home');// counselor home view
            }else{
                return redirect()->route('home',['banners' => $banners]); //student home view
                
            }  
        }
        
        return view('login.index')->with('error','Email and password are wrong');
    }
    
     public function getHome()
     {
        $banners = Banner::orderBy('created_at', 'desc')->get();
        return view('vendors.home', ['banners' => $banners]);
     }

     public function postSignup(Request $request)
     {
         /* validation */
         $this->validate($request,[
             'studentnum' => ['required', 'integer', 'min:9', 'unique:users'],
             'username' => ['required', 'string', 'max:255', 'unique:users'],
             'email' => ['required', 'string', 'email', 'max:255', 'unique:users', 'regex:/@adamson\.edu\.ph$/i'],
             'firstName' => ['string', 'max:255'],
             'lastName' => ['string', 'max:255'],
             'password' => ['required', 'string', 'min:8', 'confirmed'],
         ]);
 
 
        $input = $request->all();
  
        User::create([
         'studentnum' => $input['studentnum'],
         'username' => $input['username'],
         'email' => $input['email'],
         'firstname' => $input['firstname'],
         'lastname' => $input['lastname'],
         'password' => Hash::make($input['password']),
          
       ]);
       /* if all is correct and no same cred it will go to login view*/
        return view('login.index');
     }

     public function getAccount()
{
    $user = Auth::user();
    if (!$user) {
        return redirect()->route('login');
    }
    return view('vendors.account', ['user' => $user]); 
}



public function postUpdatePassword(Request $request)
{
    $validated = $request->validateWithBag('updatePassword', [
        'current_password' => ['required', 'current_password'],
        'password' => ['required', 'confirmed'],
    ]);

    $user = $request->user();

    $user->update([
        'password' => Hash::make($validated['password']),
    ]);

    return view('vendors.account', ['user' => $user]);
}

// public function postupdateaccount(Request $request)
//     {
//         $user = Auth::user();

//         // Validate the input fields
//         $this->validate($request, [
//             'username',
//             'firstname',
//             'lastname',
//             'bio',
//             'image', 
//         ]);
//         // Update text fields
//         $user->username = $request->input('username');
//         $user->firstname = $request->input('firstname');
//         $user->lastname = $request->input('lastname');
//         $user->bio = $request->input('bio');
    
//         // Handle image upload
//         if ($request->hasFile('image')) {
//             $image = $request->file('image');
//             $imageName = $image->getClientOriginalName();
//             $imagePath = $image->storeAs('public', $imageName, 'public');
    
//             // Update the user's image path in the database
//             $user->image = $imagePath;
//         }
    
//         // If no image is uploaded, retain the existing image (if it exists)
//         // Alternatively, you can set it to a default image path if needed.
//         if ($user->image === null) {
//             $user->image = 'newuser.jpg'; // Replace with your default image path.
//         }
    
//         if ($user->save()) {
//             $message = 'Profile successfully Updated!';
//         } else {
//             $message = 'There was an error updating the profile';
//         }
    
//         return view('vendors.account', ['user' => $user, 'message' => $message]);
//     }
public function postupdateaccount(Request $request)
{
    $user = Auth::user();

    //Validate the input fields
        $this->validate($request, [
            'username',
            'firstname',
            'lastname',
            'bio',
            'image', 
        ]);

    // Update text fields
    $user->username = $request->input('username');
    $user->firstname = $request->input('firstname');
    $user->lastname = $request->input('lastname');
    $user->bio = $request->input('bio');

    // Handle image upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $imagePath = $image->storeAs('public', $imageName, 'public');
        $user->image = $imageName;
    }

    // If no image is uploaded, retain the existing image (if it exists)
    // Alternatively, you can set it to a default image path if needed.
    if ($user->image === null) {
        $user->image = 'default-image.jpg'; // Replace with your default image path.
    }

    if ($user->save()) {
        $message = 'Profile successfully Updated!';
    } else {
        $message = 'There was an error updating the profile';
    }

    return view('vendors.account', ['user' => $user, 'message' => $message]);
}


    public function getUserImage($filename)
    {
        $file = Storage::disk('local')->get($filename);

        return new Response($file, 200);
    }
    public function getChat()
    {
        if(Auth::check()) {
            $users = User::all();
            return view('vendors.chat', ['users' => $users]);
        }
        return redirect()->route('login');
    }

}
