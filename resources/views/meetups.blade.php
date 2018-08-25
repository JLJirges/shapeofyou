@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | Events</title>
    <meta name="description"
          content="Would you like to join some of the most awesome events ever? No problem - we invite you to become part of Austria's biggest Nutrition Events!">
@endsection

@section('content')
        <h1>EVENTS</h1>
    <div class="meetups_title">
        <h2>Upcoming Events</h2>
        <h2 class="h2_desktop_view">Former Events</h2>
    </div>

    <!-- Upcoming Events -->
    <div class="meetups_section">
        <div class="upcoming_meetups">
            @foreach($upcoming_events as $upcoming_event)
                <div class="event">
                    <div>
                        @if($upcoming_event->TicketsSold < $upcoming_event->TicketsTotal)
                            <div class="event_available_info">
                                <span>Total: {{$upcoming_event->TicketsTotal}}</span>
                                <span>Sold: <span class="tickets_sold">{{$upcoming_event->TicketsSold}}</span></span>
                            </div>
                        @else
                            <div class="event_available_info event_sold_out">
                                <span>Total: {{$upcoming_event->TicketsTotal}}</span>
                                <span>Sold: <span class="tickets_sold">{{$upcoming_event->TicketsSold}}</span></span>
                            </div>
                        @endif
                        <div class="event_box">
                            <h3>{{$upcoming_event->EventTitle}}</h3>
                            <div class="event_box_details">
                                <div class="event_details">
                                    <div class="event_date_and_time">
                                        <div class="event_date_and_time_info event_date_and_time_info_1">
                                            <h4>WHEN:</h4>
                                            <h4>WHERE:</h4>
                                        </div>
                                        <div class="event_date_and_time_info">
                                            <p>{{$upcoming_event->EventWhen}}</p>
                                            <p>{{$upcoming_event->EventWhere}}</p>
                                        </div>
                                    </div>
                                    <iframe src="{{$upcoming_event->Maps}}" allowfullscreen
                                            class="meetup_event_googlemaps"></iframe>
                                </div>
                                <div>
                                    <h4>WHAT:</h4>
                                    <p class="event_descritpion">{{$upcoming_event->EventWhat}}</p>
                                    <p>Per Ticket: {{$upcoming_event->Costs}},-€</p>
                                </div>
                            </div>
                        </div>
                        @if(!Auth()->check())
                            <a href="{{url('register')}}" class="white_button">Join Event!</a>
                        @else
                            <a href="{{url('https://www.facebook.com/events/1999281326999686/')}}" class="white_button">More
                                info</a>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Former Events -->
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
                    <a href="{{url('gallery/' . $former_event->id)}}" class="white_button">Show gallery</a>
                </div>
            @endforeach

        </div>
    </div>

@endsection