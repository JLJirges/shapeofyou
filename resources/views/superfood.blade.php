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
            width: 100%;
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

        /* RECIPES */

        .entrytext{
            width: 60%;

            margin: 2% 20% 2% 20%;
        }

        .recipe_section {
            width: auto;
            height: auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            margin-left: 1%;
            margin-right: 1%;
        }

        .diet_section {

            width: auto;
            height: auto;
            padding: 50px;
        }

        .diet_section_content {
            display: flex;
            justify-content: center;
            align-items: center;
            border-top: lightgrey solid 1px;
            height: 115px;
            padding: 5px;
        }

        .diet_section_content > a {
            width: 100px;
            height: 100px;
            display: flex;
            justify-content: center;
            align-self: center;
            border-radius: 100px;
            background-size: cover;
        }

        .community_pescetarian {
            background: url("../assets/images/community/pescetarian.png") center;
            margin-right: 10px;
        }

        .community_vegetarian {
            background: url("../assets/images/community/vegetarian.png") center;
            margin-right: 10px;
        }

        .community_vegan {
            background: url("../assets/images/community/vegan.png") center;
            margin-left: 30px;
        }

        .community_nospecialdiet {
            background: url("../assets/images/community/nospecialdiet.png") center;
            margin-left: 30px;
        }

        .box_section {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;

            width: auto;
            height: auto;

            margin-left: 1%;
            margin-right: 1%;

            border-bottom: solid lightgrey 1px;

        }

        .box_section > div {
            width: 220px;
            height: 205px;
            border-radius: 2px;
            display: flex;
            justify-content: space-around;
            align-items: center;
            box-shadow: dimgrey 0 0 2px 0;
            margin: 10px;
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

        .box_appetizers {
            background: url("../assets/images/superfood/appetizers.png") center;
            background-size: cover;
        }

        .box_breakfast {
            background: url("../assets/images/superfood/breakfast.png") center;
            background-size: cover;
        }

        .box_lunch {
            background: url("../assets/images/superfood/lunch.png") center;
            background-size: cover;
        }

        .box_snacks {
            background: url("../assets/images/superfood/snacks.png") center;
            background-size: cover;
        }

        .box_dinner {
            background: url("../assets/images/superfood/dinner.png") center;
            background-size: cover;
        }

        .box_desserts {
            background: url("../assets/images/superfood/desserts.png") center;
            background-size: cover;
        }

        .recipe_section_choose {
            width: 15%;
            height: auto;
            padding: 50px;
            border-left: solid 1px lightgrey;
            margin-left: 2%;
        }

        .recipe_section_filter {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 115px;
            padding: 5px;

        }

        .recipe_section_ignore_filter {
            display: flex;
            flex-direction: column;
            padding-bottom: 70px;
            padding-top: 40px;
            border-top: lightgrey solid 1px;
        }

        .recipe_button {
            background: -moz-radial-gradient(center, ellipse cover, rgba(209, 232, 2, 1) 0%, rgba(104, 128, 0, 1) 100%); /* ff3.6+ */
            background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgba(209, 232, 2, 1)), color-stop(100%, rgba(104, 128, 0, 1))); /* safari4+,chrome */
            background: -webkit-radial-gradient(center, ellipse cover, rgba(209, 232, 2, 1) 0%, rgba(104, 128, 0, 1) 100%); /* safari5.1+,chrome10+ */
            background: -o-radial-gradient(center, ellipse cover, rgba(209, 232, 2, 1) 0%, rgba(104, 128, 0, 1) 100%); /* opera 11.10+ */
            background: -ms-radial-gradient(center, ellipse cover, rgba(209, 232, 2, 1) 0%, rgba(104, 128, 0, 1) 100%); /* ie10+ */
            background: radial-gradient(ellipse at center, rgba(209, 232, 2, 1) 0%, rgba(104, 128, 0, 1) 100%); /* w3c */
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#D1E802', endColorstr='#688000', GradientType=0); /* ie6-9 */

            width: 150px;
            padding: 8px;

            box-shadow: dimgrey 0 0 5px 0;
            color: black;
            font-weight: bold;
        }

        /* BLOGS */
        .superfood_blog_bg {
            background: url("../assets/images/superfood/superfood_bg.png") fixed;
            background-size: cover;
            margin: 0;
            height: auto;
        }

        .superfood_box_section {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;

            width: 70%;
            height: auto;

            margin: 0 15% 0 15%;

            padding-top: 5%;
        }

        .superfood_box_section > div {
            width: 220px;
            height: 205px;
            border-radius: 2px;
            display: flex;
            justify-content: space-around;
            align-items: center;
            box-shadow: dimgrey 0 0 2px 0;
            margin: 10px;
        }

        .superfood_box_nuts {
            background: url("../assets/images/superfood/nuts.png") center;
            background-size: cover;
        }

        .superfood_box_goodcarbsbadcarbs {
            background: url("../assets/images/superfood/goodcarbsbadcarbs.png") center;
            background-size: cover;
        }

        .superfood_box_thepowerofchia {
            background: url("../assets/images/superfood/thepowerofchia.png") center;
            background-size: cover;
        }

        .superfood_box_proteinpowder {
            background: url("../assets/images/superfood/proteinpowder.png") center;
            background-size: cover;
        }

        .superfood_box_superfood {
            background: url("../assets/images/superfood/superfood.png") center;
            background-size: cover;
        }

        .superfood_box_underthesea {
            background: url("../assets/images/superfood/underthesea.png") center;
            background-size: cover;
        }

        .superfood_box_whatdoineed {
            background: url("../assets/images/superfood/whatdoineed.png") center;
            background-size: cover;
        }

        .superfood_box_gowiththeseason {
            background: url("../assets/images/superfood/gowiththeseason.png") center;
            background-size: cover;
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


    <a href="{{ url('superfood') }}">Super Food</a>
    <a href="http://localhost/shapeofyou/resources/views/workout.blade.php">Workout</a>
    <a href="http://localhost/shapeofyou/resources/views/community.blade.php">Community</a>
    <a href="{{ url('') }}">
        <img class="logo_header" src="../assets/images/headerfooter/Logo.png" alt="logo">
    </a>
    <a href="http://localhost/shapeofyou/resources/views/meetups.blade.php">Meetups</a>

    <a href="#">Login</a>
    <a href="http://localhost/shapeofyou/resources/views/register.blade.php">Start now</a>

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



            <div class="box_section">
                <h4>Step 1: Choose the occasion</h4>
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


    <h3>BLOGS</h3>

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
