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
            font-size: 24pt;

            margin-top: 5%;
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

        /* BLOG POST*/

        .blog_content {
            display: flex;
            justify-content: space-around;
            width: 100%;
        }

        .blogpost {
            width: 60%;
            height: auto;
            margin: 0 15% 1% 15%;

            padding-left: 5%;
            padding-right: 5%;

            background-color: white;

            text-align: left;
        }

        .blog_design {
            width: 40%;
            height: auto;
            margin-top: 100px;
            margin-right: 2%;
            display: flex;
            flex-direction: column;
        }



        .blog_abouttheauthor {
            width: 40%;
            margin: 2% 30% 2% 30%;
        }

        .blog_abouttheauthor > div {
            display: flex;
            justify-content: space-around;
            align-items: center;
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
    <h2> 'BLOG TITLE ' </h2>
    <div class="blog_content">
        <div>
            <div class="blogpost">
                <h3>Blabla</h3>
                <h4>Blabla</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt natus odit officia optio quae.
                    A dolor earum et fuga, maiores modi nam neque nesciunt praesentium quibusdam quis ratione temporibus
                    ut?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt natus odit officia optio quae.
                    A dolor earum et fuga, maiores modi nam neque nesciunt praesentium quibusdam quis ratione temporibus
                    ut?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt natus odit officia optio quae.
                    A dolor earum et fuga, maiores modi nam neque nesciunt praesentium quibusdam quis ratione temporibus
                    ut?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt natus odit officia optio quae.
                    A dolor earum et fuga, maiores modi nam neque nesciunt praesentium quibusdam quis ratione temporibus
                    ut?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt natus odit officia optio quae.
                    A dolor earum et fuga, maiores modi nam neque nesciunt praesentium quibusdam quis ratione temporibus
                    ut?</p>
            </div>
            <div class="blogpost">
                <h3>Blabla</h3>
                <h4>Blabla</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt natus odit officia optio quae.
                    A dolor earum et fuga, maiores modi nam neque nesciunt praesentium quibusdam quis ratione temporibus
                    ut?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt natus odit officia optio quae.
                    A dolor earum et fuga, maiores modi nam neque nesciunt praesentium quibusdam quis ratione temporibus
                    ut?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt natus odit officia optio quae.
                    A dolor earum et fuga, maiores modi nam neque nesciunt praesentium quibusdam quis ratione temporibus
                    ut?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt natus odit officia optio quae.
                    A dolor earum et fuga, maiores modi nam neque nesciunt praesentium quibusdam quis ratione temporibus
                    ut?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt natus odit officia optio quae.
                    A dolor earum et fuga, maiores modi nam neque nesciunt praesentium quibusdam quis ratione temporibus
                    ut?</p>
            </div>


        </div>

        <div class="blog_design">
            <div class="blog_design_image blog_design_image_1">

            </div>
            <div class="blog_design_image blog_design_image_2">

            </div>

        </div>
    </div>


    <div class="blog_abouttheauthor">
        <h5>About the author</h5>
        <p>Image</p>
        <div>
            <div>
                <h5>Name</h5>
                <p>Name</p>
            </div>
            <div>
                <h5>Biography</h5>
                <p>Biography</p>
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