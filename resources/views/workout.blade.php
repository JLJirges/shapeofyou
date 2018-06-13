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
            @if($workout->where('WorkoutCategory', 1)->count() > 0)
                <div class="box_indoor">
                    <a class="box_link"
                       href="@if( (auth()->check())){{url('overview/1')}}@else{{ url ('register') }}@endif">WARM UP</a>
                </div>
            @endif
                @if($workout->where('WorkoutCategory', 2)->count() > 0)
                    <div class="box_stretch">
                        <a class="box_link"
                           href="@if( (auth()->check())){{url('overview/2')}}@else{{ url ('register') }}@endif">STRETCHING</a>
                    </div>
                @endif
                @if($workout->where('WorkoutCategory', 3)->count() > 0)
                <div class="box_partnerworkout">
                    <a class="box_link"
                       href="@if( (auth()->check())){{url('overview/3')}}@else{{ url ('register') }}@endif">MAIN WORKOUT</a>
                </div>
                @endif
            @if($workout->where('WorkoutCategory', 4)->count() > 0)
                <div class="box_tenminutes">
                    <a class="box_link"
                       href="@if( (auth()->check())){{url('overview/4')}}@else{{ url ('register') }}@endif">10 MINUTES
                        WORKOUT</a>
                </div>
                @endif
            @if($workout->where('WorkoutCategory', 5)->count() > 0)
                <div class="box_partnerworkout">
                    <a class="box_link"
                       href="@if( (auth()->check())){{url('overview/5')}}@else{{ url ('register') }}@endif">PARTNER
                        WORKOUT</a>
                </div>
                @endif
            @if($workout->where('WorkoutCategory', 6)->count() > 0)
                <div class="box_yoga">
                    <a class="box_link"
                       href="@if( (auth()->check())){{url('overview/6')}}@else{{ url ('register') }}@endif">YOGA</a>
                </div>
                @endif
            @if($workout->where('WorkoutCategory', 7)->count() > 0)
                <div class="box_workoutwithequipment">
                    <a class="box_link"
                       href="@if( (auth()->check())){{url('overview/7')}}@else{{ url ('register') }}@endif">POWER WITH
                        EQUIPMENT</a>
                </div>
                @endif
            @if($workout->where('WorkoutCategory', 8)->count() > 0)
                <div class="box_outdoor">
                    <a class="box_link"
                       href="@if( (auth()->check())){{url('overview/8')}}@else{{ url ('register') }}@endif">OUTDOOR</a>
                </div>
            @endif
        </div>

    </div>

    @if($blogs->where('BlogCategory', 4)->count() > 0)
        <div class="title_bg">
            <h2>Workout and Training Blogs</h2>
        </div>
    <div class="workout_blog_bg">


        <div class="square_box_section">
            @foreach($blogs->where('BlogCategory', 4) as $blog)
                <div style="background-image:url({{'images/blogs/' . $blog->BlogHeroImage}});background-size:cover; background-position:center;">
                    <a class="box_link"
                       href="@if( (auth()->check())){{url('blog/' . $blog->id)}}@else{{ url ('register') }}@endif">
                        {{$blog->BlogTitle}}  </a>
                </div>
            @endforeach
        </div>

    </div>

    @endif


@endsection