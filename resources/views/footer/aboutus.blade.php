@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | About us</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>ABOUT US</h1>
    </div>


    <div class="aboutus_content">
        <p>Shape of you is a platform that allows people to interact with other community members, to support them
            and
            to live a healthy life.
            We have nutrition guides, workouts, blogs and fitness professionals and a lot of motivation for you!
        </p>
    </div>
    @foreach($admins as $admin)
        <div class="aboutusteam_profile">
            <a href="{{url('profile/' . $admin->username)}}"
               style="background-image:url({{asset('images/uploads/' . $admin->profilepic)}});background-size:cover; background-position:center;"
               class="backend_profile_picture_overview"><span class="username_backend_overview">{{$admin->username}}
                </span>
            </a>
            <div>
      <p>{{$admin->AdminText}}</p>
            </div>
        </div>
    @endforeach

@endsection