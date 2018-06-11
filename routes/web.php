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


    $data = [
        'blogs' => \DB::table('blogs')->get(),
    ];


    return view('superfood')
        ->with($data);


});

Route::get('meetups', function () {

    $data = [
      'upcoming_events' => \DB::table('events')->where('Upcoming', NULL)->get(),
        'former_events' => \DB::table('events')->where('Upcoming', 1)->get(),
    ];



    return view('meetups')->with($data);
});

Route::get('workout', function () {

    $data = [
        'blogs' => \DB::table('blogs')->get(),
        'workout' => \DB::table('workouts')->get(),
    ];

    return view('workout')->with($data);
});

Route::get('register_new_user', 'RegisterController@create_new_user');
Route::post('register_new_user', 'RegisterController@store_new_user');
Route::post('edit_user/{id}', 'RegisterController@edit_user');
Route::post('delete_user/{id}', 'RegisterController@deleteUser');

Route::get('/backend/user_edit', function () {
    return view('backend/user_edit');
});

Route::get('/backend/user_edit/{user_id}', function ($user_id) {

    $data =[
        'user' => \DB::table('users')->where('id', $user_id)->first(),
        'user_id' => $user_id
    ];

    return view('backend/user_edit')->with($data);
});

Route::post('/upload_photo', 'RegisterController@upload_photo');
Route::get('register', 'RegisterController@create');
Route::post('register', 'RegisterController@store');
Route::post('edit', 'RegisterController@edit');


Route::group(['middleware' => ['web']], function () {
    Route::get('/login', ['as' => 'login', 'uses' => 'SessionsController@login']);
    Route::get('/logout', ['as' => 'logout', 'uses' => 'SessionsController@logout']);
    Route::post('/handlelogin', ['as' => 'handlelogin', 'uses' => 'SessionsController@handlelogin']);
});

Route::get('/community', function () {
    return view('community');
});

Route::get('profile/', 'ProfileDiaryController@create');
Route::post('profile/', 'ProfileDiaryController@store');
Route::post('upload_photo', 'ProfileDiaryController@upload_photo');
Route::get('profile/', function () {
    $data = [
        'user' => Auth::user(),
        'diary' => \DB::table('diaries')->where('DiaryUserId', Auth::user()->id)->orderBy('created_at', 'desc')->get()
    ];


    return view('profile/profile')->with($data);
});


Route::get('profile/{username}', function ($username) {

    $user_id = DB::table('users')->where('username', $username)->first()->id;
    $data = [
        'user' => \DB::table('users')->where('username', $username)->first(),
        'diary' => \DB::table('diaries')->where('DiaryUserId', $user_id)->orderBy('created_at', 'desc')->get()
    ];
    return view('profile/profile')->with($data);
});

Route::post('BeforeAfterStory', 'BeforeAfterStoryController@store');
Route::get('BeforeAfterStory', 'BeforeAfterStoryController@create');
Route::post('upload_photo_one', 'BeforeAfterStoryController@upload_photo_one');
Route::post('upload_photo_two', 'BeforeAfterStoryController@upload_photo_two');

Route::get('beforeafterprofile', function () {
    $data = [
        'user' => Auth::user(),
        'bas' => \DB::table('beforeafterstories')->where('BeforeAfterStoryUserId', Auth::user()->id)->orderBy('created_at', 'desc')->get()
    ];
    return view('profile/beforeafterprofile')->with($data);
});

Route::get('beforeafterprofile/{username}', function ($username) {
    $user_id = DB::table('users')->where('username', $username)->first()->id;
    $data = [
        'user' => \DB::table('users')->where('username', $username)->first(),
        'bas' => \DB::table('beforeafterstories')->where('BeforeAfterStoryUserId', $user_id)->orderBy('created_at', 'desc')->get()
    ];
    return view('profile/beforeafterprofile')->with($data);
});

Route::get('motivationprofile', function () {
    return view('profile/motivationprofile');
});

Route::get('blogoverviewprofile', function () {


    $data = [
        'user' => Auth::user(),
        'blogs' => \DB::table('blogs')->get(),
        'fave_blog_ids' => \DB::table('user_favorites')->where('UserId', Auth::user()->id)->pluck('type_id')->toArray()
    ];


    return view('profile/blogoverviewprofile')->with($data);
});

Route::get('blogoverviewprofile/{username}', function ($username) {
    $user_id = \DB::table('users')->where('username', $username)->first()->id;
    $data = [
        'user' => \DB::table('users')->where('username', $username)->first(),
        'users' => \DB::table('users')->get(),
        'blogs' => \DB::table('blogs')->get(),
        'fave_blog_ids' => \DB::table('user_favorites')->where('UserId', $user_id)->pluck('type_id')->toArray()];
    return view('profile/blogoverviewprofile')->with($data);
});

