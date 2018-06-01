@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | My Workout</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>MY WORKOUT</h1>
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
                <a href="{{ url('logout') }}">Logout</a>
            </div>
        </div>

        <div class="profile_diary_section">
            <p class="explain_fav_blogs_p">Are you ready for your workout today? If your workout section is empty - just
                go to Workouts and chose with what you'd like to start. The Workouts will be added automatically to
                either 'Warm up', 'Stretch', 'Main Workout' or 'Cool Down'. But how?</p>
            <img src="{{ asset ('images/addworkout_icon.png')}}" alt="add workout icon" width="80" height="80">
            <p class="explain_fav_blogs_p">This nice Mr. Muscle is waiting to drag the heavy workout to your profile.
                Just click it and he does the work for you. At least the first step.. See? First step is done. </p>
            <img src="{{ asset ('images/addedworkout_icon.png')}}" alt="added workout icon" width="80" height="80">
            <p class="explain_fav_blogs_p">In case you are overwhelmed by all of our awesome workouts and you are losing
                track of what workout you've already added to your daily program or not - Mr. Muscle shows, if he
                already put a workout to your profile or not. So there is only one thing to do - get your ass up and
                work! </p>
        </div>
    </div>


    @if(($fave_workout_ids) && ($workouts->where('WorkoutCategory', 1)->count() > 0))
        <div class="profile_section_workout">

            <div class="title_bg">
                <h2>Warm Up</h2>
            </div>
            <div class="slide_box_warmup">
                <div class="prev_warmup">&lt;</div>
                <ul class="slide_list_warmup square_box_section">
                    @foreach($workouts->where('WorkoutCategory', 1) as $workout)
                        <li class="page_warmup" style="background-image:url({{'images/' . $workout->WorkoutBoxImage}});background-size:cover; background-position:center;">
                            <a class="box_link" href="{{url('detail/' . $workout->id)}}">{{$workout->WorkoutTitle}}</a>
                        </li>
                    @endforeach
                </ul>
                <div class="next_warmup">&gt;</div>
            </div>
        </div>
    @endif

    @if(($fave_workout_ids) && ($workouts->where('WorkoutCategory', 2)->count() > 0))
        <div class="profile_section_workout">

            <div class="title_bg">
                <h2>Stretching</h2>
            </div>
            <div class="slide_box_stretch">
                <div class="prev_stretch">&lt;</div>
                <ul class="slide_list_stretch square_box_section">
                    @foreach($workouts->where('WorkoutCategory', 2) as $workout)
                        <li class="page_stretch" style="background-image:url({{'images/' . $workout->WorkoutBoxImage}});background-size:cover; background-position:center;">
                            <a class="box_link" href="{{url('detail/' . $workout->id)}}">{{$workout->WorkoutTitle}}</a>
                        </li>
                    @endforeach
                </ul>
                <div class="next_stretch">&gt;</div>
            </div>
        </div>
    @endif

    @if(($fave_workout_ids) && ($workouts->where('WorkoutCategory', 3)->count() > 0))
        <div class="profile_section_workout">

            <div class="title_bg">
                <h2>Main Workout</h2>
            </div>
            <div class="slide_box_mainworkout">
                <div class="prev_mainworkout">&lt;</div>
                <ul class="slide_list_mainworkout square_box_section">
                    @foreach($workouts->where('WorkoutCategory', 3) as $workout)
                        <li class="page_mainworkout" style="background-image:url({{'images/' . $workout->WorkoutBoxImage}});background-size:cover; background-position:center;">
                            <a class="box_link" href="{{url('detail/' . $workout->id)}}">{{$workout->WorkoutTitle}}</a>
                        </li>
                    @endforeach
                </ul>
                <div class="next_mainworkout">&gt;</div>
            </div>
        </div>
    @endif

    @if(($fave_workout_ids) && ($workouts->where('WorkoutCategory', 2)->count() > 0))
        <div class="profile_section_workout">

            <div class="title_bg">
                <h2>Cool Down</h2>
            </div>
            <div class="slide_box_cooldown">
                <div class="prev_cooldown">&lt;</div>
                <ul class="slide_list_cooldown square_box_section">
                    @foreach($workouts->where('WorkoutCategory', 2) as $workout)
                        <li class="page_cooldown" style="background-image:url({{'images/' . $workout->WorkoutBoxImage}});background-size:cover; background-position:center;">
                            <a class="box_link" href="{{url('detail/' . $workout->id)}}">{{$workout->WorkoutTitle}}</a>
                        </li>
                    @endforeach
                </ul>
                <div class="next_cooldown">&gt;</div>
            </div>
        </div>
    @endif


@endsection