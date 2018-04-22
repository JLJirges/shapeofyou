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

    <p class="entrytext">Are you hungry or just looking for inspiration? Then this is the place to be!
        Choose the occasion, decide the diet or just go for it all! We are here to help you
        in a healthy and delicious way to get you the lifestyle you deserve!
        Healthy, delicious and awesome!
    </p>

    <h3>RECIPES</h3>

    <form>


        <h4>Step 1: Choose the occasion</h4>
        <div class="box_section">

            <div class="box_appetizers">
                <a class="box_link" href="#">APPETIZERS</a>
            </div>
            <div class="box_breakfast">
                <a class="box_link" href="#">BREAKFAST</a>
            </div>
            <div class="box_lunch">
                <a class="box_link" href="#">LUNCH</a>
            </div>
            <div class="box_snacks">
                <a class="box_link" href="#">SNACKS</a>
            </div>
            <div class="box_dinner">
                <a class="box_link" href="#">DINNER</a>
            </div>
            <div class="box_desserts">
                <a class="box_link" href="#">DESSERTS</a>
            </div>
        </div>

        <div class="recipe_section">
            <div class="diet_section">
                <div>
                    <h4>Step 2: Choose the diet</h4>
                    <div class="diet_section_content">

                        <a href="#" class="community_vegetarian"></a>
                        <span>VEGETARIAN</span>
                    </div>
                    <div class="diet_section_content">
                        <span>VEGAN</span>
                        <a href="#" class="community_vegan"></a>
                    </div>
                    <div class="diet_section_content">
                        <a href="#" class="community_pescetarian"></a>
                        <span>PESCETARIAN</span>
                    </div>
                    <div class="diet_section_content">
                        <span>NO DIET</span>
                        <a href="#" class="community_nospecialdiet"></a>
                    </div>
                </div>
            </div>

            <div class="recipe_section_choose">
                <h4>Step 3: Find recipes</h4>
                <div class="recipe_section_filter">
                    <span class="recipe_button">Filtered recipes</span>
                </div>

                <div class="recipe_section_filter recipe_section_ignore_filter">
                    <h4>OR</h4>
                    <p>'I don't care about the steps, show me all you've got!'</p>
                    <span class="recipe_button">Show all recipes</span>
                </div>
            </div>
        </div>


    </form>

<div class="title_bg">
    <h3>BLOGS</h3>
</div>

    <div class="superfood_blog_bg">
        <div class="superfood_box_section">
            <div class="superfood_box_nuts">
                <a class="box_link" href="#">LET'S GO NUTS</a>
            </div>
            <div class="superfood_box_goodcarbsbadcarbs">
                <a class="box_link" href="#">GOOD CARBS, BAD CARBS</a>
            </div>
            <div class="superfood_box_thepowerofchia">
                <a class="box_link" href="#">THE POWER OF CHIA SEEDS</a>
            </div>
            <div class="superfood_box_proteinpowder">
                <a class="box_link" href="#">PROTEIN POWDER</a>
            </div>
            <div class="superfood_box_superfood">
                <a class="box_link" href="#">SUPER FOOD</a>
            </div>
            <div class="superfood_box_underthesea">
                <a class="box_link" href="#">UNDER THE SEA</a>
            </div>
            <div class="superfood_box_whatdoineed">
                <a class="box_link" href="#">WHAT DO I NEED</a>
            </div>
            <div class="superfood_box_gowiththeseason">
                <a class="box_link" href="#">GO WITH THE SEASON</a>
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
