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
                <a href="{{ url ('bmiprofile')}}">BMI Calculator</a>
            </div>
            <div class="profile_navigation_sections profile_navigation__section_box">
                <a href="{{ url ('blogprofile')}}">My Blogs</a>
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

        <div class="profile_info_section">
            <div class="profile_info_section_images">
                <img alt="profile picture" src="{{ ('images/aboutus/Founder.jpg') }}" class="profile_picture">
                <div class="profile_personal_section">
                    <p>Diet</p>
                    <img alt="diet" src="{{('images/community/nospecialdiet.png')}}">
                </div>
                <div class="profile_personal_section">
                    <p>Goal</p>
                    <img alt="diet" src="{{('images/community/stayhealthy.png')}}">
                </div>
                <div class="profile_personal_section">
                    <p>Body Shape</p>
                    <img alt="diet" src="{{ asset('images/hourglass_shape_1.png') }}">
                </div>
            </div>

            <div class="profile_section_personal">
                <div>
                    <p>MOTIVATION QUOTE</p>
                    <p class="profile_section_personal_motivation_quote">'If you can dream it, you can do it!'</p>
                </div>

                <div class="profile_info_section_personal_details">
                    <div>
                        <p>NAME:</p>
                        <p>AGE:</p>
                        <p>COUNTRY:</p>
                    </div>
                    <div>
                        <p>Jeanne Jirges</p>
                        <p>24</p>
                        <p>Austria</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="profile_section profile_section_2">
        <div class="profile_navigation_two">

            <div class="profile_navigation_sections profile_navigation__section_box">
                <a href="{{ url ('profile')}}">My Diary</a>
            </div>
            <div class="profile_navigation_sections profile_navigation__section_box">
                <a href="{{ url ('beforeafterprofile')}}">My Before/After-Story</a>
            </div>
            <div class="profile_navigation_sections profile_navigation__section_box">
                <a href="{{ url ('motivationprofile')}}">My Motivation Letters</a>
            </div>
        </div>

        <div class="profile_diary_section">

            <h2>Write a motivational Letter</h2>
            <form class="diary_form" method="post" enctype="multipart/form-data">
                <label>Write a title</label>
                <input type="text" name="title" placeholder="I am the Title"><br>
                <label>Write your entry</label>
                <input type="text" name="diarytext" placeholder="Remeber why you started...">
                <label>Upload Image</label><br>
                <input type="file" name="DiaryfileToUpload" id="DiaryfileToUpload">
                <button type="submit" value="Send Letter" name="sendletter" class="profile_button">Send Letter</button>
            </form>


        </div>
    </div>

    <div class="profile_diary_entry_section">

        <div class="old_diary_entry">
            <div class="old_diary_entry_setting">
                <span>Date</span>
                <h3>Motivation Title</h3>
                <span class="delete"></span>
            </div>

            <div class="profile_old_diary_entry_box">

                <div>
                    <img src="{{('../images/workout/workout_bg.png')}}" alt="diray image">

                    <div class="old_diary_entry_text">

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