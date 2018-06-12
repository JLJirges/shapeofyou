@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | Diary</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>{{$diary_author->username}}'s Diary</h1>
    </div>

    <div class="workout_entry diary_bg">
        <div class="workout_entry_setting">

            <div class="workout_details_profilepicture">

                <div style="background-image: url({{asset('images/uploads/' . $diary_author->profilepic )}});background-size: cover; background-position: center"
                     class="workout_author"></div>
                <span>{{$diary_author->username}}</span>
            </div>

            <h2>{{ $diary->DiaryTitle }}</h2>
            <div>
                @if( ((Auth::user()->isAdmin === 1)) || ((Auth::user()->id === $diary->DiaryUserId)))
                    <div class="comments_details_edit">
                        <form action="/delete_diary_entry/{{$diary->id}}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="delete"></button>
                        </form>
                    </div>
                @endif
            <span>{{$diary->created_at}}</span>

            </div>
        </div>

        <div class="workout_entry_box">

            <div>
                <img src="{{asset('/images/uploads/' . $diary->DiaryHeroImage)}}" alt="diary image">

                <div class="workout_entry_text">

                    {{ $diary->DiaryContent }}


                </div>
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

            @foreach($diary_comments as $diary_comment)
                <div class="comments_details">


                    <div class="comments_details_user">
                        <a href="{{url('profile/' . $users->where('id', $diary_comment->UserId)->first()->username)}}">
                            <div class="comments_details_profilepicture">
                                @if($users->where('id', $diary_comment->UserId)->first()->profilepic)
                                    <img src="{{asset('images/uploads/' . $users->where('id', $diary_comment->UserId)->first()->profilepic)}}"
                                         alt="user profile picture">
                                @else
                                    <img src="{{ asset ('images/profile/default_profile_pic_v1.png')}}"
                                         alt="user profile picture">
                                @endif
                                <span>{{ $users->where('id', $diary_comment->UserId)->first()->username}}</span>

                            </div>
                        </a>
                        <span>{{ $diary_comment->DiaryCommentDate}}</span>
                        @if( ((auth()->check()) && (Auth::user()->isAdmin === 1)) || ((Auth::user()->id === $diary_comment->UserId)))
                            <div class="comments_details_edit">
                                <form action="/delete_diary_comment/{{$diary->id}}/{{$diary_comment->id}}" method="post">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" class="delete"></button>
                                </form>
                            </div>
                        @else
                            <div class="comments_details_edit">
                                <span class="report"></span>
                            </div>
                        @endif
                    </div>

                    <p>{{ $diary_comment->DiaryCommentContent}}</p>
                </div>

            @endforeach
        </div>
        <div class="tab-content" id="comment-tab-2">
            <form class="comment_form" method="post"
                  action="{{'/write_comment/diary/' . $diary_id . '/' . $user_id}}">
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