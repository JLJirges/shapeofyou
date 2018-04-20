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

        /* MEETUPS */

        .meetups_title {
            display: flex;
            justify-content: space-around;
            width: 100%;
        }

        .meetups_section {
            width: 90%;
            height: auto;
            display: flex;
            flex-wrap: wrap;
            margin-left: 5%;
            margin-right: 5%;
        }

        .upcomin_meetups {
            width: 65%;
        }

        .upcoming_meetups_section {

            width: 100%;
            height: auto;

            margin-top: 50px;
            margin-left: 2%;
            margin-bottom: 100px;

            display: flex;
            flex-direction: column;

        }

        .upcoming_meetups_section > div {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            flex-direction: column;
            align-items: center;
        }

        .event_info {
            display: flex;
            justify-content: space-between;
            width: 100%;
            border-top: lightgrey 1px solid;
            padding: 5px 0 5px 0;
        }

        .event_box {
            width: 100%;
            height: auto;
            border: 1px lightgrey solid;
            margin: 5px 0 10px 0;
        }

        .event_box_details {
            display: flex;
            width: 100%;
            height: auto;
        }

        .event_box_details > div {
            display: flex;
            flex-direction: column;
            width: 50%;
            text-align: left;
        }

        .event_what {
            border-left: 1px solid lightgrey;
            padding-left: 20px;
        }

        .event_details {
            display: flex;
            flex-direction: column;

        }

        .event_details > div {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-self: center;
            width: 90%;

        }

        .event_date_and_time_info {

            display: flex;
            flex-direction: column;
            width: 90%;
        }

        .event_date_and_time_info_1 {
            width: 40%;
            font-weight: bold;
        }

        .meetup_event_googlemaps {
            display: flex;
            justify-content: center;
            align-self: center;
            margin: 20px;
        }

        .former_event_section {
            width: 20%;
            padding: 50px;
            border-left: solid 1px lightgrey;
            margin-left: 2%;
            font-size: 10pt;

            display: flex;

            flex-direction: column;

        }

        .former_event_section > p {
            text-align: left;
        }

        .former_event {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 115px;
            padding: 5px;

        }

        .former_event_box {
            display: flex;
            flex-direction: column;
            padding-bottom: 70px;
            padding-top: 40px;
            border-top: lightgrey solid 1px;
        }

        .ticket_button {
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

        .sold_out {
            background: -moz-radial-gradient(center, ellipse cover, rgba(220, 64, 9, 1) 0%, rgba(107, 5, 5, 1) 100%); /* ff3.6+ */
            background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgba(220, 64, 9, 1)), color-stop(100%, rgba(107, 5, 5, 1))); /* safari4+,chrome */
            background: -webkit-radial-gradient(center, ellipse cover, rgba(220, 64, 9, 1) 0%, rgba(107, 5, 5, 1) 100%); /* safari5.1+,chrome10+ */
            background: -o-radial-gradient(center, ellipse cover, rgba(220, 64, 9, 1) 0%, rgba(107, 5, 5, 1) 100%); /* opera 11.10+ */
            background: -ms-radial-gradient(center, ellipse cover, rgba(220, 64, 9, 1) 0%, rgba(107, 5, 5, 1) 100%); /* ie10+ */
            background: radial-gradient(ellipse at center, rgba(220, 64, 9, 1) 0%, rgba(107, 5, 5, 1) 100%); /* w3c */
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#D1E802', endColorstr='#688000', GradientType=0); /* ie6-9 */

            width: 150px;
            padding: 8px;

            box-shadow: dimgrey 0 0 5px 0;
            color: black;
            font-weight: bold;
        }

        /* BLOGS */

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
    <h2>MEETUPS</h2>

    <div class="meetups_title">
        <h3>Upcoming Events</h3>
        <h3>Former Events</h3>
    </div>
    <div class="meetups_section">

        <div class="upcomin_meetups">
            <div class="upcoming_meetups_section">
                <div>
                    <div class="event_info">
                        <span>373 tickets available</span>
                        <span>327 tickets sold</span>
                    </div>

                    <div class="event_box">
                        <h4>SUMMER RUN</h4>
                        <div class="event_box_details">
                            <div class="event_details">
                                <div class="event_date_and_time">
                                    <div class="event_date_and_time_info event_date_and_time_info_1">
                                        <p>WHEN:</p>
                                        <p>WHERE:</p>
                                    </div>
                                    <div class="event_date_and_time_info">
                                        <p>May, 21st 2018</p>
                                        <p>Vienna, Donauinsel</p>
                                    </div>
                                </div>

                                <img src="../assets/images/meetups/google_maps.jpg" alt="google maps placeholder"
                                     width="400" height="250" class="meetup_event_googlemaps">
                            </div>

                            <div class="event_what">
                                <div class="event_date_and_time_info_1">
                                    <p>WHAT:</p>
                                </div>
                                <p>5km, 10km or 15km run</p>
                                <p>Food, drinks and live music</p>
                                <p>Open Air</p>
                                <p>Special guests</p>
                                <p>3 stages</p>
                            </div>
                        </div>
                    </div>
                    <span class="ticket_button">Get your ticket</span>
                </div>
            </div>


            <div class="upcoming_meetups_section">
                <div>
                    <div class="event_info">
                        <span>0 tickets available</span>
                        <span>750 tickets sold</span>
                    </div>

                    <div class="event_box">
                        <h4>VEGAN NUTRITION GET TOGETHER</h4>
                        <div class="event_box_details">
                            <div class="event_details">
                                <div class="event_date_and_time">
                                    <div class="event_date_and_time_info event_date_and_time_info_1">
                                        <p>WHEN:</p>
                                        <p>WHERE:</p>
                                    </div>
                                    <div class="event_date_and_time_info">
                                        <p>September, 10th 2018</p>
                                        <p>Vienna, Stadthalle | Halle F</p>
                                    </div>
                                </div>

                                <img src="../assets/images/meetups/google_maps.jpg" alt="google maps placeholder"
                                     width="400" height="250" class="meetup_event_googlemaps">
                            </div>

                            <div class="event_what">
                                <div class="event_date_and_time_info_1">
                                    <p>WHAT:</p>
                                </div>
                                <p>Vegan Food</p>
                                <p>Newest Trends</p>
                                <p>Stage Talks</p>
                                <p>Fitness & Balance Workouts</p>
                                <p>Nutrition experts</p>
                                <p>Indoor</p>
                            </div>
                        </div>
                    </div>
                    <span class="sold_out">SOLD OUT</span>
                </div>
            </div>

            <div class="upcoming_meetups_section">
                <div>
                    <div class="event_info">
                        <span>855 tickets available</span>
                        <span>645 tickets sold</span>
                    </div>

                    <div class="event_box">
                        <h4>SEASON END</h4>
                        <div class="event_box_details">
                            <div class="event_details">
                                <div class="event_date_and_time">
                                    <div class="event_date_and_time_info event_date_and_time_info_1">
                                        <p>WHEN:</p>
                                        <p>WHERE:</p>
                                    </div>
                                    <div class="event_date_and_time_info">
                                        <p>October, 2nd 2018</p>
                                        <p>Vienna, Rathausplatz</p>
                                    </div>
                                </div>

                                <img src="../assets/images/meetups/google_maps.jpg" alt="google maps placeholder"
                                     width="400" height="250" class="meetup_event_googlemaps">
                            </div>

                            <div class="event_what">
                                <div class="event_date_and_time_info_1">
                                    <p>WHAT:</p>
                                </div>
                                <p>Food, drinks & live music</p>
                                <p>Fitness Professionals</p>
                                <p>Blogger Talks</p>
                                <p>Awesome Competitions</p>
                                <p>Streetfood Area</p>
                                <p>Indoor & Outdoor</p>
                            </div>
                        </div>
                    </div>
                    <span class="ticket_button">Get your ticket</span>
                </div>
            </div>
        </div>

        <div class="former_event_section">

            <p>
                Those events already happened. You are not able to buy any tickets for expired meetups.
                You can view the gallery, to get an overview about our programms and we hope to see you at one of
                our upcoming events!
            </p>

            <div class="former_event former_event_box">
                <h4>WOMEN POWER</h4>
                <p>Vienna|Donauinsel</p>
                <p>1st, February 2018</p>
                <span class="ticket_button">Show gallery</span>
            </div>
            <div class="former_event former_event_box">
                <h4>LIFE CHANGERS</h4>
                <p>Vienna|Donauinsel</p>
                <p>1st, February 2018</p>
                <span class="ticket_button">Show gallery</span>
            </div>
            <div class="former_event former_event_box">
                <h4>BODY BUILDING PROFESSIONALS</h4>
                <p>Vienna|Donauinsel</p>
                <p>1st, February 2018</p>
                <span class="ticket_button">Show gallery</span>
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
