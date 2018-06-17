@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | Users</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>OVERVIEW</h1>
    </div>

    <div class="square_box_section">

        @foreach($users as $showuser)
            @if($showuser->profilepic )

                <a href="{{url('profile/' . $showuser->username)}}"
                   style="@if($showuser->isAdmin === 1) color: darkorange; @endif background-image:url({{asset('images/uploads/' . $showuser->profilepic)}});background-size:cover; background-position:center;"
                   class="backend_profile_picture_overview"><span class="username_backend_overview">{{$showuser->username}}
                </span>
                </a>
            @else
                <a href="{{url('profile/' . $showuser->username)}}" style="background-image:url({{ asset ('images/profile/default_profile_pic_v1.png')}});background-size:cover; background-position:center;" class="backend_profile_picture_overview"><span class="username_backend_overview">{{$showuser->username}}
                </span></a>
            @endif

        @endforeach
    </div>


@endsection