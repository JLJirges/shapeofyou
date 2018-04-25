<?php
/**
 * Created by PhpStorm.
 * User: Jeanne
 * Date: 13/04/2018
 * Time: 11:45
 */
?>
        <!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/profile.css">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>


</head>
<body>


<div class="top-middle links">


    <a href="{{ url('superfood') }}">Super Food</a>
    <a href="{{ url('workout') }}">Workout</a>
    <a href="{{ url('community') }}">Community</a>
    <a href="{{ url('') }}">
        <img class="logo_header" src="{{ asset('images/headerfooter/Logo.png') }}" alt="logo">
    </a>
    <a href="{{ url ('meetups') }}">Meetups</a>

    <a href="{{ url('profile') }}">Login</a>
    <a href="{{ url('register') }}">Start now</a>

</div>


<div class="content">
    <h2>WELCOME 'USERNAME'</h2>

    <div class="profile_section">
        <div class="profile_navigation">

            <div class="profile_navigation_sections profile_navigation__section_box">
                <p>My Profile</p>
            </div>
            <div class="profile_navigation_sections profile_navigation__section_box">
                <p>BMI Calculator</p>
            </div>
            <div class="profile_navigation_sections profile_navigation__section_box">
                <p>My Recipes</p>
            </div>
            <div class="profile_navigation_sections profile_navigation__section_box">
                <p>My Workout</p>
            </div>
            <div class="profile_navigation_sections profile_navigation__section_box">
                <p>Workout Buddies</p>
            </div>
            <div class="profile_navigation_sections profile_navigation__section_box">
                <p>Help & Seetings</p>
            </div>
            <div class="profile_navigation_sections profile_navigation__section_box">
                <p>Logout</p>
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
                <p>'If you can dream it, you can do it!'</p>
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

    <div class="profile_section_myprofile">
        <div class="profile_section">
            <div class="profile_navigation">

                <div class="profile_navigation_sections profile_navigation__section_box">
                    <p>Write Diary</p>
                </div>
                <div class="profile_navigation_sections profile_navigation__section_box">
                    <p>Before/After Story</p>
                </div>
                <div class="profile_navigation_sections profile_navigation__section_box">
                    <p>Motivation Letter</p>
                </div>
            </div>
    </div>


</div>


<footer>
    <div class="footer_content footer_content_1">
        <div class="footer_options">
            <a href="{{ url('aboutus') }}">About us</a>
            <a href="{{ url('jobs') }}">Jobs</a>
            <a href="{{ url('contact') }}">Contact</a>
        </div>

        <div class="footer_options">
            <a href="{{ url('register') }}">Become a Member</a>
            <a href="{{ url('termsandconditions') }}">Terms and Conditions</a>
            <a href="{{ url('faq') }}">FAQ</a>
        </div>
    </div>
    <div class="footer_content footer_content_2">
        <div class="footer_follow">
            <span>Follow us on</span>
        </div>
        <div class="footer_follow footer_follow_images">
            <a href="#"><img alt="share instagram" src="{{ asset('images/headerfooter/share_instagram.png') }}"></a>
            <a href="#"><img alt="share instagram" src="{{ asset('images/headerfooter/share_facebook.png') }}"></a>
        </div>
        <div class="follow_footer">
                <span>
                    © by J.L. Jirges
                </span>
        </div>
    </div>

</footer>
</body>
</html>