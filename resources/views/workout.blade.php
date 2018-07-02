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
                <div class="box_outdoor">
                    <a href="@if( (auth()->check())){{url('overview/1')}}@else{{ url ('register') }}@endif">
                        <svg viewbox="0 -1 50 47.4">
                            <defs>
                                <mask class="mask" id="warmup_mask" x="0" y="0" width="220" height="215">
                                    <rect x="0.5" y="0.5" width="49" height="49" fill="#fff"/>
                                    <text x="14" text-anchor="middle" y="25" dy="0">W</text>
                                    <text x="22" text-anchor="middle" y="25" dy="0">A</text>
                                    <text x="28" text-anchor="middle" y="25" dy="0">R</text>
                                    <text x="36" text-anchor="middle" y="25" dy="0">M</text>

                                    <text x="22" text-anchor="middle" y="34" dy="0">U</text>
                                    <text x="28" text-anchor="middle" y="34" dy="0">P</text>
                                </mask>
                            </defs>
                            <rect x="0.5" y="0.5" width="220" height="215" mask="url(#warmup_mask)" fill-opacity="1"
                                  fill="rgba(255, 255, 255, 0.9)"/>
                        </svg>
                    </a>
                </div>
            @endif
            @if($workout->where('WorkoutCategory', 2)->count() > 0)
                <div class="box_stretch">
                    <a href="@if( (auth()->check())){{url('overview/2')}}@else{{ url ('register') }}@endif">
                        <svg viewbox="0 -1 50 47">
                            <defs>
                                <mask class="mask" id="stretch_mask" x="0" y="0" width="220" height="215">
                                    <rect x="0.5" y="0.5" width="49" height="49" fill="#fff"/>
                                    <text x="6" text-anchor="middle" y="30" dy="0">S</text>
                                    <text x="12" text-anchor="middle" y="30" dy="0">T</text>
                                    <text x="18" text-anchor="middle" y="30" dy="0">R</text>
                                    <text x="24" text-anchor="middle" y="30" dy="0">E</text>
                                    <text x="30" text-anchor="middle" y="30" dy="0">T</text>
                                    <text x="37" text-anchor="middle" y="30" dy="0">C</text>
                                    <text x="44" text-anchor="middle" y="30" dy="0">H</text>
                                </mask>
                            </defs>
                            <rect x="0.5" y="0.5" width="220" height="215" mask="url(#stretch_mask)" fill-opacity="1"
                                  fill="rgba(000, 000, 000, 0.9)"/>
                        </svg>
                    </a>
                </div>
            @endif
            @if($workout->where('WorkoutCategory', 3)->count() > 0)
                <div class="box_indoor">
                    <a href="@if( (auth()->check())){{url('overview/3')}}@else{{ url ('register') }}@endif">
                        <svg viewbox="0 -1 50 47">
                            <defs>
                                <mask id="mainworkout_mask" x="0" y="0" width="220" height="205">
                                    <rect x="0.5" y="0.5" width="49" height="49" fill="#fff"/>
                                    <text x="15" text-anchor="middle" y="24" dy="0">M</text>
                                    <text x="23" text-anchor="middle" y="24" dy="0">A</text>
                                    <text x="27" text-anchor="middle" y="24" dy="0">I</text>
                                    <text x="32" text-anchor="middle" y="24" dy="0">N</text>


                                    <text x="6" text-anchor="middle" y="35" dy="0">W</text>
                                    <text x="14" text-anchor="middle" y="35" dy="0">O</text>
                                    <text x="21" text-anchor="middle" y="35" dy="0">R</text>
                                    <text x="27" id="ltrV" text-anchor="middle" y="35" dy="0">K</text>
                                    <text x="33" text-anchor="middle" y="35" dy="0">O</text>
                                    <text x="40" text-anchor="middle" y="35" dy="0">U</text>
                                    <text x="46" text-anchor="middle" y="35" dy="0">T</text>
                                </mask>
                            </defs>
                            <rect x="0.5" y="0.5" width="220" height="205" mask="url(#mainworkout_mask)"
                                  fill-opacity="1" fill="rgba(255, 255, 255, 0.9)"/>
                        </svg>

                    </a>
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




@endsection