Route::get('workoutprofile', function () {
    $data = [
        'user' => Auth::user(),
        'workouts' => \DB::table('workouts')->get(),
        'fave_workout_ids' => \DB::table('user_favorites')->where('UserId', Auth::user()->id)->pluck('type_id')->toArray()
    ];

    return view('profile/workoutprofile')->with($data);
});

Route::get('workoutprofile/{username}', function ($username) {

    $user_id = \DB::table('users')->where('username', $username)->first()->id;

    $data = [
        'user' => \DB::table('users')->where('username', $username)->first(),
        'workouts' => \DB::table('workouts')->get(),
        'fave_workout_ids' => \DB::table('user_favorites')->where('UserId', $user_id)->pluck('type_id')->toArray()
    ];

    return view('profile/workoutprofile')->with($data);
});

Route::get('settingsprofile', function () {

    return view('profile/settingsprofile');
});

Route::get('buddiesprofile', function () {

    $data = [
        'user' => Auth::user(),
        'users' => \DB::table('users')->where('id', '!=', Auth::user()->id)->where(
            ['UserDiet' => Auth::user()->UserDiet,
                'UserGoal' => Auth::user()->UserGoal,
                'UserShape' => Auth::user()->UserShape])->get(),

    ];


    return view('profile/buddiesprofile')->with($data);
});

Route::get('buddiesprofile/{username}', function ($username) {

    $this_user = \DB::table('users')->where('username', $username)->get();

    $data = [
        'user' => \DB::table('users')->where('username', $username)->first(),
        'users' => \DB::table('users')->where('username', '!=', $username)->where(
            ['UserDiet' => $this_user->first()->UserDiet,
                'UserGoal' => $this_user->first()->UserGoal,
                'UserShape' => $this_user->first()->UserShape])->get(),
    ];


    return view('profile/buddiesprofile')->with($data);
});

Route::get('contact', function () {
    return view('footer/contact');
});

Route::get('jobs', function () {
    $data = [
        'jobs' => \DB::table('jobs')->get()
    ];
    return view('footer/jobs')->with($data);
});

Route::get('termsandconditions', function () {
    return view('footer/termsandconditions');
});

Route::get('faq', function () {

    $data= [
      'faqs' => \DB::table('faq')->get()
    ];

    return view('footer/faq')->with($data);
});

