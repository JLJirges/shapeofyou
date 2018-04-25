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
            font-family: "Chiller", sans-serif;

            font-size: 24pt;

            padding-top: 20px;
            padding-left: 20px;
            margin-top: 0;
            margin-bottom: 0;
            width: 100%;
            height: 60px;
           text-align: left;
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

        /* RECIPE */


        .recipe_content {

            height: auto;
            display: flex;
            background-color: yellow;
        }

        .recipe_content > img {
            margin-left: 5%;

        }


        .recipe_ingredients_bg {
            background: url("../assets/images/recipe/pink_note.png") no-repeat;
            background-size: cover;
            width: 40%;
            height: auto;


            display: flex;
            flex-direction: column;
        }

        .recipe_ingredients_bg > div {
            display: flex;
            justify-content: space-around;
            padding: 15px;

        }

        .recipe_ingredients {

    width: 30%;
            height: auto;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            text-align: left;

           background-color: #1b6d85;


            font-family: "chiller", sans-serif;
            font-size: 23px;
        }

        .recipe_information {
            width: 70%;
            height: auto;
            display: flex;
            justify-content: space-around;
            margin-left: 5%;
        }

        .recipe_steps {
            width: 80%;
            text-align: left;
            margin-top: 4%;
            margin-left: 8%;
            display: flex;
            justify-content: space-around;
            flex-direction: column;
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
    <h2>'RECIPE NAME'</h2>


    <div class="recipe_bg">
        <div class="recipe_content">
            <img src="../assets/images/blogs/blog_bg.png" width="600" height="400">
            <div class="recipe_ingredients_bg">
                <h3>Ingredients</h3>
                <div>

                <div class="recipe_ingredients">

                    <span>30g Dark Chocolate</span>
                    <span>100 ml Milk</span>
                    <span>3-4 Eggs</span>
                    <span>Protein Powder, Vanilla</span>
                    <span>100g Flour</span>
                </div>
                <div class="recipe_ingredients">
                    <span>Olive Oil</span>
                    <span>200g Strawberries</span>
                    <span>Honey</span>
                </div>
            </div>
            </div>
        </div>
        <div class="recipe_information">
            <span>3-4 People</span>
            <span>30 min.</span>
            <span>Difficulty: simple</span>
        </div>
        <div class="recipe_steps">
            <span>Step 1:</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum cumque deserunt eos fugiat, illo in
                laboriosam natus nobis, nostrum numquam odit officia omnis quas quasi, qui sed velit voluptatem
                voluptates.</p>
            <span>Step 2:</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum cumque deserunt eos fugiat, illo in
                laboriosam natus nobis, nostrum numquam odit officia omnis quas quasi, qui sed velit voluptatem
                voluptates.</p>
            <span>Step 3:</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum cumque deserunt eos fugiat, illo in
                laboriosam natus nobis, nostrum numquam odit officia omnis quas quasi, qui sed velit voluptatem
                voluptates.</p>
            <span>Step 4:</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum cumque deserunt eos fugiat, illo in
                laboriosam natus nobis, nostrum numquam odit officia omnis quas quasi, qui sed velit voluptatem
                voluptates.</p>
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