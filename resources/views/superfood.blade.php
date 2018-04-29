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
    <h2>SUPER FOOD</h2>

    <p class="superfood_text">Are you hungry or just looking for inspiration? Then this is the place to be!
        Choose the occasion, decide the diet or just go for it all! We are here to help you
        in a healthy and delicious way to get you the lifestyle you deserve!
        Healthy, delicious and perfect for any occasion!
    </p>

    <div class="superfood_blog_section">
        <div class="title_bg">
            <h3>Ocassional Blogs</h3>
        </div>
        <!-- <h4>Step 1: Choose the occasion</h4> -->
        <div class="box_section">

            <div class="box_appetizers">
                <a class="box_link" href="{{url('blog')}}">APPETIZERS</a>
            </div>
            <div class="box_breakfast">
                <a class="box_link" href="{{url('blog')}}">BREAKFAST</a>
            </div>
            <div class="box_lunch">
                <a class="box_link" href="{{url('blog')}}">LUNCH</a>
            </div>
            <div class="box_snacks">
                <a class="box_link" href="{{url('blog')}}">SNACKS</a>
            </div>
            <div class="box_dinner">
                <a class="box_link" href="{{url('blog')}}">DINNER</a>
            </div>
            <div class="box_desserts">
                <a class="box_link" href="{{url('blog')}}">DESSERTS</a>
            </div>
        </div>
    </div>

    <div class="superfood_blog_section">
        <div class="title_bg">
            <h3>Diet Blogs</h3>
        </div>
        <!-- <h4>Step 1: Choose the occasion</h4> -->
        <div class="box_section">

            <div class="superfood_box_vegan">
                <a class="box_link" href="{{url('blog')}}">VEGAN</a>
            </div>
            <div class="superfood_box_vegetarian">
                <a class="box_link" href="{{url('blog')}}">VEGETARIAN</a>
            </div>
            <div class="superfood_box_pescetarian">
                <a class="box_link" href="{{url('blog')}}">PESCETARIAN</a>
            </div>
            <div class="superfood_box_nospecialdiet">
                <a class="box_link" href="{{url('blog')}}">NO SPECIAL DIET</a>
            </div>
            <div class="superfood_box_lowcarbnocarb">
                <a class="box_link" href="{{url('blog')}}">LOW CARB/ NO CARB</a>
            </div>
            <div class="superfood_box_ketodiet">
                <a class="box_link" href="{{url('blog')}}">KETO DIET</a>
            </div>
        </div>
    </div>


    <div class="title_bg">
        <h3>CURRENT EXCITERS</h3>
    </div>

    <div class="superfood_blog_bg">
        <div class="superfood_box_section">
            <div class="superfood_box_nuts">
                <a class="box_link" href="{{url('blog')}}">LET'S GO NUTS</a>
            </div>
            <div class="superfood_box_goodcarbsbadcarbs">
                <a class="box_link" href="{{url('blog')}}">GOOD CARBS, BAD CARBS</a>
            </div>
            <div class="superfood_box_thepowerofchia">
                <a class="box_link" href="{{url('blog')}}">THE POWER OF CHIA SEEDS</a>
            </div>
            <div class="superfood_box_proteinpowder">
                <a class="box_link" href="{{url('blog')}}">PROTEIN POWDER</a>
            </div>
            <div class="superfood_box_superfood">
                <a class="box_link" href="{{url('blog')}}">SUPER FOOD</a>
            </div>
            <div class="superfood_box_underthesea">
                <a class="box_link" href="{{url('blog')}}">UNDER THE SEA</a>
            </div>
            <div class="superfood_box_whatdoineed">
                <a class="box_link" href="{{url('blog')}}">WHAT DO I NEED</a>
            </div>
            <div class="superfood_box_gowiththeseason">
                <a class="box_link" href="{{url('blog')}}">GO WITH THE SEASON</a>
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
