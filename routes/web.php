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


//FRONT END

//Home
Route::get('/', 'Welcome@view');

//Superfood
Route::get('superfood','BlogsController@superfood_view');

//Workout
Route::get('workout','WorkoutsController@workout_view');

//Community
Route::get('/community', 'CommunityController@community_view');

//Meetups
Route::get('meetups', 'EventsController@meetups_view');

//Meetups-Galleries
Route::get('gallery/{former_event_id}', 'EventsController@gallery_view');
Route::post('gallery/{former_event_id}', 'EventsController@gallery_view');


//Edit Profile Settings
Route::post('/upload_profilepic', 'RegisterController@edit');

Route::post('/edit', 'RegisterController@edit');
Route::get('settingsprofile', 'RegisterController@settings_view');

//Register
Route::get('register', 'RegisterController@create');
Route::post('register', 'RegisterController@store');

//Login
Route::group(['middleware' => ['web']], function () {
    Route::get('/login', ['as' => 'login', 'uses' => 'SessionsController@login']);
    Route::get('/logout', ['as' => 'logout', 'uses' => 'SessionsController@logout']);
    Route::post('/handlelogin', ['as' => 'handlelogin', 'uses' => 'SessionsController@handlelogin']);
});

//Delete Account
Route::post('deleteAccount/{id}', 'SessionsController@deleteAccount');

// Profiles

// User Diaries
Route::post('DiaryHeroImage', 'ProfileDiaryController@store');
Route::post('profile', 'ProfileDiaryController@store');
Route::get('profile', 'ProfileDiaryController@create');




Route::post('delete_diary_comment/{diary_id}/{diary_comment_id}', 'ProfileDiaryController@deleteDiaryComment');
Route::post('delete_diary_entry/{diary_id}', 'ProfileDiaryController@deleteDiaryEntry');
Route::post('delete_diary_frombackend/{diary_id}', 'ProfileDiaryController@deleteDiaryFromBackend');


//My Profile
Route::get('profile/', 'ProfileDiaryController@my_profile_view');
//Other User's Profile
Route::get('profile/{username}', 'ProfileDiaryController@other_profile_view');

//Create Before After Stories (Profile)
Route::post('BeforeAfterStoryImageOne', 'BeforeAfterStoryController@store');
Route::post('BeforeAfterStoryImageTwo', 'BeforeAfterStoryController@store');
Route::post('BeforeAfterStory', 'BeforeAfterStoryController@store');
Route::get('BeforeAfterStory', 'BeforeAfterStoryController@create');

//Handle Comments
Route::post('delete_bas_comment/{bas_id}/{bas_comment_id}', 'BeforeAfterStoryController@deleteBasComment');
Route::post('delete_bas_entry/{bas_id}', 'BeforeAfterStoryController@deleteBasEntry');
Route::post('delete_bas_frombackend/{bas_id}', 'BeforeAfterStoryController@deleteBasFromBackend');

Route::get('beforeafterprofile', 'BeforeAfterStoryController@my_bas_view');
Route::get('beforeafterprofile/{username}', 'BeforeAfterStoryController@other_bas_view');

//Motivational Letter
Route::post('/futureletter/{id}', 'MotivationController@FutureLetter');
Route::get('motivationprofile', 'MotivationController@view');

//Blogoverview
//My Blogs
Route::get('blogoverviewprofile', 'ProfileBlogsController@my_blogs_view');

//Help
Route::get('helpprofile', 'ProfileHelpController@help_view');

//Other User's Blogs
Route::get('blogoverviewprofile/{username}', 'ProfileBlogsController@other_blogs_view');

//My Workout
Route::get('workoutprofile', 'ProfileWorkoutsController@my_workout_view');

//Other Workout
Route::get('workoutprofile/{username}', 'ProfileWorkoutsController@other_workout_view');

//My Buddies
Route::get('buddiesprofile', 'ProfileBuddiesController@my_buddies_view');

//Other Buddies
Route::get('buddiesprofile/{username}', 'ProfileBuddiesController@other_buddies_view');

//Profile End

//Overviews
Route::get('overview/{workout_category}', 'OverviewController@workout_overview');
Route::get('beforeafteroverview/{type}', 'OverviewController@bas_overview');
Route::get('usertalkoverview/{type}', 'OverviewController@diary_overview');
Route::get('useroverview/{type}/{type_id}', 'OverviewController@user_overview');
Route::get('alluseroverview/', 'OverviewController@allusers_overview');
Route::get('buddyoverview/', 'OverviewController@buddy_overview');

//Blogs
Route::get('blog/{blog_id}', 'BlogsController@blogdetail_view');

//Workouts
Route::get('detail/{workout_id}', 'WorkoutsController@detail_view');

//Before After Stories
Route::get('beforeafter/{bas_id}', 'BeforeAfterStoryController@detail_bas_view');

