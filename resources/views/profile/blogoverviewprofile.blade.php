@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | My Blogs</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>MY BLOGS</h1>
    </div>
    <div class="profile_section">
        <div class="profile_navigation">

            <div class="profile_navigation_sections profile_navigation__section_box">
                <a href="{{ url ('profile')}}">My Profile</a>
            </div>
            <div class="profile_navigation_sections profile_navigation__section_box">
                <a href="{{ url ('beforeafterprofile')}}">My Before/After-Stories</a>
            </div>
            <div class="profile_navigation_sections profile_navigation__section_box">
                <a href="{{ url ('motivationprofile')}}">My Motivation Letters</a>
            </div>
            <div class="profile_navigation_sections profile_navigation__section_box">
                <a href="{{ url ('blogoverviewprofile')}}">My Blogs</a>
            </div>
            <div class="profile_navigation_sections profile_navigation__section_box">
                <a href="{{ url ('workoutprofile')}}">My Workout</a>
            </div>
            <div class="profile_navigation_sections profile_navigation__section_box">
                <a href="{{ url ('buddyprofile')}}">Workout Buddies</a>
            </div>
            <div class="profile_navigation_sections profile_navigation__section_box">
                <a href="{{ url ('settingsprofile')}}">Help & Seetings</a>
            </div>
            <div class="profile_navigation_sections profile_navigation__section_box">
                <a href="{{ url ('welcome')}}">Logout</a>
            </div>
        </div>

        <div class="profile_diary_section">
        <p class="explain_fav_blogs_p">Is there anything you would like to remember? Do not fear - your favourites are here! Every Blog you liked, every
            article you were or still are interested in it - as long as you klicked on the heart, it will show up here. But
            be aware that if we update our Blogs - because fitness and nutrition has to go with time too - your Blogs could
            disappear.</p>
            <img src="{{ asset ('images/unclicked_fav_icon.png')}}" alt="unclicked fav icon" width="100" height="100">
            <p class="explain_fav_blogs_p">Have you ever noticed this strange Icon and wondered what it might do?
            No need to be afraid, you won*t lose your heart to a person, who gives it back after a second. This Icon is meant for real love -
            Nutrition Love! Do you have Blogs you'd like to remember? Simply click the item and...</p>
            <img src="{{ asset ('images/fav_icon.png')}}" alt="fav icon" width="100" height="100">
            <p class="explain_fav_blogs_p">...it will turn into this wonderful, heartwarming image, to remind you to have a favorite! BUT... Yes, it could be,
            that Blogs your faved might disappear from your list. Not because we are mean and like to see your reaction in the hidden camera that turns on, after your first sign up
            at SHAPE OF YOU. (Please notice, that this was a joke!) No, it*s not the reason. The reason is, that sometimes Trends or even experts change their mind and
            we only want our Blogs to be up-to-date. So if we notice an old fashioned way of thinking - we switch it with a new style!</p>

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