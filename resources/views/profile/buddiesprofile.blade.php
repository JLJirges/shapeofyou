@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | My Buddies</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>MY BUDDIES</h1>
    </div>
    <div class="profile_section">

        @include('partials.profilenav')

        @include('partials.profilepersonalinfo')

    </div>

    <div class="profile_section_2">
        @if($user->username === Auth::user()->username)

            <p>We do not like people who feel alone in our community! So if you are
                interested in how other people with exactly the same conditions as yours do, scroll down and have a
                look at your
                Workout Buddies! See their diaries, favorite Blogs, Workouts, their struggles and achievements!
                Motivate yourself, comment on their entries, show them they are not alone! And if you want to see
                how other people do, go to the Community Section, decide who you want to visit or scroll down to the
                bottom and let us introduce you to the whole Community of SHAPE OF YOU!</p>
            <p>
                If no users show up in this section, then we have to tell you, that you are one of a kind! Exactly -
                you are special! This basically means, that you are the only one with the Body Shape, Goal and Diet
                combination in our whole community! So what to do now? If you don't want to be without Buddies,
                either invite some friends to join SHAPE OF YOU or go to Settings in your Profile and change either
                your Goal or Diet.
            </p>
        @endif
    </div>

    <!-- Show Buddies -->
    @if($user->username === Auth::user()->username)
        <div class="square_box_section">
            @foreach($users as $showuser)
                @if($showuser->profilepic )
                    <a href="{{url('profile/' . $showuser->username)}}"
                       style="background-image:url({{asset('images/uploads/' . $showuser->profilepic)}});background-size:cover; background-position:center;"
                       class="backend_profile_picture_overview">
                        <span class="username_backend_overview">{{$showuser->username}}</span>
                    </a>
                @else
                    <a href="{{url('profile/' . $showuser->username)}}"
                       style="background-image:url({{ asset ('images/profile/default_profile_pic_v1.png')}});background-size:cover; background-position:center;"
                       class="backend_profile_picture_overview">
                        <span class="username_backend_overview">{{$showuser->username}}</span>
                    </a>
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