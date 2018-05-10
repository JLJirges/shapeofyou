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
                <a href="{{ url ('buddyprofile')}}">My Buddies</a>
            </div>
            <div class="profile_navigation_sections profile_navigation__section_box">
                <a href="{{ url ('settingsprofile')}}">Seetings</a>
            </div>
            <div class="profile_navigation_sections profile_navigation__section_box">
                <a href="{{ url ('welcome')}}">Logout</a>
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

    <div class="title_bg">
        <h2>Warm up</h2>
    </div>

    <div class="profile_workout_section profile_workout_section_warmup">
        <div class="left"></div>

        <div class="square_box_section">
            <div class="box_indoor">
                <a class="box_link" href="{{url('detail')}}">EXERCISE 1</a>
            </div>
            <div class="box_outdoor">
                <a class="box_link" href="{{url('detail')}}">EXERCISE 2</a>
            </div>
            <div class="box_stretch">
                <a class="box_link" href="{{url('detail')}}">EXERCISE 3</a>
            </div>
        </div>

        <div class="right"></div>

    </div>

    <div class="hide_or_show_section">Show Details</div>

    <div class="title_bg">
        <h2>Stretching</h2>
    </div>

    <div class="profile_workout_section profile_workout_section_warmup">
        <div class="left"></div>

        <div class="square_box_section">
            <div class="box_indoor">
                <a class="box_link" href="{{url('detail')}}">EXERCISE 4</a>
            </div>
            <div class="box_outdoor">
                <a class="box_link" href="{{url('detail')}}">EXERCISE 5</a>
            </div>
            <div class="box_stretch">
                <a class="box_link" href="{{url('detail')}}">EXERCISE 6</a>
            </div>
        </div>

        <div class="right"></div>

    </div>
    <div class="hide_or_show_section">Hide Details</div>

    <div class="profile_workout_section_workoutdetail">
        <h3>Exeercise 5 - Whatever title it has</h3>
        <div class="workout_entry_box">

            <div>
                <img src="{{('../images/workout/workout_bg.png')}}" alt="diray image">

                <div class="workout_entry_text">

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda, beatae blanditiis
                        consectetur culpa ducimus est exercitationem hic, impedit magnam nesciunt obcaecati placeat
                        quae quidem, repellat repudiandae sapiente tenetur veritatis?
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda, beatae blanditiis
                        consectetur culpa ducimus est exercitationem hic, impedit magnam nesciunt obcaecati placeat
                        quae quidem, repellat repudiandae sapiente tenetur veritatis?
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda, beatae blanditiis
                        consectetur culpa ducimus est exercitationem hic, impedit magnam nesciunt obcaecati placeat
                        quae quidem, repellat repudiandae sapiente tenetur veritatis?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda, beatae blanditiis
                        consectetur culpa ducimus est exercitationem hic, impedit magnam nesciunt obcaecati placeat
                        quae quidem, repellat repudiandae sapiente tenetur veritatis?
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda, beatae blanditiis
                        consectetur culpa ducimus est exercitationem hic, impedit magnam nesciunt obcaecati placeat
                        quae quidem, repellat repudiandae sapiente tenetur veritatis?
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda, beatae blanditiis
                        consectetur culpa ducimus est exercitationem hic, impedit magnam nesciunt obcaecati placeat
                        quae quidem, repellat repudiandae sapiente tenetur veritatis?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda, beatae blanditiis
                        consectetur culpa ducimus est exercitationem hic, impedit magnam nesciunt obcaecati placeat
                        quae quidem, repellat repudiandae sapiente tenetur veritatis?
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda, beatae blanditiis
                        consectetur culpa ducimus est exercitationem hic, impedit magnam nesciunt obcaecati placeat
                        quae quidem, repellat repudiandae sapiente tenetur veritatis?
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda, beatae blanditiis
                        consectetur culpa ducimus est exercitationem hic, impedit magnam nesciunt obcaecati placeat
                        quae quidem, repellat repudiandae sapiente tenetur veritatis?</p>
                </div>
            </div>
        </div>
    </div>
    <div class="title_bg">
        <h2>Main Workout</h2>
    </div>

    <div class="profile_workout_section profile_workout_section_warmup">
        <div class="left"></div>

        <div class="square_box_section">
            <div class="box_indoor">
                <a class="box_link" href="{{url('detail')}}">EXERCISE 1</a>
            </div>
            <div class="box_outdoor">
                <a class="box_link" href="{{url('detail')}}">EXERCISE 2</a>
            </div>
            <div class="box_stretch">
                <a class="box_link" href="{{url('detail')}}">EXERCISE 3</a>
            </div>
        </div>

        <div class="right"></div>

    </div>
    <div class="hide_or_show_section">Show Details</div>

    <div class="title_bg">
        <h2>Stretching</h2>
    </div>

    <div class="profile_workout_section profile_workout_section_warmup">
        <div class="left"></div>

        <div class="square_box_section">
            <div class="box_indoor">
                <a class="box_link" href="{{url('detail')}}">EXERCISE 1</a>
            </div>
            <div class="box_outdoor">
                <a class="box_link" href="{{url('detail')}}">EXERCISE 2</a>
            </div>
            <div class="box_stretch">
                <a class="box_link" href="{{url('detail')}}">EXERCISE 3</a>
            </div>
        </div>

        <div class="right"></div>

    </div>
    <div class="hide_or_show_section">Show Details</div>

    <div class="title_bg">
        <h2>Cool Down</h2>
    </div>

    <div class="profile_workout_section profile_workout_section_warmup">
        <div class="left"></div>

        <div class="square_box_section">
            <div class="box_indoor">
                <a class="box_link" href="{{url('detail')}}">EXERCISE 1</a>
            </div>
            <div class="box_outdoor">
                <a class="box_link" href="{{url('detail')}}">EXERCISE 2</a>
            </div>
            <div class="box_stretch">
                <a class="box_link" href="{{url('detail')}}">EXERCISE 3</a>
            </div>
        </div>

        <div class="right"></div>

    </div>
    <div class="hide_or_show_section">Show Details</div>

@endsection