@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | Workout</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>OVERVIEW</h1>
    </div>


    @if($workouts->where('WorkoutCategory', $workout_category)->count() > 0)
        <div class="square_box_section">
            @foreach($workouts->where('WorkoutCategory', $workout_category)->get() as $workout)
                <div style="background-image:url({{asset('images/workout/' . $workout->WorkoutImage)}});background-size:cover; background-position:center;">

                    <a class="box_link"
                       href="{{url('detail/' . $workout->id)}}">
                        {{$workout->WorkoutTitle}}  </a>
                </div>
            @endforeach
        </div>
    @endif



@endsection