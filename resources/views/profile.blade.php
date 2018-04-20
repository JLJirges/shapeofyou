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

    <style>
        html, body {
            background-color: #fff;
            font-family: 'Century Schoolbook', sans-serif;
            height: auto;
            margin: 0;
        }

        a {
            text-decoration: none;
        }

        h2 {
            font-family: 'AR DARLING', sans-serif;
            font-size: 40pt;

            background: url("../assets/images/background_colour.png") no-repeat;

            margin-top: 0;
            margin-bottom: 0;
            padding: 110px 25px 25px 25px;

            display: flex;
            justify-content: center;
            align-self: center;
        }

        h3 {
            font-size: 24pt;

            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
            margin-bottom: 10px;
            width: 100%;
            height: 60px;
        }

        h4 {
            font-size: 16pt;
        }

        .top-middle {
            position: fixed;
            right: 0;
            top: 0;
            left: 0;
            width: 100%;
            height: 50px;
            background-color: white;
            box-shadow: grey 2px 1px 5px 2px;
            display: flex;
            align-items: center;
        }

        .logo_header {
            width: 110px;
            height: 110px;
            vertical-align: middle;
            margin-top: 50px;
            background-color: white;
            border-radius: 60px;
            box-shadow: grey 0 7px 7px -4px;
        }

        .content {
            text-align: center;
        }

        .links > a {
            color: #636b6f;
            padding: 0 55px 0 55px;
            font-size: 10px;
            font-weight: 600;
            letter-spacing: .2rem;
            text-decoration: none;
            text-transform: uppercase;
            width: 100%;
        }

        .links > a:hover {
            color: lightgrey;
        }

        /* PROFILE */

        /* NAVIGATION */

        .profile_section {
            width: 90%;
            height: auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-left: 5%;
            margin-right: 5%;
            margin-top: 2%;
        }

        .profile_info_section {
            width: 65%;
            height: auto;
        }

        .profile_navigation {
            width: 10%;
            padding: 50px;
            border: solid 1px lightgrey;
            margin-left: 2%;

            font-size: 10pt;

            display: flex;
            flex-direction: column;

            box-shadow: grey 0 0 4px 0;
        }

        .profile_navigation_sections {
            display: flex;
            justify-content: center;
            align-items: center;
            height: auto;
            padding: 5px;

        }

        .profile_navigation__section_box {
            display: flex;
            flex-direction: column;

            border-bottom: lightgrey solid 1px;
            border-top: lightgrey solid 1px;
        }

        /* ABOUT YOU */
        .profile_section_myprofile{
            width: 100%;
            border-top: lightgrey solid 1px;
            margin-top: 2%;
        }

        /* FIX PROFILE INFO */

        .profile_info_section {
            width: 65%;
            height: auto;

            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .profile_info_section_images {
            border: 1px solid lightgrey;
            display: flex;
            justify-content: space-around;
            height: 30%;
            box-shadow: 0 0 4px 0 gray;
        }

        .profile_info_section_images > div {
            display: flex;
            flex-direction: column;
            justify-content: space-around;
        }

        .profile_section_personal {
            box-shadow: 0 0 4px 0 gray;
            border: 1px solid lightgrey;
            height: 60%;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
        }

        .profile_info_section_personal_details {
            display: flex;
            justify-content: space-around;
            margin: 0 20% 0 20%;
            width: 60%;
            text-align: left;
        }

        /*  FOOTER */
        footer {
            height: auto;
            width: 100%;
            background-color: white;
            border-top: 1px lightgrey solid;
        }

        .footer_content_1 {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: center;
            width: 50%;
            margin: 1% 25% 1% 25%;
        }

        .footer_options {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: 5px;
        }

        .footer_options > a {
            color: black;
            font-weight: inherit;
            padding: 3px;
            font-size: 10pt;
        }

        .footer_content_2 {
            border-top: lightgrey 1px solid;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 1%;
        }

        .footer_follow_images {
            display: flex;
        }

    </style>
</head>
<body>


<div class="top-middle links">


    <a href="http://localhost/shapeofyou/resources/views/superfood.blade.php">Super Food</a>
    <a href="http://localhost/shapeofyou/resources/views/workout.blade.php">Workout</a>
    <a href="http://localhost/shapeofyou/resources/views/community.blade.php">Community</a>
    <a href="http://localhost/shapeofyou/resources/views/welcome.blade.php">
        <img class="logo_header" src="../assets/images/headerfooter/Logo.png" alt="logo">
    </a>
    <a href="http://localhost/shapeofyou/resources/views/meetups.blade.php">Meetups</a>

    <a href="{{ route('login') }}">Login</a>
    <a href="href=http://localhost/shapeofyou/resources/views/register.blade.php">Start now</a>

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
                <div>Profile Picture</div>
                <div>
                    <p>Diet</p>
                    <p>image</p>
                </div>
                <div>
                    <p>Goal</p>
                    <p>image</p>
                </div>
                <div>
                    <p>Body Shape</p>
                    <p>image</p>
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
       Write Diary
        Write Before After Story
        Write Motivation Letter
    </div>


</div>


<footer>
    <div class="footer_content footer_content_1">
        <div class="footer_options">
            <a href="#">About us</a>
            <a href="#">Jobs</a>
            <a href="#">Contact</a>
        </div>

        <div class="footer_options">
            <a href="#">Become a Member</a>
            <a href="#">Terms and Conditions</a>
            <a href="#">FAQ</a>
        </div>
    </div>
    <div class="footer_content footer_content_2">
        <div class="footer_follow">
            <span>Follow us on</span>
        </div>
        <div class="footer_follow footer_follow_images">
            <a href="#"><img alt="share instagram" src="../assets/images/headerfooter/share_instagram.png"></a>
            <a href="#"><img alt="share instagram" src="../assets/images/headerfooter/share_facebook.png"></a>
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