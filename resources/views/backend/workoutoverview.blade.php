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
            @if($workout->WorkoutBoxImage)
                <div style="background-image:url({{asset('images/workout' . $workout->WorkoutHeroImage)}});background-size:cover; background-position:center;">
                    @else
                        <div class="community_box_diaries">
                            @endif
                            <a class="box_link"
                               href="{{url('detail/' . $workout->id)}}">
                                {{$workout->WorkoutTitle}}  </a>
                            <div class="admin_blog_interaction">
                                <form>
                                    <a>Edit</a>
                                    <button class="delete"></button>
                                </form>
                            </div>
                        </div>
                        @endforeach
                </div>
    </div>
@endsection