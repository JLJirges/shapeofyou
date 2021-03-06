@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | Workout-Details</title>
    <meta name="description"
          content="Every Workout helps you achieve a different goal! Muscle work, cardio, whatever it is - we are here with you! Start now!">
@endsection

@section('content')
    <div class="h1_bg">
        <h1>WORKOUT</h1>
    </div>
    <div class="workout_entry">
        <div class="workout_entry_setting">
            <!-- Workout Author -->
            <div class="workout_details_profilepicture">
                <div style="background-image: url({{asset('images/uploads/' . $workout_author->profilepic )}});background-size: cover; background-position: center"
                     class="workout_author"></div>
                <span> {{$workout_author->username}}</span>
            </div>
            <h2>{{ $workout->WorkoutTitle }}</h2>

            <!-- Possibility to like/dislike Workout -->
            @if($user_likes_workout)
                <form method="POST" action="{{ '/favorite_workout/remove/' . $workout_id . '/' . $user_id }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button class="added_workout addworkout_button">
                    </button>
                </form>
            @else
                <form method="POST" action="{{ '/favorite_workout/insert/' . $workout_id . '/' . $user_id }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <button class="addworkout addworkout_button">
                        <span class="addworkout"></span>
                    </button>
                </form>
            @endif
        </div>

        <!-- Workout Entry -->

        <div class="workout_entry_box">
            <div>
                @if($workout->WorkoutHeroImage)
                    <img src="{{('../images/workout/' . $workout->WorkoutHeroImage)}}" alt="workout image">
                @endif
                <div class="workout_entry_text">
                    <p>{{ $workout->WorkoutContentOne }}</p>
                </div>
                @if($workout->WorkoutImage)
                    <img src="{{('../images/workout/' . $workout->WorkoutImage)}}" alt="workout image">
                @endif
                <div class="workout_entry_text">
                    <p>@if($workout->WorkoutContentTwo){{ $workout->WorkoutContentTwo }}@endif</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Workout Comments Options -->

    <div class="comments_section">
        <ul class="comments_section_interaction tabs">
            <li class="tab-link shown_tab" data-tab="comment-tab-1"><h5>Read Comments</h5></li>
            <li class="tab-link" data-tab="comment-tab-2"><h5>Write a Comment</h5></li>
            <li class="tab-link" data-tab="comment-tab-3"><h5>Hide Comments</h5></li>
        </ul>
        <div class="tab-content shown_tab" id="comment-tab-1">

            <!-- Workout Comments -->
            @foreach($workout_comments as $workout_comment)
                <div class="comments_details">
                    <div class="comments_details_user">
                        <a href="{{url('profile/' . $users->where('id', $workout_comment->UserId)->first()->username)}}">
                            <div class="comments_details_profilepicture">
                                @if($users->where('id', $workout_comment->UserId)->first()->profilepic)
                                    <img src="{{asset('images/uploads/' . $users->where('id', $workout_comment->UserId)->first()->profilepic)}}"
                                         alt="user profile picture">
                                @else
                                    <img src="{{ asset ('images/profile/default_profile_pic_v1.png')}}"
                                         alt="user profile picture">
                                @endif
                                <span @if($users->where('id', $workout_comment->UserId)->first()->isAdmin === 1) style=" color: darkorange;" @endif>{{ $users->where('id', $workout_comment->UserId)->first()->username}}</span>

                            </div>
                        </a>
                        <span>{{ $workout_comments->where('WorkoutCommentDate', $workout_comment->WorkoutCommentDate)->first()->WorkoutCommentDate}}</span>

                        <!-- delete comment if Admin or Author -->
                        @if( ((auth()->check()) && (Auth::user()->isAdmin === 1)) || ((Auth::user()->id === $workout_comment->UserId)))
                            <div class="comments_details_edit">
                                <form action="/delete_workout_comment/{{$workout->id}}/{{$workout_comment->id}}"
                                      method="post">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" class="delete"></button>
                                </form>
                            </div>
                        @else
                            <div class="comments_details_edit">

                            </div>
                        @endif
                    </div>
                    <p>{{ $workout_comment->WorkoutCommentContent}}</p>
                </div>
            @endforeach
        </div>

        <!-- Comments option -->
        <div class="tab-content" id="comment-tab-2">
            <form class="comment_form" method="post"
                  action="{{'/write_comment/detail/' . $workout_id . '/' . $user_id}}">
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