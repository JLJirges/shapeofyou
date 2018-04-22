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
