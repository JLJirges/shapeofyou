@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | Meetups</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>MEETUPS</h1>
    </div>
    <div class="meetups_title">
        <h2>Upcoming Events</h2>
        <h2 class="h2_desktop_view">Former Events</h2>
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
                        <h3>SUMMER RUN</h3>
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

                                <img class="meetup_event_googlemaps" src="{{ asset('images/meetups/google_maps.jpg')}}" alt="google maps placeholder">
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
                        <h3>VEGAN NUTRITION GET TOGETHER</h3>
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

                                <img class="meetup_event_googlemaps" src="{{ asset('images/meetups/google_maps.jpg')}}" alt="google maps placeholder">
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
                        <h3>SEASON END</h3>
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

                                <img class="meetup_event_googlemaps" src="{{ asset('images/meetups/google_maps.jpg')}}" alt="google maps placeholder">
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

        <h2 class="h2_mobile_view">Former Events</h2>
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

@endsection