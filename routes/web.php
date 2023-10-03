<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ListingController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|


Route::get('/', function () {
    return view('welcome');
});

*editing purposes
Route::post('/home',        [UserController::class, 'home']);
Route::post('/feed',        [UserController::class, 'feed']);
Route::post('/counseling',  [UserController::class, 'counseling']);
Route::post('/career',      [UserController::class, 'career']);

pano mag route
Route::post/get('/tagatawag galing blade file',       [UserController::class, 'tinawag sa controller'])           ->name('wala name lang pwede isame sa tagatawag');
*/

Auth::routes();
Route::middleware(['auth','user-access:admin'])->group(function(){
    //admin only 
});

Route::middleware(['auth','user-access:counselor'])->group(function(){
    //counselor only 
});

Route::middleware(['auth','user-access:user'])->group(function(){
    //user only 
});


/*====================================================================================================*/

Route::get('/',                         [UserController::class, 'signin']);

Route::get('/login',                    [UserController::class, 'getLogin'])                ->name('login');

Route::get('/register',                 [UserController::class, 'getRegister'])             ->name('register');

Route::get('/logout',                   [UserController::class, 'getLogout'])               ->name('logout');

Route::get('/home',                      [UserController::class, 'getHome'])                 ->name('home');

Route::get('/account',                  [UserController::class, 'getAccount'])              ->name('account');

Route::get('/career',                   [UserController::class, 'getCareer'])                ->name('career');

Route::get('/counseling',               [UserController::class, 'getCounseling'])            ->name('counseling');

Route::get('/userimage/{filename}',     [UserController::class, 'getUserImage'])            ->name('account.image');

Route::get('/careercounseling',                   [UserController::class, 'getCareercounseling'])                ->name('careercounseling');

Route::get('/jobplacement',                   [UserController::class, 'getJobplacement'])                ->name('jobplacement');

Route::get('/partneredindustries',                   [UserController::class, 'getPartneredindustries'])                ->name('partneredindustries');

Route::get('/joblisting',                   [UserController::class, 'getJoblisting'])                ->name('joblisting');

Route::get('/workadu',                   [UserController::class, 'getWorkadu'])                ->name('workadu');

Route::get('/chat',                  [UserController::class, 'getChat'])              ->name('chat');

Route::get('/IncompletePage',                  [UserController::class, 'getIncompletePage'])              ->name('IncompletePage');

Route::get('/adminhome',                  [UserController::class, 'getAdminHome'])              ->name('adminhome');


/*========================================================================================================= */

Route::post('/updateaccount',           [UserController::class, 'postupdateaccount'])         ->name('updateaccount');

Route::post('/signup',                  [UserController::class, 'postSignUp'])              ->name('signup');

Route::post('/signin',                  [UserController::class, 'postSignIn'])              ->name('signin');

Route::post('/updatepassword',           [UserController::class, 'postUpdatePassword'])         ->name('updatepassword');




/*========================================================================================================= */


Route::get('/feed',                     [PostController::class, 'feed'])                    ->name('feed')->middleware('auth');

Route::get('/delete-post/{post_id}',    [PostController::class, 'getDeletePost'])           ->name('post.delete')->middleware('auth');

Route::get('/vendors/feed',             [PostController::class, 'feed'])                    ->name('vendors.feed');

Route::get('/vote-post/{post_id}',     [PostController::class, 'postVotePost'])            ->name('post.vote')->middleware('auth');

Route::get('/downvote-post/{post_id}',     [PostController::class, 'postDownVotePost'])            ->name('post.downvote')->middleware('auth');



/*========================================================================================================= */

Route::post('/createpost',              [PostController::class, 'postCreatePost'])          ->name('post.create')->middleware('auth');


Route::get('/postedit', [PostController::class, 'getEditPost'])->name('post.edit')->middleware('auth');

// Route::get('/postcontent/{post}',                    [PostController::class, 'getEditPost'])            ->name('post.edit')->middleware('auth');

Route::post('/postcomment',     [PostController::class, 'postComment'])            ->name('post.comment')->middleware('auth');


Route::post('/comment/create/{post_id}', [PostController::class, 'postComment'])->name('comment.create');


Route::get('/postcontent/{post}',     [PostController::class, 'postcontent'])            ->name('feed.postcontent')->middleware('auth');


/*========================================================================================================= */
//CREATE BANNER admin 

Route::get('/banner/{banner}',             [PostController::class, 'bannercontent'])                    ->name('home.BannerContent');

Route::match(['get', 'post'],'home',                  [PostController::class, 'home'])                    ->name('home');

Route::get('/delete-banner/{banner_id}',    [PostController::class, 'getDeleteBanner'])           ->name('banner.delete')->middleware('auth');

Route::match(['get', 'post'],'/vendors/home',             [PostController::class, 'home'])                    ->name('vendors.home');

/*========================================================================================================= */

Route::post('/createbanner',                    [PostController::class, 'postCreateBanner'])          ->name('banner.create');

/*========================================================================================================= */

Route::post('/createjoblist',                    [PostController::class, 'postCreateJoblist'])          ->name('joblist.create');


Route::match(['get', 'post'],'/vendors/joblisting',             [PostController::class, 'joblisting'])                    ->name('vendors.joblisting');

/*========================================================================================================= */

Route::get('/listing',             [ListingController::class, 'getListing'])                    ->name('listings.listing');

Route::get('/listing/{listing}',             [ListingController::class, 'getshow'])                    ->name('listings.show');

Route::get('/listing/{listing}/apply',             [ListingController::class, 'getapply'])                    ->name('listings.apply');

Route::get('/new',             [ListingController::class, 'getcreate'])                    ->name('listings.create');

Route::get('/mylisting', function (\Illuminate\Http\Request $request) 
{
    return view('listings.mylisting', [
        'listings' => $request->user()->listings
    ]);
})->middleware(['auth'])->name('listings.mylisting');

/*========================================================================================================= */

Route::post('/new',             [ListingController::class, 'poststore'])                    ->name('listings.store');


