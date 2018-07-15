@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | My Buddies</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>MY BUDDIES</h1>
    </div>
    <div class="profile_section">
        @if($user->username === Auth::user()->username)
            <div class="profile_navigation">
                <div class="profile_navigation_sections profile_navigation__section_box">
                    <a href="{{ url ('profile')}}">My Diary</a>
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
        @else
            <div class="profile_navigation">
                <div class="profile_navigation_sections profile_navigation__section_box">
                    <a href="{{ url ('profile/' . $user->username)}}">Diary</a>
                </div>
                <div class="profile_navigation_sections profile_navigation__section_box">
                    <a href="{{ url ('beforeafterprofile/' . $user->username)}}">Stories</a>
                </div>
                <div class="profile_navigation_sections profile_navigation__section_box">
                    <a href="{{ url ('blogoverviewprofile/' . $user->username)}}">Blogs</a>
                </div>
                <div class="profile_navigation_sections profile_navigation__section_box">
                    <a href="{{ url ('workoutprofile/' . $user->username)}}">Workout</a>
                </div>
                <div class="profile_navigation_sections profile_navigation__section_box">
                    <a href="{{ url ('buddiesprofile/' . $user->username)}}">Buddies</a>
                </div>
            </div>
        @endif
        <div class="responsive-profile-nav">
            <div>
                <a>
                    <img id="profileicon" class="burgericon" width="60" height="60"
                         src="{{ asset('images/user_icon.png') }}" alt="burger icon">
                </a>
            </div>
            @if($user->username === Auth::user()->username)

                <ul id="responsive-profile-nav">

                    <li><a href="{{ url('profile') }}">My Diary</a></li>
                    <li><a href="{{ url('beforeafterprofile') }}">Stories</a></li>
                    <li><a href="{{ url('motivationprofile') }}">Motivation</a></li>
                    <li><a href="{{ url ('blogoverviewprofile') }}">My Blogs</a></li>
                    <li><a href="{{ url('workoutprofile') }}">Workout</a></li>
                    <li><a href="{{ url('buddiesprofile') }}">Buddies</a></li>
                    <li><a href="{{ url('settingsprofile') }}">Settings</a></li>
                    <li><a href="{{ url('logout') }}">Logout</a></li>
                </ul>
            @else
                <ul id="responsive-profile-nav">
                    <li><a href="{{ url('profile/' . $user->username) }}">Diary</a></li>
                    <li><a href="{{ url('beforeafterprofile/' . $user->username) }}">Stories</a></li>
                    <li><a href="{{ url ('blogoverviewprofile/' . $user->username) }}">Blogs</a></li>
                    <li><a href="{{ url('workoutprofile/' . $user->username) }}">Workout</a></li>
                    <li><a href="{{ url('buddiesprofile/' . $user->username) }}">Buddies</a></li>
                </ul>
            @endif
        </div>
        @if($user->username === Auth::user()->username)
            <div class="profile_diary_section">
                <p class="explain_fav_blogs_p">We do not like people who feel alone in our community! So if you are
                    interested in how other people with exactly the same conditions as yours do, scroll down and have a
                    look at your
                    Workout Buddies! See their diaries, favorite Blogs, Workouts, their struggles and achievements!
                    Motivate yourself, comment on their entries, show them they are not alone! And if you want to see
                    how other people do, go to the Community Section, decide who you want to visit or scroll down to the
                    bottom and let us introduce you to the whole Community of SHAPE OF YOU!</p>
                <p class="explain_fav_blogs_p">
                    If no users show up in this section, then we have to tell you, that you are one of a kind! Exactly -
                    you are special! This basically means, that you are the only one with the Body Shape, Goal and Diet
                    combination in our whole community! So what to do now? If you don't want to be without Buddies,
                    either invite some friends to join SHAPE OF YOU or go to Settings in your Profile and change either
                    your Goal or Diet.
                </p>
            </div>

        @else
            <div class="profile_info_section">
                <div class="profile_info_section_images">
                    <div>
                        @if($user->profilepic)
                            <div style="background-image:url({{asset('images/uploads/' . $user->profilepic)}});background-size:cover; background-position:center;"
                                 class="profile_picture"><span class="show_username_profile">{{$user->username}}
                </span>
                            </div>
                        @else
                            <a href="{{url('profile/' . $user->username)}}"
                               style="background-image:url({{ asset ('images/profile/default_profile_pic_v1.png')}});background-size:cover; background-position:center;"
                               class="backend_profile_picture_overview"><span class="show_username_profile">{{$user->username}}
                </span></a>
                        @endif

                    </div>

                    <p class="profile_section_personal_motivation_quote">@if($user->mq){{ $user->mq }} @else
                            'No motivational quote defined...' @endif</p>
                </div>
            </div>
        @endif
    </div>

    @if($user->username === Auth::user()->username)
        <div class="square_box_section">

            @foreach($users as $showuser)
                @if($showuser->profilepic )

                    <a href="{{url('profile/' . $showuser->username)}}"
                       style="background-image:url({{asset('images/uploads/' . $showuser->profilepic)}});background-size:cover; background-position:center;"
                       class="backend_profile_picture_overview"><span class="username_backend_overview">{{$showuser->username}}
                </span>
                    </a>
                @else
                    <a href="{{url('profile/' . $showuser->username)}}"
                       style="background-image:url({{ asset ('images/profile/default_profile_pic_v1.png')}});background-size:cover; background-position:center;"
                       class="backend_profile_picture_overview"><span class="username_backend_overview">{{$showuser->username}}
                </span></a>
                @endif

            @endforeach
        </div>
    @else
        <div class="square_box_section">

            @foreach($users as $showuser)
                @if($showuser->profilepic )

                    <a href="{{url('profile/' . $showuser->username)}}"
                       style="background-image:url({{asset('images/uploads/' . $showuser->profilepic)}});background-size:cover; background-position:center;"
                       class="backend_profile_picture_overview"><span class="username_backend_overview">{{$showuser->username}}
                </span>
                    </a>
                @else
                    <a href="{{url('profile/' . $showuser->username)}}"
                       style="background-image:url({{ asset ('images/profile/default_profile_pic_v1.png')}});background-size:cover; background-position:center;"
                       class="backend_profile_picture_overview"><span class="username_backend_overview">{{$showuser->username}}
                </span></a>
                @endif

            @endforeach
        </div>
    @endif




@endsection