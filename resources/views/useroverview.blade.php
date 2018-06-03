@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | Users</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>OVERVIEW</h1>
    </div>


    @foreach($users as $showuser)
        @if($showuser->profilepic )

            <a href="{{url('profile/' . $showuser->username)}}" style="background-image:url({{asset('images/uploads/' . $showuser->profilepic)}});background-size:cover; background-position:center;"
                 class="profile_picture">
            </a>
        @else
            <a href="{{url('profile/' . $showuser->username)}}"><img src="{{ asset ('images/profile/default_profile_pic_v1.png')}}"
                                                                     alt="user profile picture" class="profile_picture"></a>
        @endif
        <span class="username_overview"><a href="{{url('profile/' . $showuser->username)}}">{{$showuser->username}}</a>
                </span>
    @endforeach


@endsection