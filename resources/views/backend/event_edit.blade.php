@extends('layouts.backendmaster')

@section('title')
    <title>ADMIN AREA</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>EDIT/UPDATE</h1>
    </div>

    <form class="register_form" method="POST" action="/update_event/{{$event->id}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <label>Event Title</label>
        <input type="text" name="EventTitle" placeholder="{{$event->EventTitle}}">
        <label>Available Tickets</label>
        <input type="number" name="TicketsTotal" placeholder="{{$event->TicketsTotal}}">
        <label>When?</label>
        <input type="date" name="EventWhen" placeholder="{{$event->EventWhen}}">
        <label>Where?</label>
        <input name="EventWhere" placeholder="{{$event->EventWhere}}">
        <label>Google Maps</label>
        <input name="Maps" placeholder="Insert Google Maps Link">
        <label>What?</label>
        <input name="EventWhat" placeholder="{{$event->EventWhat}}">
        <label>Costs per Ticket</label>
        <input type="number" name="Costs" placeholder="{{$event->Costs}}">
        <label>Status</label>
        <select type="number" name="Upcoming">
            <option value="NULL">Upcoming Event</option>
            <option value="1">Former Event</option>
        </select>

        <button class="white_button" type="submit">Update Event</button>

    </form>


@endsection