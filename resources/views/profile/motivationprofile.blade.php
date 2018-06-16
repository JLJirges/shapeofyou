@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | Profile</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>TIME FOR MOTIVATION</h1>
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
        <div class="responsive-profile-nav">
            <div>
                <a>
                    <img id="profileicon" class="burgericon" width="80" height="80"
                         src="{{ asset('images/headerfooter/burger_icon.png') }}" alt="burger icon">
                </a>
            </div>
                <ul id="responsive-profile-nav">

                    <li><a href="{{ url('profile') }}">My Profile</a></li>
                    <li><a href="{{ url('beforeafterprofile') }}">Stories</a></li>
                    <li><a href="{{ url('motivationprofile') }}">Motivation</a></li>
                    <li><a href="{{ url ('blogoverviewprofile') }}">My Blogs</a></li>
                    <li><a href="{{ url('workoutprofile') }}">Workout</a></li>
                    <li><a href="{{ url('buddiesprofile') }}">Buddies</a></li>
                    <li><a href="{{ url('settingsprofile') }}">Settings</a></li>
                    <li><a href="{{ url('logout') }}">Logout</a></li>
                </ul>
        </div>

        <div class="profile_diary_section">

            <h2>Write a motivational Letter...</h2>
            <p>...and decide when to receive it! We all have some troubles to stay focused or lack motivation sometimes.
                And who knows better to motivate oneself than oneself? Exactly this is what this Letter is about! Write
                down why you don't want you future self to give up! Remind your future self why you started! You know
                best if you need one motivation per week, month or from time to time. Whenever you feel like it: write
                and motivate yourself! You will receive the letter per email but it will also show up here, if you
                scroll down. This letter is private and won't be sharable with other members!</p>
            <form class="diary_form" method="post" enctype="multipart/form-data" action="/futureletter/{{Auth::user()->id}}">
                <label>Write a title</label>
                <input type="text" name="title" placeholder="I am the Title"><br>
                <label>Write your entry</label>
                <input type="text" name="title" placeholder="I am the Title"><br>
                <label>When to receive?</label>
                <input type="date" name="ReceiveLetter">
                <button type="submit" value="Send Letter" name="sendletter" class="profile_button">Send Letter</button>
            </form>


        </div>
    </div>



    <div class="blog_entry">


        <div class="blog_box">
            <div class="old_diary_entry_setting">
                <span>Date</span>
                <h4>Motivational Title</h4>
                <span class="delete"></span>
            </div>
            <div>
                <img src="{{('../images/workout/workout_bg.png')}}" alt="blog hero image">

                <div class="blog_text">

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
    <div class="old_diary_entries">
        <div class="profile_diary_section_loadolddiaries">
            <div class="profile_diary_section_loadolddiaries_details">
                <span>Date</span>
                <h4>Motivation Title</h4>
                <span>Read</span>
                <span class="delete"></span>

            </div>
        </div>
        <div class="profile_diary_section_loadolddiaries">
            <div class="profile_diary_section_loadolddiaries_details">
                <span>Date</span>
                <h4>Motivation Title</h4>
                <span>Read</span>
                <span class="delete"></span>

            </div>
        </div>
        <div class="profile_diary_section_loadolddiaries">
            <div class="profile_diary_section_loadolddiaries_details">
                <span>Date</span>
                <h4>Motivation Title</h4>
                <span>Read</span>
                <span class="delete"></span>

            </div>
        </div>
        <div class="profile_diary_section_loadolddiaries">
            <div class="profile_diary_section_loadolddiaries_details">
                <span>Date</span>
                <h4>Motivation Title</h4>
                <span>Read</span>
                <span class="delete"></span>

            </div>
        </div>
    </div>


@endsection