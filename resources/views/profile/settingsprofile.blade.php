@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | Profile Settings</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>SETTINGS</h1>
    </div>

    <div class="profile_section">
        <!-- Profile Navigation -->
    @include ('partials.profilenav')

    <!-- Personal Profile Section -->
        @include ('partials.profilepersonalinfo')
    </div>


    <h2>Edit Profile Settings</h2>

    <!-- Profile edit forms -->

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
                <input type="password" name="password_confirmation" placeholder="Repeat password"
                       id="password_confirmation">
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
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <label>Username</label>
                <input type="text" name="username" placeholder="Username">
                <button class="white_button">Change Username</button>
            </form>

        </div>
        <div>
            <form class="edit_profile_form" method="post" action="/upload_profilepic" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <label>Change Profile Picture</label><br>
                <input type="file" name="profilepic" id="profilepic">
                <button type="submit" class="white_button">Change Profile Picture</button>
            </form>
            <form class="edit_profile_form" method="post" action="/edit">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
        <form class="edit_profile_form" method="post" action="/edit">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div>
                <div>
                    <label>Body Shape</label><br>
                    <select name="UserShape">
                        <option value="0">Secret</option>
                        <option value="1">Pear</option>
                        <option value="2">Apple</option>
                        <option value="3">Hour Glass</option>
                        <option value="4">Straight</option>
                    </select>
                </div>
                <div>
                    <label>Change Diet</label><br>
                    <select name="UserDiet">
                        <option value="0">Secret</option>
                        <option value="1">No diet</option>
                        <option value="2">Pescetarian</option>
                        <option value="3">Vegan</option>
                        <option value="4">Vegetarian</option>
                    </select>
                </div>
                <div>
                    <label>Change Goal</label><br>
                    <select name="UserGoal">
                        <option value="0">Secret</option>
                        <option value="1">Lose weight</option>
                        <option value="2">Stay/Become fit</option>
                        <option value="3">Build muscles</option>
                        <option value="4">Stay/Become healthy</option>
                    </select>
                </div>

            </div>
            <div>
                <button class="white_button goal_button">Change</button>
            </div>

        </form>
        <div>

        </div>

        @if(Auth::user()->isAdmin === 1)

            <h2>Admin Form</h2>

            <div class="isadmin_form_profile">
                <form class="edit_profile_form" method="post" action="/edit">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <label>BloggerBio</label>
                    <input type="text" name="BloggerBio" placeholder="Please add your bio...">
                    <p>*This Text will show up after your Blog in 'About the Author - section'! Please write in 3rd
                        person!</p>
                    <button class="white_button">Update*</button>

                </form>
                <form class="edit_profile_form" method="post" action="/edit">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <label>AdminText</label>
                    <input type="text" name="AdminText" placeholder="Say hello!">
                    <p>*This Text will show up in the Footer at <a class="tandc" href="{{'aboutus'}}">About Us</a>.</p>
                    <button class="white_button">Update*</button>

                </form>
            </div>
        @endif


    </div>

    <div class="delete_account_section">
        <form class="edit_profile_form" method="post" action="/deleteAccount/{{Auth::user()->id}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <label>Delete My Account</label><br>
            <button class="white_button delete_account">DELETE ACCOUNT</button>
        </form>
    </div>

@endsection
