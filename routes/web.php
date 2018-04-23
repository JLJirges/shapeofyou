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

Route::get('register', function () {
    return view('register');
});

Route::get('community', function () {
    return view('community');
});

Route::get('profile', function () {
    return view('profile');
});

Route::get('recipe', function () {
    return view('recipe');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('jobs', function () {
    return view('jobs');
});

Route::get('termsandconditions', function () {
    return view('termsandconditions');
});

Route::get('faq', function () {
    return view('faq');
});

Route::get('aboutus', function () {
    return view('aboutus');
});