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
            @if($user->profilepic)
                <div style="background-image:url({{asset('images/uploads/' . $user->profilepic)}});background-size:cover; background-position:center;">
                    @else
                        <div style="background-image:url({{ asset ('images/profile/default_profile_pic_v1.png')}});background-size:cover; background-position:center;">
                            @endif
                            <a @if($user->isAdmin === 1) style="color: darkorange;" @endif class="box_link"
                               href="{{url('profile/' . $user->id)}}">
                                {{$user->username}}  </a>
                            <div class="admin_blog_interaction">
                                <form action="/delete_communitymember/{{$user->id}}" method="post">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <a class="edit" href="{{url('backend/user_edit/' . $user->id)}}">Edit</a>
                                    <button class="delete"></button>
                                </form>
                            </div>
                        </div>
                        @endforeach
                </div>
    </div>


@endsection