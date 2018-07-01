@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | Profile</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>TIME FOR MOTIVATION</h1>
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

            <h2>Write a motivational Letter...</h2>
            <p>...and decide when to receive it! We all have some troubles to stay focused or lack motivation sometimes.
                And who knows better how to motivate oneself than oneself? Exactly this is what this Letter is about! Write
                down why you don't want you future self to give up! Remind your future self why you started! You know
                best if you need motivation per week, month or from time to time. Whenever you feel like it: write
                and motivate yourself! You will receive the letter per email so this letter is private and won't be sharable with other members!</p>
            <form class="diary_form" method="post" enctype="multipart/form-data" action="/futureletter/{{Auth::user()->id}}">
                <label>Write a Title</label>
                <input type="text" name="title" placeholder="I am the Title"><br>
                <label>Write your Entry</label>
                <input type="text" name="title" placeholder="I am the Content"><br>
                <label>When to receive?</label>
                <input type="date" name="ReceiveLetter">
                <button type="submit" value="Send Letter" name="sendletter" class="profile_button">Send Letter</button>
            </form>


        </div>
    </div>

@endsection