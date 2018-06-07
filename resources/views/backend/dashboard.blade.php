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
            <div class="box_backend_blogs">
                <a class="box_link" href="{{url('/backend/blogoverview')}}">BLOGS</a>
            </div>
            <div class="box_stretch">
                <a class="box_link" href="{{url('/backend/workoutoverview')}}">WORKOUTS</a>
            </div>
            <div class="community_box_diaries">
                <a class="box_link" href="{{url('/backend/diaryoverview')}}">DIARIES</a>
            </div>
            <div class="community_box_beforeafter">
                <a class="box_link" href="{{url('/backend/storyoverview')}}">BEFORE/AFTER STORIES</a>
            </div>
            <div class="community_box_meetups">
                <a class="box_link" href="{{url ('overview')}}">EVENTS</a>
            </div>
            <div class="box_admininfos">
                <a class="box_link" href="{{url('overview')}}">ADMIN INFOS</a>
            </div>
            <div class="box_create">
                <a class="box_link" href="{{url('/backend/create')}}">NEW/ADD/CREATE</a>
            </div>
        </div>


@endsection