Route::get('aboutus', function () {



    $data = [
        'admins' => \DB::table('users')->where('isAdmin', '1')->get()
    ];

    return view('footer/aboutus')->with($data);
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
        'blog' => \DB::table('blogs')->where('id', $blog_id)->first(),

        'blog_author' => \DB::table('users')->where('id', $blogger_id)->first(),

        // get blog comments ordered by their date
        'blog_comments' => $blog_comments->orderBy('BlogCommentDate', 'desc')->get(),

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

Route::post('deleteAccount/{id}', 'SessionsController@deleteAccount');

Route::post('/favorite_workout/{action}/{workout_id}/{user_id}', 'SessionsController@favorite_workout');

Route::post('/favorite_blog/{action}/{blog_id}/{user_id}', 'SessionsController@favorite_blog');

Route::post('/write_comment/{type}/{id}/{user_id}', 'SessionsController@write_comments');

Route::get('overview/{workout_category}', function ($workout_category) {


    $data = [
        'workouts' => \DB::table('workouts'),
        'workout_category' => $workout_category
    ];

    return view('overview')->with($data);
});

Route::get('beforeafteroverview/{type}', function ($type) {


    $data = [
        'user' => Auth::user(),
        'diaries' => \DB::table('diaries')->get(),
        'beforeafterstories' => \DB::table('beforeafterstories')->orderBy('created_at', 'desc')->get(),
        'users' => \DB::table('users')->where('id', '!=', Auth::user()->id),
        'type' => $type,
    ];

    return view('beforeafteroverview')->with($data);
});


Route::get('usertalkoverview/{type}', function ($type) {


    $data = [
        'users' => \DB::table('users')->where('id', '!=', Auth::user()->id),
        'diaries' => \DB::table('diaries')->get(),
        'beforeafterstories' => \DB::table('beforeafterstories'),
        'type' => $type,
    ];

    return view('usertalkoverview')->with($data);
});


Route::get('useroverview/{type}/{type_id}', function ($type, $type_id) {

    $data = [
        'user' => Auth::user(),
        'users' => \DB::table('users')->where('id', '!=', Auth::user()->id)->where($type, $type_id)->get(),
        'type' => $type,
        'type_id' => $type_id
    ];

    return view('useroverview')->with($data);
});

Route::get('alluseroverview/', function () {

    $data = [
        'user' => Auth::user(),
        'users' => \DB::table('users')->where('id', '!=', Auth::user()->id)->get()
    ];

    return view('useroverview')->with($data);
});

Route::get('buddyoverview/', function () {

    $data = [
        'user' => Auth::user(),
        'users' => \DB::table('users')->where('id', '!=', Auth::user()->id)->where(
            ['UserDiet' => Auth::user()->UserDiet,
                'UserGoal' => Auth::user()->UserGoal,
                'UserShape' => Auth::user()->UserShape])->get(),

    ];

    return view('useroverview')->with($data);
});

Route::get('detail/{workout_id}', function ($workout_id) {

    // Get blog comments of blog with the BlogId=$id
    // blog_comments is an array of entries of the table 'blogcomment'
    $workout_comments = \DB::table('workoutcomment')
        ->where('WorkoutId', $workout_id);

    // Get UserIds that are in the blog_comments
    // user_ids is an array of UserIds (e.g., [1,2,3])
    $user_ids = $workout_comments->pluck('UserId')->toArray();

    // Get BloggerId
    $blogger_id = \DB::table('workouts')->where('id', $workout_id)->first()->BloggerId;

    // Get all the data needed to pass to the blade view
    $data = [
        // blog_id is in the url
        'workout_id' => $workout_id,

        // I need the blog entry from the 'blogs' table.
        // Go to the Blogs and find the entry where 'id'=$id
        'workout' => \DB::table('workouts')->where('id', $workout_id)->first(),

        'workout_author' => \DB::table('users')->where('id', $blogger_id)->first(),

        // get blog comments ordered by their date
        'workout_comments' => $workout_comments->orderBy('WorkoutCommentDate', 'desc')->get(),

        // get users associated with blog comments
        'users' => \DB::table('users')
            ->whereIn('id', $user_ids)->get(),

        // get authenticated user
        'user_id' => Auth::user()->id,

        // Boolean variable: true if user likes blog, false otherwise
        'user_likes_workout' => \DB::table('user_favorites')
                ->where(['UserId' => Auth::user()->id, 'type' => 'detail', 'type_id' => $workout_id])->count() > 0
    ];
    return view('detail')->with($data);
});

Route::get('diary/{diary_id}', function ($diary_id) {

    // Get blog comments of blog with the BlogId=$id
    // blog_comments is an array of entries of the table 'blogcomment'
    $diary_comments = \DB::table('diarycomment')
        ->where('DiaryId', $diary_id);

    // Get UserIds that are in the blog_comments
    // user_ids is an array of UserIds (e.g., [1,2,3])
    $user_ids = $diary_comments->pluck('UserId')->toArray();

    // Get BloggerId
    $blogger_id = \DB::table('diaries')->where('id', $diary_id)->first()->DiaryUserId;

    // Get all the data needed to pass to the blade view
    $data = [
        // blog_id is in the url
        'diary_id' => $diary_id,

        // I need the blog entry from the 'blogs' table.
        // Go to the Blogs and find the entry where 'id'=$id
        'diary' => \DB::table('diaries')->where('id', $diary_id)->first(),

        'diary_author' => \DB::table('users')->where('id', $blogger_id)->first(),

        // get blog comments ordered by their date
        'diary_comments' => $diary_comments->orderBy('DiaryCommentDate', 'desc')->get(),

        // get users associated with blog comments
        'users' => \DB::table('users')
            ->whereIn('id', $user_ids)->get(),

        // get authenticated user
        'user_id' => Auth::user()->id,

    ];
    return view('diary')->with($data);
});

Route::get('beforeafter/{bas_id}', function ($bas_id) {

    // Get blog comments of blog with the BlogId=$id
    // blog_comments is an array of entries of the table 'blogcomment'
    $bas_comments = \DB::table('bascomment')
        ->where('BASId', $bas_id);

    // Get UserIds that are in the blog_comments
    // user_ids is an array of UserIds (e.g., [1,2,3])
    $user_ids = $bas_comments->pluck('UserId')->toArray();

    // Get BloggerId
    $blogger_id = \DB::table('beforeafterstories')->where('id', $bas_id)->first()->BeforeAfterStoryUserId;

    // Get all the data needed to pass to the blade view
    $data = [
        // blog_id is in the url
        'bas_id' => $bas_id,

        // I need the blog entry from the 'blogs' table.
        // Go to the Blogs and find the entry where 'id'=$id
        'bas' => \DB::table('beforeafterstories')->where('id', $bas_id)->first(),

        'bas_author' => \DB::table('users')->where('id', $blogger_id)->first(),

        // get blog comments ordered by their date
        'bas_comments' => $bas_comments->orderBy('BASDate', 'desc')->get(),

        // get users associated with blog comments
        'users' => \DB::table('users')
            ->whereIn('id', $user_ids)->get(),

        // get authenticated user
        'user_id' => Auth::user()->id,

    ];
    return view('beforeafter')->with($data);
});


/* BACKEND */

Route::get('dashboard', function () {
    return view('backend/dashboard');
});

Route::get('/backend/useroverview', function () {
    $data = [
        'users' => \DB::table('users')->get()
    ];
    return view('backend/useroverview')->with($data);
});

Route::get('/backend/diaryoverview', function () {
    $data = [
        'diaries' => \DB::table('diaries')->get()
    ];
    return view('backend/diaryoverview')->with($data);
});
Route::get('/backend/blogoverview', function () {
    $data = [
        'blogs' => \DB::table('blogs')->get()
    ];
    return view('backend/blogoverview')->with($data);
});

Route::get('/backend/adminoverview', function () {
    return view('backend/adminoverview');
});

Route::get('/backend/eventoverview', function () {

    $data = [
        'upcoming_events' => \DB::table('events')->where('Upcoming', NULL)->get(),
        'former_events' => \DB::table('events')->where('Upcoming', 1)->get(),
    ];

    return view('backend/eventoverview')->with($data);
});

Route::get('/backend/event_edit', function () {

    $data = [
        'events' => \DB::table('events')->get(),
    ];

    return view('backend/event_edit')->with($data);
});

Route::get('/backend/event_edit/{event_id}', function ($event_id) {

    $data =[
      'event' => \DB::table('events')->where('id', $event_id)->first(),
        'event_id' => $event_id
    ];

    return view('backend/event_edit')->with($data);
});



Route::post('add_faq', 'FAQController@store');
Route::get('add_faq', 'FAQController@create');

Route::get('/backend/admin_faqs', function () {
    return view('backend/admin_faqs');
});


Route::post('add_job', 'JOBController@store');
Route::get('add_job', 'JOBController@create');
Route::get('/backend/admin_jobs', function () {

    return view('backend/admin_jobs');
});




Route::get('/backend/create', function () {

    $data = [
      'admin_users' => \DB::table('users')->where('isAdmin', 1)->get()
    ];

    return view('/backend/create')->with($data);
});

Route::get('add_upcoming_event', 'EventsController@create');
Route::post('add_upcoming_event', 'EventsController@store');
Route::post('update_event/{id}', 'EventsController@edit');
Route::post('delete_event/{id}', 'EventsController@deleteEvent');


Route::get('add_new_workout', 'WorkoutsController@add_new_workout');
Route::post('add_new_workout', 'WorkoutsController@store');
Route::post('edit_workout/{id}', 'WorkoutsController@edit');
Route::post('delete_workout/{id}', 'WorkoutsController@deleteWorkout');

Route::get('create', 'BlogsController@create');
Route::post('create', 'BlogsController@store');
Route::post('upload__blogboxphoto', 'BlogsController@upload_blogboxphoto');
Route::post('upload__blogherophoto', 'BlogsController@upload_blogherophoto');
Route::post('upload__blogphoto', 'BlogsController@upload_blogphoto');
Route::post('edit_blog/{id}', 'BlogsController@edit');
Route::post('delete_blog/{id}', 'BlogsController@deleteBlog');


Route::get('/backend/storyoverview', function () {
    $data = [
        'stories' => \DB::table('beforeafterstories')->get()
    ];
    return view('backend/storyoverview')->with($data);
});

Route::get('/backend/workoutoverview', function () {
    $data = [
        'workouts' => \DB::table('workouts')->get()
    ];
    return view('backend/workoutoverview')->with($data);
});

Route::get('/backend/workout_edit', function () {
    return view('backend/workout_edit');
});

Route::get('/backend/workout_edit/{workout_id}', function ($workout_id) {

    $data =[
        'workout' => \DB::table('workouts')->where('id', $workout_id)->first(),
        'workout_id' => $workout_id,
        'admin_users' => \DB::table('users')->where('isAdmin', 1)->get()
    ];

    return view('backend/workout_edit')->with($data);
});

Route::get('/backend/blog_edit', function () {
    return view('backend/blog_edit');
});

Route::get('/backend/blog_edit/{blog_id}', function ($blog_id) {

    $data =[
        'blog' => \DB::table('blogs')->where('id', $blog_id)->first(),
        'blog_id' => $blog_id,
        'admin_users' => \DB::table('users')->where('isAdmin', 1)->get()
    ];

    return view('backend/blog_edit')->with($data);
});