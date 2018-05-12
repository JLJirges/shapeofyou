@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | My Buddies</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>MY BUDDIES</h1>
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
                <a href="{{ url ('welcome')}}">Logout</a>
            </div>
        </div>

        <div class="profile_diary_section">
            <p class="explain_fav_blogs_p">THIS OVERVIEW IS GOING TO BE AN OVERVIEW OF THE WORKOUT BUDDIES. SINCE
                DATABASE DOES NOT EXIST YET THERE ARE NO BUDDIES TO SHOW.</p>
            <p class="explain_fav_blogs_p">Have you ever noticed this strange Icon and wondered what it might do?
                No need to be afraid, you won*t lose your heart to a person, who gives it back after a second. This Icon
                is meant for real love -
                Nutrition Love! Do you have Blogs you'd like to remember? Simply click the item and...</p>
            <p class="explain_fav_blogs_p">...it will turn into this wonderful, heartwarming image, to remind you to
                have a favorite! BUT... Yes, it could be,
                that Blogs you faved might disappear from your list. Not because we are mean and like to see your
                reaction in the hidden camera that turns on, after your first sign up
                at SHAPE OF YOU. (Please notice, that this was a joke!) No. The reason is, that sometimes Trends or even
                experts change their mind and
                we only want our Blogs to be up-to-date!</p>
        </div>
    </div>

    <div class="square_box_section profile_fav_box_section">
        <div class="box_appetizers">
            <a class="box_link" href="{{url('blog')}}">APPETIZERS</a>
        </div>
        <div class="box_breakfast">
            <a class="box_link" href="{{url('blog')}}">BREAKFAST</a>
        </div>
        <div class="box_lunch">
            <a class="box_link" href="{{url('blog')}}">LUNCH</a>
        </div>
        <div class="box_snacks">
            <a class="box_link" href="{{url('blog')}}">SNACKS</a>
        </div>
    </div>
    <div class="square_box_section">
        <div class="box_appetizers">
            <a class="box_link" href="{{url('blog')}}">APPETIZERS</a>
        </div>
        <div class="box_breakfast">
            <a class="box_link" href="{{url('blog')}}">BREAKFAST</a>
        </div>
        <div class="box_lunch">
            <a class="box_link" href="{{url('blog')}}">LUNCH</a>
        </div>
        <div class="box_snacks">
            <a class="box_link" href="{{url('blog')}}">SNACKS</a>
        </div>
    </div>






@endsection