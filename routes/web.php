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
    return view('superfood');
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


//Route::post('/login', 'SessionsController@store');
//Route::get('/logout', 'SessionsController@destroy');
/*
Route::get('login', function () {
    return view('login');
});

Route::get('/register', 'RegisterController@create');
Route::post('register', 'RegisterController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');
*/

Route::get('/community', function () {
    return view('community');
});

Route::get('profile', function () {
    return view('profile/profile');
});

Route::get('beforeafterprofile', function () {
    return view('profile/beforeafterprofile');
});

Route::get('motivationprofile', function () {
    return view('profile/motivationprofile');
});

Route::get('blogoverviewprofile', function () {
    return view('profile/blogoverviewprofile');
});

Route::get('workoutprofile', function () {
    return view('profile/workoutprofile');
});

Route::get('settingsprofile', function () {
    return view('profile/settingsprofile');
});

Route::get('buddiesprofile', function () {
    return view('profile/buddiesprofile');
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

Route::get('blog', function () {
    return view('blog');
});

Route::get('overview', function(){
   return view('overview');
});


Route::get('detail', function(){
   return view('detail');
});

Route::get('dashboard', function(){
    return view('backend/dashboard');
});