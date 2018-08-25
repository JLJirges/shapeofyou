@extends('layouts.backendmaster')

@section('title')
    <title>ADMIN AREA | User Overview</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>User Overview</h1>
    </div>

    <div class="backend-box-section">
        @foreach($users as $user)
            <div class="backend-users">
            @if($user->profilepic )

                <a href="{{url('profile/' . $user->username)}}"
                   style="@if($user->isAdmin === 1) color: darkorange; @endif background-image:url({{asset('images/uploads/' . $user->profilepic)}});background-size:cover; background-position:center;"
                   class="backend_profile_picture_overview">
                    <span class="username_backend_overview">
                        {{$user->username}}
                    </span>
                    <form class="backend-user-action" action="/delete_communitymember/{{$user->id}}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <a class="edit" href="{{url('backend/user_edit/' . $user->id)}}">Edit</a>
                        <button class="delete"></button>
                    </form>
                </a>

            @else
                <a href="{{url('profile/' . $user->username)}}" style="background-image:url({{ asset ('images/profile/default_profile_pic_v1.png')}});background-size:cover; background-position:center;" class="backend_profile_picture_overview"><span class="username_backend_overview">{{$user->username}}
                    </span>
                    <form class="backend-user-action" action="/delete_communitymember/{{$user->id}}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <a class="edit" href="{{url('backend/user_edit/' . $user->id)}}">Edit</a>
                        <button class="delete"></button>
                    </form>
                </a>
            @endif
            </div>
        @endforeach
    </div>
@endsection