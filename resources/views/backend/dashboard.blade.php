@extends('layouts.backendmaster')

@section('title')
    <title>ADMIN AREA</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>DASHBOARD</h1>
    </div>

        <div class="square_box_section">
            <div class="box_users">
                <a class="box_link" href="{{url('/backend/useroverview')}}">USERS</a>
            </div>
            <div class="box_blogs">
                <a class="box_link" href="{{url('overview')}}">BLOGS</a>
            </div>
            <div class="box_stretch">
                <a class="box_link" href="{{url('overview')}}">WORKOUTS</a>
            </div>
            <div class="community_box_diaries">
                <a class="box_link" href="{{url('overview')}}">DIARIES</a>
            </div>
            <div class="community_box_beforeafter">
                <a class="box_link" href="{{url('overview')}}">BEFORE/AFTER STORIES</a>
            </div>
            <div class="community_box_meetups">
                <a class="box_link" href="{{url ('overview')}}">EVENTS</a>
            </div>
            <div class="box_administrative">
                <a class="box_link" href="{{url('overview')}}">ADMIN INFOS</a>
            </div>
        </div>


@endsection