//Diaries
Route::get('diary/{diary_id}', 'ProfileDiaryController@detail_diary_view');


//Footer
Route::get('contact', 'FooterController@contact_view');
Route::get('jobs', 'FooterController@jobs_view');
Route::get('termsandconditions', 'FooterController@tac_view');
Route::get('faq', 'FooterController@faq_view');
Route::get('aboutus', 'FooterController@about_view');


//Inetractions
Route::post('/favorite_workout/{action}/{workout_id}/{user_id}', 'SessionsController@favorite_workout');
Route::post('/favorite_blog/{action}/{blog_id}/{user_id}', 'SessionsController@favorite_blog');
Route::post('/write_comment/{type}/{id}/{user_id}', 'SessionsController@write_comments');



//BACKEND
Route::get('dashboard', 'BackendController@dashboard_view');



//Users
Route::post('edit_user/{id}', 'RegisterController@edit_user');
Route::get('/backend/useroverview', 'BackendController@useroverview_view');
Route::get('/backend/user_edit/{user_id}', 'BackendController@user_edit_view');
Route::get('/backend/user_edit', 'BackendController@useredit_view');
Route::post('delete_communitymember/{id}', 'RegisterController@deleteCommunitymember');

//Blogs
Route::get('/backend/blogoverview', 'BackendController@blogoverview_view');

//Workouts
Route::get('/backend/workoutoverview', 'BackendController@workoutoverview_view');

//Diaries
Route::get('/backend/diaryoverview', 'BackendController@diaryoverview_view');

//BAS
Route::get('/backend/storyoverview', 'BackendController@storyoverview_view');
//Events
Route::get('/backend/eventoverview', 'BackendController@eventoverview_view');

//Admin Infos
Route::get('/backend/adminoverview', 'BackendController@adminoverview_view');
Route::get('/backend/jobs_faq_overview', 'BackendController@jobs_faq_overview_view');
Route::get('/backend/admin_faqs', 'BackendController@admin_faqs_view');
Route::get('/backend/admin_jobs', 'BackendController@admin_jobs_view');

//Create
Route::get('register_new_user', 'RegisterController@store_new_user');
Route::post('register_new_user', 'RegisterController@store_new_user');
Route::post('add_faq', 'FAQController@store');
Route::get('add_faq', 'FAQController@create');
Route::post('add_job', 'JOBController@store');
Route::get('add_job', 'JOBController@create');
Route::get('/backend/create', 'BackendController@create_view');

Route::get('add_upcoming_event', 'EventsController@create');
Route::post('add_upcoming_event', 'EventsController@store');

//Edit
Route::get('/backend/event_edit', 'BackendController@event_edit_view');
Route::get('/backend/event_edit/{event_id}', 'BackendController@event_edit');
Route::post('edit_faq/{id}', 'FAQController@edit_faq');
Route::post('delete_faq/{id}', 'FAQController@delete_faq');
Route::get('/backend/faq_edit', 'BackendController@faq_edit_view');
Route::get('/backend/faq_edit/{faq_id}', 'BackendController@faq_edit');
Route::post('edit_job/{id}', 'JOBController@edit_job');
Route::post('delete_job/{id}', 'JOBController@delete_job');
Route::get('/backend/job_edit/{job_id}', 'BackendController@job_edit');

Route::post('edit_event/{id}', 'EventsController@buy_ticket');
Route::post('update_event/{id}', 'EventsController@edit');
Route::post('delete_event/{id}', 'EventsController@deleteEvent');

Route::post('WorkoutHeroImage', 'WorkoutsController@store');
Route::post('WorkoutImage', 'WorkoutsController@store');
Route::post('add_new_workout', 'WorkoutsController@store');
Route::post('edit_workout/{id}', 'WorkoutsController@edit');
Route::post('delete_workout/{id}', 'WorkoutsController@deleteWorkout');
Route::post('delete_workout_comment/{workout_id}/{id}', 'WorkoutsController@deleteWorkoutComment');

Route::post('BlogHeroImage', 'BlogsController@store');
Route::post('BlogImage', 'BlogsController@store');
Route::get('create', 'BlogsController@create');
Route::post('create', 'BlogsController@store');


Route::post('edit_blog/{id}', 'BlogsController@edit');
Route::post('delete_blog/{id}', 'BlogsController@deleteBlog');
Route::post('delete_blog_comment/{blog_id}/{blog_comment_id}', 'BlogsController@deleteBlogComment');

Route::get('/backend/workout_edit', 'BackendController@workout_edit_view');
Route::get('/backend/workout_edit/{workout_id}', 'BackendController@workout_edit');

Route::get('/backend/blog_edit', 'BackendController@blog_edit_view');
Route::get('/backend/blog_edit/{blog_id}', 'BackendController@blog_edit');

