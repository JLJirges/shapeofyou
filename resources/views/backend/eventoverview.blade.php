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

    <div class="backend-box-section">
        @foreach($upcoming_events as $upcoming_event)
            <div class="backend-users">

                    <a href="{{url('detail/' . $upcoming_event->id)}}" class="backend_profile_picture_overview"><span class="username_backend_overview">{{$upcoming_event->EventTitle}}
                    </span>
                        <form action="/delete_event/{{$upcoming_event->id}}" method="post">
                            <a class="edit" href="{{url('backend/event_edit/' . $upcoming_event->id)}}">Edit</a>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button class="delete"></button>
                        </form>
                    </a>

            </div>
        @endforeach
    </div>




    <div class="title_bg">
        <h2>Former Events</h2>
    </div>




    <div class="square_box_section">
        @foreach($former_events as $former_event)
            <div class="backend-users">

                <a href="{{url('detail/' . $former_event->id)}}" class="backend_profile_picture_overview"><span class="username_backend_overview">{{$former_event->EventTitle}}
                    </span>
                    <form action="/delete_event/{{$former_event->id}}" method="post">
                        <a class="edit" href="{{url('backend/event_edit/' . $former_event->id)}}">Edit</a>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button class="delete"></button>
                    </form>
                </a>

            </div>
        @endforeach
    </div>

@endsection