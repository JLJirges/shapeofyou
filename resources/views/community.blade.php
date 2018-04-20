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
            font-family: "AR DARLING", sans-serif;

            font-size: 24pt;
            background: url("../assets/images/background_colour.png") no-repeat;

            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 0;
            margin-bottom: 0;
            width: 100%;
            height: 60px;
        }

        h4 {
            font-size: 16pt;
        }



        .content {
            text-align: center;
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

        .community_bg {
            background: url("../assets/images/community/background.png") fixed;
            background-size: cover;
            margin: 0;
            height: auto;
        }

        .community_section {
            width: 100%;
            height: auto;
            display: flex;
            flex-wrap: wrap;

        }

        .community_section > div {
            display: flex;
            flex-wrap: wrap;
            width: 40%;
            margin: 0 30% 0 30%;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding-top: 10px;
            padding-bottom: 10px;

        }

        .community_section > div > p {
            text-align: center;
            font-weight: bold;
            font-size: 14pt;
            text-shadow: #0b2e13;
            width: 60%;
            padding: 0 20% 10px 20%;
        }

        .community_section_2 {
            display: flex;
            justify-content: space-around;
            width: 70%;
            height: auto;
            margin: 0 15% 0 15%;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .text_section {
            width: 30%;
            height: auto;
            padding: 50px;
        }

        .text_section > p {
            padding: 10px;
            text-align: left;
        }

        .box_section {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            width: 70%;
            margin: 0 10% 0 0;
        }

        .box_section > div {
            width: 280px;
            height: 205px;
            border-radius: 2px;
            display: flex;
            justify-content: space-around;
            align-items: center;
            box-shadow: dimgrey 0 0 2px 0;
            margin: 10px 0 10px 0;
        }

        .box_link {
            font-family: "AR DARLING", sans-serif;
            font-size: 20pt;
            color: white;
            text-shadow: 2px 2px 4px #000000;
            width: 98%;
            padding-top: 50%;
            height: 98px;
        }

        .box_link:hover {
            background: rgba(255, 255, 255, 0.5);
            border-radius: 2px;
            color: black;;
            width: 98%;
            text-shadow: none;
            vertical-align: middle;
        }

        .box_beforeafter {
            background: url("../assets/images/community/beforeafter.png") center;
            background-size: cover;
        }

        .box_workoutbuddies {
            background: url("../assets/images/community/workoutbuddies.png") center;
            background-size: cover;
        }

        .box_diaries {
            background: url("../assets/images/community/diaries.png") center;
            background-size: cover;
        }

        .box_meetups {
            background: url("../assets/images/community/meetups.png") center;
            background-size: cover;
        }

        /* BUDDIES */
        .buddy_bg{
            background: url("../assets/images/community/buddy_background.png") fixed;
            background-size: cover;

        }

        .buddy_section {
            display: flex;
            justify-content: space-around;
            width: 70%;
            height: auto;
            margin: 0 15% 0 15%;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .buddy_section > div {
            display: flex;
            justify-content: space-around;
            width: 100%;
            margin: 20px;
        }

        .buddy_section_same {
            width: 100%;
            height: auto;
            display: flex;
            flex-direction: column;

        }

        .buddy_section_same_1 {
            border-right: lightgrey 1px solid;
        }

        .buddy_section_same_2 {
            border-left: lightgrey 1px solid;
        }

        .buddy_section_same > div {
            display: flex;
            flex-direction: column;
            width: 100%;
            height: auto;
            background-color: white;
        }

        .buddy_section_same_content {
            display: flex;
            justify-content: center;
            align-items: center;
            border-top: lightgrey solid 1px;
        }

        .buddy_section_same_content > a {
            width: 150px;
            height: 150px;
            display: flex;
            justify-content: center;
            align-self: center;
            border-radius: 100px;
            background-size: cover;
        }

        .community_pescetarian {
            background: url("../assets/images/community/pescetarian.png") center;
            margin-right: 100px;
        }

        .community_vegetarian {
            background: url("../assets/images/community/vegetarian.png") center;
            margin-right: 100px;
        }

        .community_vegan {
            background: url("../assets/images/community/vegan.png") center;
            margin-left: 100px;
        }

        .community_nospecialdiet {
            background: url("../assets/images/community/nospecialdiet.png") center;
            margin-left: 100px;
        }

        .community_loseweight {
            background: url("../assets/images/community/loseweight.png") center;
            margin-left: 100px;
        }

        .community_buildmuscles {
            background: url("../assets/images/community/buildmuscles.png") center;
            margin-left: 100px;
        }

        .community_becomefit {
            background: url("../assets/images/community/becomefit.png") center;
            margin-right: 100px;
        }

        .community_stayhealthy {
            background: url("../assets/images/community/stayhealthy.png") center;
            margin-right: 100px;
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
    <a href="http://localhost/shapeofyou/resources/views/register.blade.php">Start now</a>

</div>


<div class="content">
    <h2>COMMUNITY</h2>
    <div class="community_bg">
        <div class="community_section">
            <div>
                <p>
                    Join our community and get one step closer to your better self.
                    Connect, chat, share, motivate each other and reach your goals together!
                </p>
                <p>
                    Find people with the same goals, diet, body shape and motivation as you!
                    Get your workout buddy today, start now!
                </p>
            </div>
        </div>
    </div>


    <h3>STAY MOTIVATED</h3>
    <div class="community_section_2">
        <div class="text_section">
            <h4>Our Stories</h4>
            <p>
                No need to search for motivation! It's right here in front of you! Choose the story you'd like to
                read or share your own with the community.
            </p>
            <p>
                Either it's about your daily workout, workout buddy
                moments, your personal body change or other stuff you'd like to share.
                Do it!
            </p>
        </div>
        <div class="box_section">
            <div class="box_beforeafter">
                <a class="box_link" href="#">BEFORE/ AFTER STORIES</a>
            </div>
            <div class="box_workoutbuddies">
                <a class="box_link" href="#">WORKOUT BUDDIES</a>
            </div>
            <div class="box_diaries">
                <a class="box_link" href="#">WORKOUT DIARIES</a>
            </div>
            <div class="box_meetups">
                <a class="box_link" href="#">MEETUPS</a>
            </div>
        </div>
    </div>

    <h3>FIND YOUR WORKOUT BUDDY</h3>
    <div class="buddy_bg">
    <div class="buddy_section">
        <div>
            <div class="buddy_section_same buddy_section_same_1">
                <h4>Find people with the same diet</h4>
                <div>
                    <div class="buddy_section_same_content">
                        <a href="#" class="community_vegetarian"></a>
                        <span>VEGETARIAN</span>
                    </div>
                    <div class="buddy_section_same_content">
                        <span>VEGAN</span>
                        <a href="#" class="community_vegan"></a>
                    </div>
                    <div class="buddy_section_same_content">
                        <a href="#" class="community_pescetarian"></a>
                        <span>PESCETARIAN</span>
                    </div>
                    <div class="buddy_section_same_content">
                        <span>NO DIET</span>
                        <a href="#" class="community_nospecialdiet"></a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="buddy_section_same buddy_section_same_2">
                <h4>Find people with the same goal</h4>
                <div>
                    <div class="buddy_section_same_content">
                        <span>LOSE WEIGHT</span>
                        <a href="#" class="community_loseweight"></a>
                    </div>
                    <div class="buddy_section_same_content">
                        <a href="#" class="community_becomefit"></a>
                        <span>BECOME FIT</span>
                    </div>
                    <div class="buddy_section_same_content">
                        <span>BUILD MUSCLES</span>
                        <a href="#" class="community_buildmuscles"></a>
                    </div>
                    <div class="buddy_section_same_content">
                        <a href="#" class="community_stayhealthy"></a>
                        <span>STAY HEALTHY</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
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
