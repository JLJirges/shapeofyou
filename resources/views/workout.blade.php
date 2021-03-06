@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | Workout</title>
    <meta name="description"
          content="Chose the category you would like to start with and work, work, work! We are here to check on you and you will be able to change your body!">
@endsection

@section('content')
    <div class="workout_bg">
        <h1>WORKOUT</h1>
        <div class="workout_section">
            <div>
                <h2>Motivated? Choose your workout and start now!</h2>
                <p>No need to be an expert! Choose the category, search for your favorite exercise and follow
                    theintroduction.</p>
                <p>WORK! SWEAT! BE PROUD OF YOURSELF!</p>
            </div>
        </div>

        <!-- Sports Categories -->

        <div class="square_box_section">

            <!-- WARM UP -->
            @if($workout->where('WorkoutCategory', 1)->count() > 0)
                <div class="box_outdoor">
                    <a href="@if( (auth()->check())){{url('overview/1')}}@else{{ url ('register') }}@endif"
                       class="box_link">
                        <svg viewbox="0 -2 45 45.5" width="220" height="215">
                            <defs>
                                <mask class="mask" id="warmup_mask" x="0" y="0">
                                    <rect x="0.5" y="0.5" width="44" height="41" fill="#fff"/>
                                    <text x="11" text-anchor="middle" y="25" dy="0">W</text>
                                    <text x="18" text-anchor="middle" y="25" dy="0">A</text>
                                    <text x="24" text-anchor="middle" y="25" dy="0">R</text>
                                    <text x="32" text-anchor="middle" y="25" dy="0">M</text>

                                    <text x="20" text-anchor="middle" y="34" dy="0">U</text>
                                    <text x="26" text-anchor="middle" y="34" dy="0">P</text>
                                </mask>
                            </defs>
                            <rect x="0.5" y="0.5" width="220" height="215" mask="url(#warmup_mask)" fill-opacity="1"
                                  fill="rgba(255, 255, 255, 0.9)"/>
                        </svg>
                    </a>
                </div>

            @endif

        <!-- STRETCH -->
            @if($workout->where('WorkoutCategory', 2)->count() > 0)
                <div class="box_stretch">
                    <a href="@if( (auth()->check())){{url('overview/2')}}@else{{ url ('register') }}@endif">
                        <svg viewbox="0 -3 45 45.5" width="220" height="215">
                            <defs>
                                <mask class="mask" id="stretch_mask" x="0" y="0">
                                    <rect x="0.5" y="0.5" width="44" height="41" fill="#fff"/>
                                    <text x="4" text-anchor="middle" y="30" dy="0">S</text>
                                    <text x="10" text-anchor="middle" y="30" dy="0">T</text>
                                    <text x="16" text-anchor="middle" y="30" dy="0">R</text>
                                    <text x="22" text-anchor="middle" y="30" dy="0">E</text>
                                    <text x="28" text-anchor="middle" y="30" dy="0">T</text>
                                    <text x="34" text-anchor="middle" y="30" dy="0">C</text>
                                    <text x="41" text-anchor="middle" y="30" dy="0">H</text>
                                </mask>
                            </defs>
                            <rect x="0.5" y="0.5" width="220" height="215" mask="url(#stretch_mask)" fill-opacity="1"
                                  fill="rgba(000, 000, 000, 0.9)"/>
                        </svg>
                    </a>
                </div>
            @endif

        <!-- MAIN WORKOUT -->
            @if($workout->where('WorkoutCategory', 3)->count() > 0)
                <div class="box_indoor">
                    <a href="@if( (auth()->check())){{url('overview/3')}}@else{{ url ('register') }}@endif">
                        <svg viewbox="0 -3 45 45.5" width="222" height="215">
                            <defs>
                                <mask id="mainworkout_mask" x="0" y="0">
                                    <rect x="0.5" y="0.5" width="44" height="41" fill="#fff"/>
                                    <text x="15" text-anchor="middle" y="24" dy="0">M</text>
                                    <text x="23" text-anchor="middle" y="24" dy="0">A</text>
                                    <text x="27" text-anchor="middle" y="24" dy="0">I</text>
                                    <text x="32" text-anchor="middle" y="24" dy="0">N</text>

                                    <text x="4.5" text-anchor="middle" y="35" dy="0">W</text>
                                    <text x="11.5" text-anchor="middle" y="35" dy="0">O</text>
                                    <text x="17.5" text-anchor="middle" y="35" dy="0">R</text>
                                    <text x="23.5" id="ltrV" text-anchor="middle" y="35" dy="0">K</text>
                                    <text x="29" text-anchor="middle" y="35" dy="0">O</text>
                                    <text x="35.5" text-anchor="middle" y="35" dy="0">U</text>
                                    <text x="41.5" text-anchor="middle" y="35" dy="0">T</text>
                                </mask>
                            </defs>
                            <rect x="0.5" y="0.5" width="220" height="215" mask="url(#mainworkout_mask)"
                                  fill-opacity="1" fill="rgba(255, 255, 255, 0.9)"/>
                        </svg>
                    </a>
                </div>
            @endif
        </div>
    </div>
@endsection