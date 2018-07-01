@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | Profile</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>LET US HELP YOU</h1>
    </div>
    <div class="profile_section">
        <div class="profile_navigation">

            <div class="profile_navigation_sections profile_navigation__section_box">
                <a href="{{ url ('profile')}}">My Profile</a>
            </div>
            <div class="profile_navigation_sections profile_navigation__section_box">
                <a href="{{ url ('beforeafterprofile')}}">Before/After</a>
            </div>
            <div class="profile_navigation_sections profile_navigation__section_box">
                <a href="{{ url ('motivationprofile')}}">Motivation</a>
            </div>
            <div class="profile_navigation_sections profile_navigation__section_box">
                <a href="{{ url ('blogoverviewprofile')}}">My Blogs</a>
            </div>
            <div class="profile_navigation_sections profile_navigation__section_box">
                <a href="{{ url ('workoutprofile')}}">My Workout</a>
            </div>
            <div class="profile_navigation_sections profile_navigation__section_box">
                <a href="{{ url ('buddiesprofile')}}">My Buddies</a>
            </div>
            <div class="profile_navigation_sections profile_navigation__section_box">
                <a href="{{ url ('settingsprofile')}}">Settings</a>
            </div>
            <div class="profile_navigation_sections profile_navigation__section_box">
                <a href="{{ url ('helpprofile')}}">Help</a>
            </div>
            <div class="profile_navigation_sections profile_navigation__section_box">
                <a href="{{ url('logout') }}">Logout</a>
            </div>
        </div>
        <div class="responsive-profile-nav">
            <div>
                <a>
                    <img id="profileicon" class="burgericon" width="60" height="60"
                         src="{{ asset('images/user_icon.png') }}" alt="burger icon">
                </a>
            </div>
            <ul id="responsive-profile-nav">

                <li><a href="{{ url('profile') }}">My Profile</a></li>
                <li><a href="{{ url('beforeafterprofile') }}">Stories</a></li>
                <li><a href="{{ url('motivationprofile') }}">Motivation</a></li>
                <li><a href="{{ url ('blogoverviewprofile') }}">My Blogs</a></li>
                <li><a href="{{ url('workoutprofile') }}">Workout</a></li>
                <li><a href="{{ url('buddiesprofile') }}">Buddies</a></li>
                <li><a href="{{ url('settingsprofile') }}">Settings</a></li>
                <li><a href="{{ url('logout') }}">Logout</a></li>
            </ul>
        </div>

        <div class="profile_diary_section">
            <h2>Welcome, welcome!</h2>
            <h3>Let's start with some introductions to guide you through SHAPE OF YOU!</h3>
            <p>Don't worry. A new beginning can be overwhelming sometimes, but we help you getting started. And whenever
                you feel lost - come back here to let us help you! So... let's start with your Profile! Scroll down!</p>

        </div>
    </div>
    <h3>My Profile</h3>
    <p>On your Profile you have a lot of cool things to try out. </p>
    <ol class="help_ol">
        <li>
            <h4>Diary</h4>
            <p>Your Diary can be everything you would like to talk about. Your workout, progress with your diet,
                compliments about the changes you made so far - whatever you want to share - do it and inpsire
                other members to keep going! Be aware that your Diary will be public for all logged in
                members!</p>
        </li>
        <li>
            <h4>Before/After</h4>
            <p>Did you achieve an awesome goal? Did you lose 10 kg, did you get a sixpack? Whatever it is -
                share it and motivate others. Because you CAN change! Be aware that your Diary will be public
                for all logged in
                members!</p>
        </li>
        <li>
            <h4>Motivation</h4>
            <p>This section is private to you and only belongs to you and yourself! In here you can write
                yourself a motivational letter, which you will receive via Email. And the best about it? Chose
                when to receive it!! Nobody will ever see it, it will not show up anywhere besides in your
                Email!</p>
        </li>
        <li>
            <h4>Blogs</h4>
            <p>In this section you see all the Blogs you lost your heart for! No, seriously - if there is a Blog
                you like, click the heart symbol and it will be saved. Other members can see your Blogs!</p>
        </li>
        <li>
            <h4>Workout</h4>
            <p>Same for the Workouts as for Blogs! Like a Workout by clicking Mr. Muscle and it will be added to
                your daily Workout. Just click left and right to chose the Workout in your Workout Profile
                Section. If you want to do a workout, click in the middle of the image and you are there. To
                continue your workout, just hit the back button in your Browser or Phone and you will be back on
                your profile to continue your Workout! Logged in membeers will be able to see your workout!</p>
        </li>
        <li>
            <h4>Buddies</h4>
            <p>In this section you see all community members with exactly the same circumstances as yours! Same
                Body Shape + Same Diet + Same Goal! If this section is empty, you are one of a kind!</p>
        </li>
        <li>
            <h4>Settings</h4>
            <p>In here you can change whatever you need to change - besides body weight of course. Changes can
                lead to new friends in your Buddy Section by the way...</p>
        </li>
        @if(Auth::user()->isAdmin === 1)
            <li>
                <h4>Admin Settings</h4>
                <p>Make sure to scroll down to the Admin Settings and fill out everything! You can update at
                    anytime!</p>
            </li>
        @endif
        <li>
            <h4>Help</h4>
            <p>Well... Hello! This is self explaining.</p>
        </li>
        <li>
            <h4>Logout</h4>
            <p>Well... Goodbye!</p>
        </li>
    </ol>

    <h3>Now to SHAPE OF YOU!</h3>
    <ol class="help_ol">
        <li>
            <h4>Superfood</h4>
            <p>In here you will find some interesting Blogs about Nutrition and Diets.</p>
        </li>
        <li>
            <h4>Workouts</h4>
            <p>Workout Blogs and Workouts can be found here!</p>
        </li>
        <li>
            <h4>Community</h4>
            <p>In here you can find Community Members of all kind! Your Workout Buddies, Users with a vegan diet,
                pescetarian diet, goal to lose weight...well, you get the point. You can also scroll at the bottom of
                the page and get an overview of our whole community! Pretty cool, eh?</p>
        </li>
        <li>
            <h4>Meetups</h4>
            <p>Oh the Meetups! Where people meet to celebrate, drink, dance, run, communicate. We will throw some
                (party) events from time to time, so make sure, you get one of our limited tickets in time! You can also
                view galleries of former events to see what awesome stuff you missed!</p>
        </li>
        <li>
            <h4>Profile</h4>
            <p>Well...if you did not understand it yet -> please scroll up!</p>
        </li>
        @if(Auth::user()->isAdmin === 1)
            <li>
                <h4>Backend</h4>
                <p>In the Backend you can act like a magician! View all Users, Diaries, Before After Stories (we just
                    call it BAS), Workouts, Blogs, Events, whatever! In create, you can create whatever you want! Just
                    no Frankenstein-Monster please, we are a fitness website, not a Halloween Party Service!</p>
            </li>
        @endif
    </ol>



@endsection