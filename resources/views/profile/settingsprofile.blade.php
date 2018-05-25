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
                <img alt="profile picture" src="{{ ('images/profile/default_profile_pic_v1.png') }}" class="profile_picture">
                <div class="profile_personal_section">
                    <p>Diet</p>
                    <img alt="diet" src="{{('images/profile/default_secret.png')}}">
                </div>
                <div class="profile_personal_section">
                    <p>Goal</p>
                    <img alt="diet" src="{{('images/profile/default_secret.png')}}">
                </div>
                <div class="profile_personal_section">
                    <p>Body Shape</p>
                    <img alt="diet" src="{{ asset('images/profile/default_secret.png') }}">
                </div>
            </div>

            <div class="profile_section_personal">
                <div>
                    <p>MOTIVATION QUOTE</p>
                    <p class="profile_section_personal_motivation_quote">@if(Auth::user()->mq){{ Auth::user()->mq }} @else 'No motivational quote defined...' @endif</p>
                </div>

                <div class="profile_info_section_personal_details">
                    <div>
                        <p>NAME:</p>
                        <p>AGE:</p>
                        <p>COUNTRY:</p>
                    </div>
                    <div>
                        <p> {{ Auth::user()->firstname }}  {{ Auth::user()->lastname }}  </p>
                        <p> @if(Auth::user()->birthdate){{ Auth::user()->birthdate }} @else no birth date defined @endif </p>
                        <p> @if(Auth::user()->origin){{ Auth::user()->origin }} @else no origin defined @endif</p>
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
            <form class="edit_profile_form" method="post" action="/edit">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <label>First Name</label>
                <input type="text" name="firstname" placeholder="First Name">
                <label>Last Name</label>
                <input type="text" name="lastname" placeholder="Last Name">

                <button class="white_button">Change Name</button>
            </form>
            <form class="edit_profile_form" method="post" action="/edit">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <label>Password</label>
                <input type="password" name="password" placeholder="Your password">
                <label>Repeat Password</label>
                <input type="password" name="password" placeholder="Repeat password">
                <button class="white_button">Change Password</button>
            </form>
        </div>

        <div>
            <form class="edit_profile_form" method="post" action="/edit">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <label>Email</label>
                <input type="email" name="email" placeholder="Email">
                <button class="white_button">Update Email</button>
            </form>
            <form class="edit_profile_form" method="post" action="/edit">
                <label>Username</label>
                <input type="text" name="username" placeholder="Username">
                <button class="white_button">Change Username</button>
            </form>

        </div>
        <div>
            <form class="edit_profile_form" method="post" action="/edit">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <label>Change Profile Picture</label><br>
                <input type="file" name="ProfileToUpload" id="ProfileToUpload">
                <button class="white_button">Change Profile Picture</button>
            </form>
                <form class="edit_profile_form" method="post" action="/edit">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    {{ csrf_field() }}
                    {{ method_field('patch') }}
                <label>Motivational Quote</label>
                <input type="text" name="mq" placeholder="Your motivational Quote...">
                <button class="white_button">Update</button>
            </form>
        </div>
        <div>
            <form class="edit_profile_form" method="post" action="/edit">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <label>Birthdate</label><br>
                <input type="date" name="birthdate">
                <button class="white_button">Change</button>
            </form>
                <form class="edit_profile_form" method="post" action="/edit">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <label>Origin</label><br>
                    <input type="Text" name="origin" placeholder="Origin">
                    <button class="white_button">Update</button>
                </form>

        </div>

        <div>
            <form class="edit_profile_form" method="post" action="/edit">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <label>Body Shape</label><br>
                <select type="text" name="selectdiet">
                    <option>Pear</option>
                    <option>Apple</option>
                    <option>Hour Glass</option>
                    <option>Straight</option>
                    <option>Secret</option>
                </select>

                <button class="white_button">Change</button>
            </form>
            <form class="edit_profile_form" method="post" action="/edit">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <label>Change Diet</label><br>
                <select type="text" name="selectdiet">
                    <option>No diet</option>
                    <option>Vegan</option>
                    <option>Vegetarian</option>
                    <option>Pescetarian</option>
                    <option>Secret</option>
                </select>
                <button class="white_button">Change</button>
            </form>
            <form class="edit_profile_form" method="post" action="/edit">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <label>Change Goal</label><br>
                <select type="text" name="selectdiet">
                    <option>Lose weight</option>
                    <option>Stay/Become fit</option>
                    <option>Build muscles</option>
                    <option>Stay/Become healthy</option>
                    <option>Secret</option>
                </select>

                <button class="white_button">Change</button>
            </form>
        </div>
        <div>
            <form class="edit_profile_form" method="post" action="/edit">
                <label>Delete My Account</label><br>

                <button class="login_button delete_account">DELETE ACCOUNT</button>
            </form>
        </div>
    </div>



@endsection
