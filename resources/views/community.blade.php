@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | Community</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>COMMUNITY</h1>
    </div>

    <div class="community_bg">
        <div class="community_section">
            <div>
                <p class="superfood_text">
                    Join our community and get one step closer to your better self.
                    Connect, chat, share, motivate each other and reach your goals together!
                </p>
                <p>
                    Find people with the same goals, diet, body shape and motivation as you!
                    Get your workout buddy today, start now!
                </p>
            </div>
        </div>
    </div>

    <div class="title_bg">
        <h2>Stay motivated</h2>
    </div>
    <div class="community_section_2">
        <div class="community_text_section">
            <h3>Our Stories</h3>
            <p>
                Stop! No need to search for motivation any longer! It's right here in front of you! Choose the story
                you'd like to
                read or share your own with the community.
            </p>
            <p>
                Either it's about your daily workout, sports, workout buddy
                moments, your personal body change or other stuff you'd like to share.
                Do it! Read it! Be part of it!
            </p>
        </div>
        <div class="community_box_section">
            <div class="community_box_beforeafter">
                <a class="community_box_link" href="@if( (auth()->check())){{ url('beforeafteroverview/beforeafterstories') }}@else{{url('register')}}@endif">BEFORE/ AFTER STORIES</a>
            </div>
            <div class="community_box_workoutbuddies">
                <a class="community_box_link" href="@if( (auth()->check())){{url('buddyoverview/')}}@else{{url('register')}}@endif">WORKOUT BUDDIES</a>
            </div>
            <div class="community_box_diaries">
                <a class="community_box_link" href="@if( (auth()->check())){{url('usertalkoverview/diaries/')}}@else{{url('register')}}@endif">WORKOUT DIARIES</a>
            </div>
            <div class="community_box_meetups">
                <a class="community_box_link" href="{{url('meetups')}}">MEETUPS</a>
            </div>
        </div>
    </div>

    <div class="title_bg">
        <h2>Find new Workout Buddies</h2>
    </div>
    <div class="buddy_bg">
        <div class="buddy_section">

            <div class="buddy_section_dietandgoals buddy_section_diet_style">
                <h3>Find people with different diets</h3>
                <div>
                    <a href="@if( (auth()->check())){{url('useroverview/UserDiet/4')}}@else{{url('register')}}@endif" class="buddy_section_same_content">
                        <div class="community_vegetarian"></div>
                        <span>VEGETARIAN</span>
                    </a>
                    <a href="@if( (auth()->check())){{url('useroverview/UserDiet/3')}}@else{{url('register')}}@endif" class="buddy_section_same_content">
                        <span>VEGAN</span>
                        <div class="community_vegan"></div>
                    </a>
                    <a href="@if( (auth()->check())){{url('useroverview/UserDiet/2')}}@else{{url('register')}}@endif" class="buddy_section_same_content">
                        <div class="community_pescetarian"></div>
                        <span>PESCETARIAN</span>
                    </a>
                    <a href="@if( (auth()->check())){{url('useroverview/UserDiet/1')}}@else{{url('register')}}@endif" class="buddy_section_same_content">
                        <span>NO DIET</span>
                        <div class="community_nospecialdiet"></div>
                    </a>
                </div>
            </div>

            <div class="buddy_section_dietandgoals buddy_section_diet_style">
                <h3>Find people with different goals</h3>
                <div>
                    <a href="@if( (auth()->check())){{url('useroverview/UserGoal/1')}}@else{{url('register')}}@endif" class="buddy_section_same_content">
                        <span>LOSE WEIGHT</span>
                        <div class="community_loseweight"></div>
                    </a>
                    <a href="@if( (auth()->check())){{url('useroverview/UserGoal/2')}}@else{{url('register')}}@endif" class="buddy_section_same_content">
                        <div class="community_becomefit"></div>
                        <span>BECOME FIT</span>
                    </a>
                    <a href="@if( (auth()->check())){{url('useroverview/UserGoal/3')}}@else{{url('register')}}@endif" class="buddy_section_same_content">
                        <span>BUILD MUSCLES</span>
                        <div class="community_buildmuscles"></div>
                    </a>
                    <a href="@if( (auth()->check())){{url('useroverview/UserGoal/4')}}@else{{url('register')}}@endif" class="buddy_section_same_content">
                        <div class="community_stayhealthy"></div>
                        <span>STAY HEALTHY</span>
                    </a>
                </div>
            </div>

            <div class="buddy_section_dietandgoals buddy_section_diet_style">
                <h3>Find people with different Body Shapes</h3>
                <div>
                    <a href="@if( (auth()->check())){{url('useroverview/UserShape/3')}}@else{{url('register')}}@endif" class="buddy_section_same_content">
                        <div class="community_hourglassshape"></div>
                        <span>HOUR GLASS</span>
                    </a>
                    <a href="@if( (auth()->check())){{url('useroverview/UserShape/2')}}@else{{url('register')}}@endif" class="buddy_section_same_content">
                        <span>APPLE</span>
                        <div class="community_appleshape"></div>
                    </a>
                    <a href="@if( (auth()->check())){{url('useroverview/UserShape/4')}}@else{{url('register')}}@endif" class="buddy_section_same_content">
                        <div class="community_straightshape"></div>
                        <span>STRAIGHT</span>
                    </a>
                    <a href="@if( (auth()->check())){{url('useroverview/UserShape/1')}}@else{{url('register')}}@endif" class="buddy_section_same_content">
                        <span>PEAR</span>
                        <div class="community_pearshape"></div>
                    </a>
                </div>
            </div>

            <a href="@if( (auth()->check())){{url('alluseroverview/')}}@else{{url('register')}}@endif" class="white_button">
                <span>Show all Users!</span>
            </a>

        </div>
    </div>

@endsection