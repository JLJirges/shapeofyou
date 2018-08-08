@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | Profile</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>MY STORIES</h1>
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
                        <img id="profileicon" class="burgericon" width="40" height="40"
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

                <h3>Write a new Before/After Story</h3>
                <p>Write your Before/After-Story and share your progress with the community. It's a good opportunity to
                    motivate other and/or to get some more tips from other members and our professionals! Every little
                    progress is an awesome progress! Share it! (This Before/After-Story will be public to community
                    members)</p>
                <form class="diary_form" method="post" action="/BeforeAfterStory"
                      enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <label>Write a title</label>
                    <input type="text" name="BeforeAfterStoryTitle" placeholder="I am the Title"><br>
                    <label>Write your entry</label>
                    <input type="text" name="BeforeAfterStoryContent" placeholder="Time to tell a story...">
                    <label>Upload BEFORE Image</label><br>
                    <input type="file" name="BeforeAfterStoryImageOne" id="BeforeAfterStoryImageOne">
                    <label>Upload AFTER Image</label><br>
                    <input type="file" name="BeforeAfterStoryImageTwo" id="BeforeAfterStoryImageTwo">
                    <button type="submit" value="Post Story" name="BeforeAfterStory" class="white_button">Post Story
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

                @endif
            </div>

            @if(($user->id === Auth::user()->id) && ($bas->where('BeforeAfterStoryUserId', Auth::user()->id)->count() > 0))
                <div class="square_box_section">
                    @foreach($bas->where('BeforeAfterStoryUserId', Auth::user()->id) as $entry)
                        <div style="background-image:url({{asset('images/uploads_stories/' . $entry->BeforeAfterStoryImageTwo)}});background-size:cover; background-position:center;">


                            <a class="box_link"
                               href="{{url('beforeafter/' . $entry->id)}}">
                                {{$entry->BeforeAfterStoryTitle}}  </a>

                        </div>
                    @endforeach

                    @else
                        <div class="square_box_section">
                            @foreach($bas->where('BeforeAfterStoryUserId', $user->id) as $basentry)

                                <div style="background-image:url({{asset('images/uploads_stories/' . $basentry->BeforeAfterStoryImageTwo)}});background-size:cover; background-position:center;">

                                    <a class="box_link"
                                       href="{{url('beforeafter/' . $basentry->id)}}">
                                        {{$basentry->BeforeAfterStoryTitle}}  </a>
                                </div>
                            @endforeach
                        </div>
                            @endif
                        </div>

@endsection