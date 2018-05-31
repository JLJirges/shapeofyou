<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('superfood', function () {


    $data= [
        'blogs'   => \DB::table('blogs')->get(),
    ];


    return view('superfood')
        ->with($data);


});

Route::get('meetups', function () {
    return view('meetups');
});

Route::get('workout', function () {
    return view('workout');
});

Route::get('register','RegisterController@create');
Route::post('register','RegisterController@store');
Route::post('edit', 'RegisterController@edit');
Route::post('upload_photo', 'RegisterController@upload_photo');

Route::group(['middleware' => ['web']], function(){
    Route::get('/login', ['as' => 'login', 'uses' => 'SessionsController@login']);
    Route::get('/logout', ['as' => 'logout', 'uses' => 'SessionsController@logout']);
    Route::post('/handlelogin', ['as' => 'handlelogin', 'uses' => 'SessionsController@handlelogin']);
});

Route::get('/community', function () {
    return view('community');
});

Route::get('profile', function () {
    $data = ['user' => Auth::user()];
    return view('profile/profile')->with($data);
});

Route::get('profile/{username}', function ($username) {
    $data = ['user' => \DB::table('users')
        ->where('username', $username)->first()];
    return view('profile/profile')->with($data);
});

Route::get('beforeafterprofile', function () {
    $data = ['user' => Auth::user()];
    return view('profile/beforeafterprofile')->with($data);
});

Route::get('beforeafterprofile/{username}', function ($username) {
    $data = ['user' => \DB::table('users')
        ->where('username', $username)->first()];
    return view('profile/beforeafterprofile')->with($data);
});

Route::get('motivationprofile', function () {
    return view('profile/motivationprofile');
});

Route::get('blogoverviewprofile', function () {
    $data = ['user' => Auth::user()];
    return view('profile/blogoverviewprofile')->with($data);
});

Route::get('blogoverviewprofile/{username}', function ($username) {
    $data = ['user' => \DB::table('users')
        ->where('username', $username)->first()];
    return view('profile/blogoverviewprofile')->with($data);
});

Route::get('workoutprofile', function () {
    return view('profile/workoutprofile');
});

Route::get('settingsprofile', function () {
    return view('profile/settingsprofile');
});

Route::get('buddiesprofile', function () {
    $data = ['user' => Auth::user()];
    return view('profile/buddiesprofile')->with($data);
});

Route::get('buddiesprofile/{username}', function ($username) {
    $data = ['user' => \DB::table('users')
        ->where('username', $username)->first()];
    return view('profile/buddiesprofile')->with($data);
});

Route::get('contact', function () {
    return view('footer/contact');
});

Route::get('jobs', function () {
    return view('footer/jobs');
});

Route::get('termsandconditions', function () {
    return view('footer/termsandconditions');
});

Route::get('faq', function () {
    return view('footer/faq');
});

Route::get('aboutus', function () {
    return view('footer/aboutus');
});

Route::get('blog/{blog_id}', function ($blog_id) {
    // Get blog comments of blog with the BlogId=$id
    // blog_comments is an array of entries of the table 'blogcomment'
    $blog_comments = \DB::table('blogcomment')
        ->where('BlogId', $blog_id);

    // Get UserIds that are in the blog_comments
    // user_ids is an array of UserIds (e.g., [1,2,3])
    $user_ids = $blog_comments->pluck('UserId')->toArray();

    // Get BloggerId
    $blogger_id = \DB::table('blogs')->where('id', $blog_id)->first()->BloggerId;

    // Get all the data needed to pass to the blade view
    $data = [
        // blog_id is in the url
        'blog_id' => $blog_id,

        // I need the blog entry from the 'blogs' table.
        // Go to the Blogs and find the entry where 'id'=$id
        'blog'  => \DB::table('blogs')->where('id', $blog_id)->first(),

        'blog_author' => \DB::table('users')->where('id', $blogger_id)->first(),

        // get blog comments ordered by their date
        'blog_comments'   => $blog_comments->orderBy('BlogCommentDate','desc')->get(),

        // get users associated with blog comments
        'users' => \DB::table('users')
            ->whereIn('id', $user_ids)->get(),

        // get authenticated user
        'user_id' => Auth::user()->id,

        // Boolean variable: true if user likes blog, false otherwise
        'user_likes_blog' => \DB::table('user_favorites')
            ->where(['UserId' => Auth::user()->id, 'type' => 'blog', 'type_id' => $blog_id])->count() > 0
    ];
    return view('blog')->with($data);
});

Route::post('/favorite_blog/{action}/{blog_id}/{user_id}', 'SessionsController@favorite_blog');

Route::post('/write_comment/{type}/{id}/{user_id}', 'SessionsController@write_comments');

Route::get('overview', function(){
   return view('overview');
});


Route::get('detail', function(){
   return view('detail');
});

Route::get('dashboard', function(){
    return view('backend/dashboard');
});