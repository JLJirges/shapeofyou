@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | Before/After Story</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>{{$bas_author->username}}'s Story</h1>
    </div>

    <div class="workout_entry diary_bg">
        <div class="workout_entry_setting">
            <div class="workout_details_profilepicture">
                @if($bas_author->profilepic )
                    <a href="{{url('profile/' . $bas_author->username)}}" style="background-image:url({{asset('images/uploads/' . $bas_author->profilepic)}});background-size:cover; background-position:center;"
                       class="backend_profile_picture_overview"><span class="username_backend_overview">{{$bas_author->username}}</span></a>
                @else
                    <a href="{{url('profile/' . $bas_author->username)}}"
                       style="background-image:url({{ asset ('images/profile/default_profile_pic_v1.png')}});background-size:cover; background-position:center;"
                       class="backend_profile_picture_overview"><span class="username_backend_overview">{{$bas_author->username}}</span>
                </a>
                @endif
                    <span>{{$bas->created_at}}</span>
            </div>
            <h2>{{ $bas->BeforeAfterStoryTitle }}</h2>
        </div>

        <div class="workout_entry_box">

            <div>
                <img src="{{asset('/images/bas/' . $bas->BeforeAfterStoryImageOne)}}" alt="diary image">

                <div class="workout_entry_text">

                    {{ $bas->BeforeAfterStoryContent }}


                </div>
                <img src="{{asset('/images/bas/' . $bas->BeforeAfterStoryImageTwo)}}" alt="diary image">
            </div>
        </div>
    </div>


    <div class="comments_section">
        <ul class="comments_section_interaction tabs">
            <li class="tab-link shown_tab" data-tab="comment-tab-1"><h5>Read Comments</h5></li>
            <li class="tab-link" data-tab="comment-tab-2"><h5>Write a Comment</h5></li>
            <li class="tab-link" data-tab="comment-tab-3"><h5>Hide Comments</h5></li>
        </ul>
        <div class="tab-content shown_tab" id="comment-tab-1">

            @foreach($bas_comments as $bas_comment)
                <div class="comments_details">
                    <div class="comments_details_user">
                        <a href="{{url('profile/' . $users->where('id', $bas_comment->UserId)->first()->username)}}">
                            <div class="comments_details_profilepicture">
                                @if($users->where('id', $bas_comment->UserId)->first()->profilepic)
                                    <img src="{{asset('images/uploads/' . $users->where('id', $bas_comment->UserId)->first()->profilepic)}}"
                                         alt="user profile picture">
                                @else
                                    <img src="{{ asset ('images/profile/default_profile_pic_v1.png')}}"
                                         alt="user profile picture">
                                @endif
                                <span>{{ $users->where('id', $bas_comment->UserId)->first()->username}}</span>

                            </div>
                        </a>
                        <span>{{ $bas_comment->BASDate}}</span>
                        @if( (auth()->check()) && (Auth::user()->isAdmin === 1) )
                            <div class="comments_details_edit">
                                <span class="delete"></span>
                                <span class="report"></span>
                            </div>
                        @else
                            <div class="comments_details_edit">
                                <span class="report"></span>
                            </div>
                        @endif
                    </div>

                    <p>{{ $bas_comment->BASContent}}</p>
                </div>

            @endforeach
        </div>
        <div class="tab-content" id="comment-tab-2">
            <form class="comment_form" method="post"
                  action="{{'/write_comment/beforeafter/' . $bas_id . '/' . $user_id}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <h2>Leave a Comment</h2>
                <label>Write your comment</label>
                <input type="text" name="comment" placeholder="I will be your comment...">
                <button class="white_button">Add Comment</button>
            </form>
        </div>
        <div class="tab-content" id="comment-tab-3"></div>
    </div>

@endsection