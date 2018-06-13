@extends('layouts.backendmaster')

@section('title')
    <title>ADMIN AREA | Workout Overview</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>WORKOUT OVERVIEW</h1>
    </div>

    <div class="square_box_section">
        @foreach($workouts as $workout)
                <div style="background-image:url({{asset('images/workout/' . $workout->WorkoutImage)}});background-size:cover; background-position:center;">
                            <a class="box_link"
                               href="{{url('detail/' . $workout->id)}}">
                                {{$workout->WorkoutTitle}}  </a>
                            <div class="admin_blog_interaction">

                                <form action="/delete_workout/{{$workout->id}}" method="post">
                                    <a class="edit" href="{{url('backend/workout_edit/' . $workout->id)}}">Edit</a>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button class="delete"></button>
                                </form>
                            </div>
                        </div>
                        @endforeach
                </div>
    </div>
@endsection