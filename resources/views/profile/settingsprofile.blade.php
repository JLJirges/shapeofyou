@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | Profile Settings</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>SETTINGS</h1>
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


    <div class="title_bg">
        <h2>Edit Profile Settings</h2>
    </div>

    <div class="profile_setting_section">

        <div>
            <form class="edit_profile_form" method="post" action="">
                <label>First Name</label>
                <input type="text" name="firstname" placeholder="First Name">
                <label>Last Name</label>
                <input type="text" name="lastname" placeholder="Last Name">

                <button class="white_button">Change Name</button>
            </form>
            <form class="edit_profile_form" method="post" action="">
                <label>Password</label>
                <input type="password" name="password" placeholder="Your password">
                <label>Repeat Password</label>
                <input type="password" name="password" placeholder="Repeat password">
                <button class="white_button">Change Password</button>
            </form>
        </div>

        <div>
            <form class="edit_profile_form" method="post" action="">
                <label>Email</label>
                <input type="email" name="email" placeholder="Email">
                <button class="white_button">Update Email</button>
            </form>
            <form class="edit_profile_form" method="post" action="">
                <label>Username</label>
                <input type="text" name="username" placeholder="Username">
                <button class="white_button">Change Username</button>
            </form>

        </div>
        <div>
            <form class="edit_profile_form" method="post" action="">
                <label>Change Profile Picture</label><br>
                <input type="file" name="ProfileToUpload" id="ProfileToUpload">
                <button class="white_button">Change Profile Picture</button>
            </form>
            <form class="edit_profile_form" method="post" action="">
                <label>Motivational Quote</label>
                <input type="text" name="username" placeholder="Username">
                <button class="white_button">Update</button>
            </form>
        </div>

        <div>
            <form class="edit_profile_form" method="post" action="">
                <label>Body Shape</label><br>
                <select type="text" name="selectdiet">
                    <option>Pear</option>
                    <option>Apple</option>
                    <option>Hour Glass</option>
                    <option>Straight</option>
                </select>

                <button class="white_button">Change</button>
            </form>
            <form class="edit_profile_form" method="post" action="">
                <label>Change Diet</label><br>
                <select type="text" name="selectdiet">
                    <option>No diet</option>
                    <option>Vegan</option>
                    <option>Vegetarian</option>
                    <option>Pescetarian</option>
                </select>
                <button class="white_button">Change</button>
            </form>
            <form class="edit_profile_form" method="post" action="">
                <label>Change Goal</label><br>
                <select type="text" name="selectdiet">
                    <option>Lose weight</option>
                    <option>Stay/Become fit</option>
                    <option>Build muscles</option>
                    <option>Stay/Become healthy</option>
                </select>

                <button class="white_button">Change</button>
            </form>
        </div>
        <div>
            <form class="edit_profile_form" method="post" action="">
                <label>Delete My Account</label><br>

                <button class="login_button delete_account">DELETE ACCOUNT</button>
            </form>
        </div>
    </div>



@endsection
