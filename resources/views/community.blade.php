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
        <div class="community_text_section">
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
        <div class="community_box_section">
            <div class="community_box_beforeafter">
                <a class="community_box_link" href="#">BEFORE/ AFTER STORIES</a>
            </div>
            <div class="community_box_workoutbuddies">
                <a class="community_box_link" href="#">WORKOUT BUDDIES</a>
            </div>
            <div class="community_box_diaries">
                <a class="community_box_link" href="#">WORKOUT DIARIES</a>
            </div>
            <div class="community_box_meetups">
                <a class="community_box_link" href="#">MEETUPS</a>
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
