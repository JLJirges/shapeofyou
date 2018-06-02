@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | My Profile</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>MY PROFILE</h1>
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
        <div class="profile_info_section">
            <div class="profile_info_section_images">
                @if($user->profilepic)
                    <div style="background-image:url({{asset('images/uploads/' . $user->profilepic)}});background-size:cover; background-position:center;"
                         class="profile_picture">
                    </div>
                @else
                    <img alt="diet" src="{{asset('images/profile/default_profile_pic_v1.png')}}"
                         class="profile_picture">
                @endif
                <div class="profile_personal_section">
                    <p>Body Shape</p>
                    @if(($user->UserShape === 0) || ($user->UserShape === NULL))
                        <img alt="shape" src="{{asset('images/profile/default_secret.png')}}">
                    @elseif($user->UserShape === 1)
                        <img alt="shape" src="{{asset('images/pear_shape_1.png')}}">
                    @elseif($user->UserShape === 2)
                        <img alt="shape" src="{{asset('images/apple_shape_1.png')}}">
                    @elseif ($user->UserShape === 3)
                        <img alt="shape" src="{{asset('images/hourglass_shape_1.png')}}">
                    @elseif ($user->UserShape === 4)
                        <img alt="shape" src="{{asset('images/stick_shape_1.png')}}">
                    @endif
                </div>
                <div class="profile_personal_section">
                    <p>Diet</p>
                    @if(($user->UserDiet === 0) || ($user->UserDiet === NULL))
                        <img alt="diet" src="{{asset('images/profile/default_secret.png')}}">
                    @elseif($user->UserDiet === 1)
                        <img alt="diet" src="{{asset('images/community/nospecialdiet.png')}}">
                    @elseif($user->UserDiet === 2)
                        <img alt="diet" src="{{asset('images/community/pescetarian.png')}}">
                    @elseif ($user->UserDiet === 3)
                        <img alt="diet" src="{{asset('images/community/vegan.png')}}">
                    @elseif ($user->UserDiet === 4)
                        <img alt="diet" src="{{asset('images/community/vegetarian.png')}}">
                    @endif
                </div>
                <div class="profile_personal_section">
                    <p>Goal</p>
                    @if(($user->UserGoal === 0) || ($user->UserGoal === NULL))
                        <img alt="goal" src="{{asset('images/profile/default_secret.png')}}">
                    @elseif($user->UserGoal === 1)
                        <img alt="goal" src="{{asset('images/lose_weight_3.png')}}">
                    @elseif($user->UserGoal === 2)
                        <img alt="goal" src="{{asset('images/become_fit_2.png')}}">
                    @elseif ($user->UserGoal === 3)
                        <img alt="goal" src="{{asset('images/build_muscles_2.png')}}">
                    @elseif ($user->UserGoal === 4)
                        <img alt="goal" src="{{asset('images/healthy_lifestyle_2.png')}}">
                    @endif
                </div>

            </div>

            <div class="profile_section_personal">
                <div>
                    <p>MOTIVATION QUOTE</p>
                    <p class="profile_section_personal_motivation_quote">@if($user->mq){{ $user->mq }} @else
                            'No motivational quote defined...' @endif</p>
                </div>

                <div class="profile_info_section_personal_details">
                    <div>
                        <p>NAME:</p>
                        <p>AGE:</p>
                        <p>COUNTRY:</p>
                    </div>
                    <div>
                        <p> {{ $user->username }} </p>
                        <p> @if($user->birthdate){{ $user->birthdate }} @else no birth date
                            defined @endif </p>
                        <p> @if($user->origin){{ $user->origin }} @else no origin defined @endif</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="profile_section profile_section_2">
        @if($user->username === Auth::user()->username)

        <div class="profile_diary_section">

            <h3>Write a new Diary Entry</h3>
            <form class="diary_form" method="POST" action="/profile">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <label>Write a title</label>
                <input type="text" name="DiaryTitle" placeholder="I am the Title"><br>
                <label>Write your entry</label>
                <input type="text" name="DiaryContent" placeholder="Time to write a diary...">
                <label>Upload Image</label><br>
                <input type="file" name="DiaryToUpload" id="DiaryToUpload">
                <button type="submit" value="Write Diary" name="Diary" class="white_button">Write in my Diary
                </button>
            </form>
            @if($errors->any())
                <div style="color:red; border:1px solid #aaa; padding:4px; margin-top:10px">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

        </div>
        @endif

        @if(($user->username === Auth::user()->username) && ($diary->where('DiaryUserId', Auth::user()->id)->count() > 0))
            <div class="square_box_section">
                @foreach($diary->where('DiaryUserId', Auth::user()->id) as $entry)
                    <div style="background-image:url({{asset('images/uploads/' . $entry->DiaryHeroImage)}});background-size:cover; background-position:center;">

                        <a class="box_link"
                           href="{{url('diary/' . $entry->id)}}">
                            {{$entry->DiaryTitle}}  </a>
                    </div>
                @endforeach
            </div>

        @else
            <div class="square_box_section">
                @foreach($diary->where('DiaryUserId', $user->id) as $diaryentry)
                    <div style="background-image:url({{asset('images/uploads/' . $diaryentry->DiaryHeroImage)}});background-size:cover; background-position:center;">

                        <a class="box_link"
                           href="{{url('diary/' . $diaryentry->id)}}">
                            {{$diaryentry->DiaryTitle}}  </a>
                    </div>
                @endforeach
            </div>

        @endif


    </div>






@endsection

