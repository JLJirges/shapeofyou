@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | Workout</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>WORKOUT</h1>
    </div>
    <div class="workout_bg">
        <div class="workout_section">

            <div>
                <p>
                    Motivated? Choose your workout and start now!
                </p>
                <p>
                    No need to be an expert! Choose the category, search for your favorite exercise and follow the
                    introduction.
                </p>
            </div>
        </div>

        <div class="square_box_section">

            <div class="box_indoor">
                <a class="box_link" href="{{url('overview')}}">INDOOR</a>
            </div>
            <div class="box_outdoor">
                <a class="box_link" href="{{url('overview')}}">OUTDOOR</a>
            </div>
            <div class="box_stretch">
                <a class="box_link" href="{{url('overview')}}">STRETCHING</a>
            </div>
            <div class="box_tenminutes">
                <a class="box_link" href="{{url('overview')}}">10 MINUTES WORKOUT</a>
            </div>
            <div class="box_partnerworkout">
                <a class="box_link" href="{{url('overview')}}">PARTNER WORKOUT</a>
            </div>
            <div class="box_yoga">
                <a class="box_link" href="{{url('overview')}}">YOGA</a>
            </div>
            <div class="box_workoutwithequipment">
                <a class="box_link" href="{{url('overview')}}">POWER WITH EQUIPMENT</a>
            </div>
            <div class="box_withoutequipment">
                <a class="box_link" href="{{url('overview')}}">WITHOUT EQUIPMENT</a>
            </div>
        </div>

    </div>
    <div class="workout_blog_bg">

        <div class="title_bg"><h2>Workout and Training Blogs</h2>
        </div>
        <div class="square_box_section">
            <div class="box_whatequipment">
                <a class="box_link" href="{{url('blog')}}">WHAT EQUIPMENT</a>
            </div>
            <div class="box_thepowerofbreaks">
                <a class="box_link" href="{{url('blog')}}">THE POWER OF BREAKS</a>
            </div>
            <div class="box_doyouevenbmi">
                <a class="box_link" href="{{url('blog')}}">DO YOU EVEN BMI</a>
            </div>
            <div class="box_beachbodychallenge">
                <a class="box_link" href="{{url('blog')}}">BEACH BODY CHALLENGE</a>
            </div>
            <div class="box_listentoyourself">
                <a class="box_link" href="{{url('blog')}}">LISTEN TO YOURSELF</a>
            </div>
            <div class="box_theperfectass">
                <a class="box_link" href="{{url('blog')}}">THE PERFECT ASS</a>
            </div>
            <div class="box_bodyshapes">
                <a class="box_link" href="{{url('blog')}}">BODYSHAPES</a>
            </div>
            <div class="box_theabsabc">
                <a class="box_link" href="{{url('blog')}}">THE ABS - ABC</a>
            </div>
        </div>

    </div>




@endsection