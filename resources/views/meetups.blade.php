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

        <div class="upcoming_meetups">
@foreach($upcoming_events as $upcoming_event)
                    <div class="event">
                        <div>
                            <div class="event_available_info">
                                <span>Total: {{$upcoming_event->TicketsTotal}}</span>
                                <span>Sold: {{$upcoming_event->TicketsSold}}</span>
                            </div>

                            <div class="event_box">
                                <h3>{{$upcoming_event->EventTitle}}</h3>
                                <div class="event_box_details">
                                    <div class="event_details">
                                        <div class="event_date_and_time">
                                            <div class="event_date_and_time_info event_date_and_time_info_1">
                                                <p>WHEN:</p>
                                                <p>WHERE:</p>
                                            </div>
                                            <div class="event_date_and_time_info">
                                                <p>{{$upcoming_event->EventWhen}}</p>
                                                <p>{{$upcoming_event->EventWhere}}</p>
                                            </div>
                                        </div>

                                        <iframe src="{{$upcoming_event->Maps}}"
                                                width="600" height="450" frameborder="0" style="border:0"
                                                allowfullscreen class="meetup_event_googlemaps"></iframe>
                                    </div>
                                    <div class="event_details">
                                        <p class="event_W">WHAT:</p>
                                        <p>{{$upcoming_event->EventWhat}}</p>
                                        <!--
                                        <p>5km, 10km or 15km run</p>
                                        <p>Food, drinks and live music</p>
                                        <p>Open Air</p>
                                        <p>Special guests</p>
                                        <p>3 stages</p>-->
                                        <p>Per Ticket: {{$upcoming_event->Costs}},-€</p>
                                    </div>
                                </div>
                            </div>
                            <form>
                                <button type="button" class="ticket_button">Get your ticket</button>
                            </form>
                        </div>
                    </div>
@endforeach


        <!--
            <div class="event">
                <div>
                    <div class="event_available_info">
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

                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d85088.58111031275!2d16.376400371700242!3d48.206266142824994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d06d127a831ab%3A0x7cc9686bc88d5e87!2sDonauinsel!5e0!3m2!1sde!2sat!4v1528136131569"
                                        width="600" height="450" frameborder="0" style="border:0"
                                        allowfullscreen class="meetup_event_googlemaps"></iframe>
                            </div>

                            <div class="event_details">

                                <p class="event_W">WHAT:</p>

                                <p>5km, 10km or 15km run</p>
                                <p>Food, drinks and live music</p>
                                <p>Open Air</p>
                                <p>Special guests</p>
                                <p>3 stages</p>
                                <p>One Ticket: 55,- €</p>
                            </div>
                        </div>
                    </div>
                    <form>
                        <button type="button" class="ticket_button">Get your ticket</button>
                    </form>
                </div>
            </div>


            <div class="event">
                <div>
                    <div class="event_available_info">
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
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2659.22071090007!2d16.330707215391513!3d48.20236455462583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d07fa0a8f5761%3A0x7645f86e440914e3!2sWiener+Stadthalle!5e0!3m2!1sde!2sat!4v1528136039287"
                                        width="600" height="450" frameborder="0" style="border:0"
                                        allowfullscreen class="meetup_event_googlemaps"></iframe>
                            </div>

                            <div class="event_what">

                                <p class="event_W">WHAT:</p>

                                <p>Vegan Food</p>
                                <p>Newest Trends</p>
                                <p>Stage Talks</p>
                                <p>Fitness & Balance Workouts</p>
                                <p>Nutrition experts</p>
                                <p>Indoor</p>
                                <p>One Ticket: 85,- €</p>
                            </div>
                        </div>
                    </div>
                    <span class="sold_out">SOLD OUT</span>
                </div>
            </div>

            <div class="event">
                <div>
                    <div class="event_available_info">
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

                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2658.7914833244927!2d16.356588915391775!3d48.21063215404936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d07966dc3b145%3A0x1e7a761d819e68fa!2sRathausplatz!5e0!3m2!1sde!2sat!4v1528135787492"
                                        width="600" height="450" frameborder="0" style="border:0"
                                        allowfullscreen class="meetup_event_googlemaps"></iframe>
                            </div>

                            <div class="event_what">

                                <p class="event_W">WHAT:</p>

                                <p>Food, drinks & live music</p>
                                <p>Fitness Professionals</p>
                                <p>Blogger Talks</p>
                                <p>Awesome Competitions</p>
                                <p>Streetfood Area</p>
                                <p>Indoor & Outdoor</p>
                                <p>One Ticket: 79,- €</p>
                            </div>
                        </div>
                    </div>
                    <form>
                        <button type="button" class="ticket_button">Get your ticket</button>
                    </form>
                </div>
            </div>
            -->
        </div>

        <h2 class="h2_mobile_view">Former Events</h2>
        <div class="former_event_section">
            <p>
                Those events already happened. You are not able to buy any tickets for expired meetups.
                You can view the gallery, to get an overview about our programms and we hope to see you at one of
                our upcoming events!
            </p>
            @foreach($former_events as $former_event)
                <div class="former_event former_event_box">
                    <h4>{{$former_event->EventTitle}}</h4>
                    <p>{{$former_event->EventWhere}}</p>
                    <p>{{$former_event->EventWhen}}</p>
                    <span class="white_button">Show gallery</span>
                </div>
        @endforeach
        <!--
            <div class="former_event former_event_box">
                <h4>WOMEN POWER</h4>
                <p>Vienna|Donauinsel</p>
                <p>1st, February 2018</p>
                <span class="white_button">Show gallery</span>
            </div>
            <div class="former_event former_event_box">
                <h4>LIFE CHANGERS</h4>
                <p>Vienna|Donauinsel</p>
                <p>1st, February 2018</p>
                <span class="white_button">Show gallery</span>
            </div>
            <div class="former_event former_event_box">
                <h4>BODY BUILDING PROFESSIONALS</h4>
                <p>Vienna|Donauinsel</p>
                <p>1st, February 2018</p>
                <span class="white_button">Show gallery</span>
            </div>

            -->
        </div>
    </div>

@endsection