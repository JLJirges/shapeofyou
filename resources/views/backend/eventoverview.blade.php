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

    <div class="square_box_section">
        @foreach($upcoming_events as $upcoming_event)
                        <div>
                            <a class="box_link"
                               href="{{url('detail/' . $upcoming_event->id)}}">
                                {{$upcoming_event->EventTitle}}  </a>
                            <div class="admin_blog_interaction">
                                <div class="admin_delete_edit">
                                <a href="{{url('backend/event_edit/' . $upcoming_event->id)}}">Edit</a>
                                <form method="post" action="/delete_event/{{$upcoming_event->id}}">
                                    <button type="submit" class="delete"></button>
                                </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                </div>

    <div class="title_bg">
        <h2>Former Events</h2>
    </div>

    <div class="square_box_section">
        @foreach($former_events as $former_event)
            <div>
                <a class="box_link"
                   href="{{url('detail/' . $former_event->id)}}">
                    {{$former_event->EventTitle}}  </a>
                <div class="admin_blog_interaction">
                    <div class="admin_delete_edit">
                        <a class="edit" href="{{url('backend/event_edit/' . $former_event->id)}}">Edit</a>
                        <form method="post" action="/delete_event/{{$former_event->id}}">
                            <button type="submit" class="delete"></button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection