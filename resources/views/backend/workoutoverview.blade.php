@extends('layouts.backendmaster')

@section('title')
    <title>ADMIN AREA | Workout Overview</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>WORKOUT OVERVIEW</h1>
    </div>



    <div class="backend_box_section">
        @foreach($workouts as $workout)
            <div class="backend-users">
                    <a href="{{url('detail/' . $workout->id)}}"
                       style="background-image:url({{asset('images/workout/' . $workout->WorkoutImage)}});background-size:cover; background-position:center;"
                       class="backend_profile_picture_overview">
                    <span class="username_backend_overview">
                        {{$workout->WorkoutTitle}}
                    </span>
                        <form class="backend-user-action" action="/delete_workout/{{$workout->id}}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <a class="edit" href="{{url('backend/workout_edit/' . $workout->id)}}">Edit</a>
                            <button class="delete"></button>
                        </form>
                    </a>

            </div>
        @endforeach
    </div>






@endsection