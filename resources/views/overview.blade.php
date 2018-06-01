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
                <div style="background-image:url({{'images/' . $workout->WorkoutBoxImage}});background-size:cover; background-position:center;">

                    <a class="box_link"
                       href="{{url('detail/' . $workout->id)}}">
                        {{$workout->WorkoutTitle}}  </a>
                </div>
            @endforeach
        </div>

    @endif

    @foreach($type as $showtype)

        <div class="square_box_section">
            <div style="background-image:url({{'images/' . $diaries->DiaryHeroImage}});background-size:cover; background-position:center;">

                <a class="box_link"
                   href="{{url('personalentry/' . $diaries->id)}}">
                    {{$diaries->DiaryTitle}}  </a>
            </div>
        </div>
    @endforeach

    <!--
    <div class="square_box_section">
        <div class="box_indoor" style="background-image: ">
            <a class="box_link" href="{{url('detail')}}">INDOOR</a>
        </div>
        <div class="box_outdoor">
            <a class="box_link" href="{{url('detail')}}">OUTDOOR</a>
        </div>
        <div class="box_stretch">
            <a class="box_link" href="{{url('detail')}}">STRETCHING</a>
        </div>
        <div class="box_tenminutes">
            <a class="box_link" href="{{url('detail')}}">10 MINUTES WORKOUT</a>
        </div>
        <div class="box_partnerworkout">
            <a class="box_link" href="{{url('detail')}}">PARTNER WORKOUT</a>
        </div>
        <div class="box_yoga">
            <a class="box_link" href="{{url ('detail')}}">YOGA</a>
        </div>
        <div class="box_workoutwithequipment">
            <a class="box_link" href="{{url('detail')}}">WORKOUT WITH EQUIPMENT</a>
        </div>
        <div class="box_withoutequipment">
            <a class="box_link" href="{{url('detail')}}">WITHOUT EQUIPMENT</a>
        </div>
    </div>


@endsection