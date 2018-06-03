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
                    <a href="{{ url('logout') }}">Logout</a>
                </div>
            </div>
        @else
            <div class="profile_navigation">
                <div class="profile_navigation_sections profile_navigation__section_box">
                    <a href="{{ url ('profile/' . $user->username)}}">Profile</a>
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
        @if($user->username === Auth::user()->username)
            <div class="profile_diary_section">
                <p class="explain_fav_blogs_p">THIS OVERVIEW IS GOING TO BE AN OVERVIEW OF THE WORKOUT BUDDIES. SINCE
                    DATABASE DOES NOT EXIST YET THERE ARE NO BUDDIES TO SHOW.</p>
                <p class="explain_fav_blogs_p">Have you ever noticed this strange Icon and wondered what it might do?
                    No need to be afraid, you won*t lose your heart to a person, who gives it back after a second. This
                    Icon
                    is meant for real love -
                    Nutrition Love! Do you have Blogs you'd like to remember? Simply click the item and...</p>
                <p class="explain_fav_blogs_p">...it will turn into this wonderful, heartwarming image, to remind you to
                    have a favorite! BUT... Yes, it could be,
                    that Blogs you faved might disappear from your list. Not because we are mean and like to see your
                    reaction in the hidden camera that turns on, after your first sign up
                    at SHAPE OF YOU. (Please notice, that this was a joke!) No. The reason is, that sometimes Trends or
                    even
                    experts change their mind and
                    we only want our Blogs to be up-to-date!</p>
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