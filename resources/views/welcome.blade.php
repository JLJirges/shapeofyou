@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1> SHAPE OF YOU</h1>
    </div>
    <div class="home_section goal_bg">
        <div>
            <h2>Choose your goal!</h2>
            <div class="home_section_goals">
                <img alt="lose weight" src="{{ asset('images/lose_weight_3.png') }}" width="110" height="110">
                <img alt="become fit" src="{{ asset('images/become_fit_2.png') }}" width="110" height="110">
                <img alt="lose weight" src="{{ asset('images/build_muscles_2.png') }}" width="110" height="110">
                <img alt="become fit" src="{{ asset('images/healthy_lifestyle_2.png') }}" width="110" height="110">
            </div>
            <div class="goal_info">
                <p>Whatever your personal goal might be - we are here to help you! Lose weight, improve stamina,
                    build muscles or find your way to a healthy/healthier lifestyle.
                    It is your desicion, your goal, your achievements -
                    SHAPE OF YOU!
                </p>

            </div>
        </div>
    </div>

    <div class="home_section home_section_community">
        <div>
            <h2>Community</h2>
            <p>
                Are you ready to become part of Austria's biggest lifestyle event? Choose your goal and achieve it.
                Alone or
                togehter - you decide. Become part of the community and get tips, tricks, the newest workouts and
                motivation
                from people all around Austria! Join the big events and have real talks to our fitness professionals,
                who
                are always there to help you out - online and in person!
                What do you think? We think, you should:
            </p>
            <a href="{{ url('register') }}">START NOW</a>
        </div>
    </div>
    <div class="home_section shape_bg">
        <div>
            <h2>Choose Your Body Shape</h2>
            <div class="home_body_shape_img">
                <img alt="hour glass shape" src="{{ asset('images/hourglass_shape_1.png') }}" width="120" height="120">
                <img alt="apple shape" src="{{ asset('images/apple_shape_1.png') }}" width="120" height="120">
                <img alt="pear shape" src="{{ asset('images/pear_shape_1.png') }}" width="120" height="120">
                <img alt="stick_shape" src="{{ asset('images/stick_shape_1.png') }}" width="120" height="120">
            </div>
        </div>
    </div>
    <div class="home_section home_section_food">
        <div>
            <h2>Super Food</h2>
            <p>
                Are you ready to become part of Austria's biggest lifestyle event? Choose your goal and achieve it.
                Alone or
                togehter - you decide. Become part of the community and get tips, tricks, the newest workouts and
                motivation
                from people all around Austria! Join the big events and have real talks to our fitness professionals,
                who
                are always there to help you out - online and in person!
                What do you think? We think, you should:
            </p>
            <a href="{{ url('register') }}">START NOW</a>
        </div>
    </div>
@endsection