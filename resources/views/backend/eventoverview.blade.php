@extends('layouts.backendmaster')

@section('title')
    <title>ADMIN AREA | Event Overview</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>Event Overview</h1>
    </div>

    <div class="title_bg">
        <h2>Upcoming Events</h2>
    </div>
    @foreach($upcoming_events as $upcoming_event)
        <div class="events">

            <div>
                <a href="{{url('meetups')}}"><h3>{{$upcoming_event->EventTitle}}</h3></a>
                <div>
                    <span>edit</span>
                    <form>
                        <button class="delete"></button>
                    </form>
                </div>
            </div>

        </div>
    @endforeach

    <div class="title_bg">
        <h2>Former Events</h2>
    </div>

    @foreach($former_events as $former_event)
        <div class="events">

            <div>
                <a href="{{url('meetups')}}"><h3>{{$former_event->EventTitle}}</h3></a>
                <div>
                    <span>edit</span>
                    <form>
                        <button class="delete"></button>
                    </form>
                </div>
            </div>

        </div>
    @endforeach
@endsection