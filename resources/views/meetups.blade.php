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
                        @if(\Session::has('event_message'))
                            <div style="color:green; border:1px solid #aaa; padding:4px; margin-top:10px">
                                {{ \Session::get('event_message') }}
                            </div>
                        @endif
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
                                <div>
                                    <p class="event_W">WHAT:</p>
                                    <p class="event_descritpion">{{$upcoming_event->EventWhat}}</p>
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
                        @if($upcoming_event->TicketsSold < $upcoming_event->TicketsTotal)
                            <form method="POST" action="/edit_event/{{$upcoming_event->id}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <input type="hidden" value="1" name="SoldTickets" placeholder="0" class="buy_tickets"
                                       id="bought_ticket">
                                <button type="submit" class="ticket_button" id="increase_ticketnumber">Buy one Ticket!
                                </button>
                                <span>*</span>
                            </form>

                            <p>*Since this is a student project for university, you won't be redirected to Paypall or
                                other payment methods. You will receive an Email with your Ticket Confirmation. You
                                won't be charged for anything! Please note that there will be no Event! </p>
                        @else
                            <div class="sold_out">Sold Out!</div>
                        @endif

                    </div>
                </div>
            @endforeach

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
                    <a href="{{url('gallery/' . $former_event->id)}}" class="white_button">Show gallery</a>
                </div>
            @endforeach

        </div>
    </div>

@endsection