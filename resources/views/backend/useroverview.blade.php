@extends('layouts.backendmaster')

@section('title')
    <title>ADMIN AREA | User Overview</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>User Overview</h1>
    </div>


    <div class="square_box_section">

        @foreach($users as $user)
            @if($user->profilepic )

                <a href="{{url('profile/' . $user->username)}}"
                   style="background-image:url({{asset('images/uploads/' . $user->profilepic)}});background-size:cover; background-position:center;"
                   class="backend_profile_picture_overview"><span class="username_backend_overview">{{$user->username}}
                </span>
                </a>
            @else
                <a href="{{url('profile/' . $user->username)}}" style="background-image:url({{ asset ('images/profile/default_profile_pic_v1.png')}});background-size:cover; background-position:center;" class="backend_profile_picture_overview"><span class="username_backend_overview">{{$user->username}}
                </span></a>
            @endif

        @endforeach
    </div>


@endsection