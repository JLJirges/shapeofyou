@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU</title>
    <meta name="description"
          content="Are you ready to shape your body? Awesome - because we are happy to work with you as hard as possible, to achieve this goal together! Let's get started!">
@endsection

@section('content')


    <div class="home_section home_bg">

        <h1> SHAPE OF YOU</h1>

        <div class="slogan">
            <h2> WE HELP YOU </h2>
            <div class="verticalFlip">
                <span class="h2">SHAPE</span>
                <span class="h2">FIND</span>
                <span class="h2">REACH</span>
                <span class="h2">IMPROVE</span>
                <span class="h2">LOVE</span>
            </div>

            <br>

            <div>
                <h2>YOUR</h2>
                <div class="verticalFlip verticalFlip_2">
                    <span class="h2">BODY!</span>
                    <span class="h2">POWER!</span>
                    <span class="h2">GOAL!</span>
                    <span class="h2">WILL!</span>
                    <span class="h2">APPEARANCE!</span>
                </div>
            </div>
        </div>

        <!-- GOALS -->

        <div class="home_section_goals_content">
            <h2>Choose your goal!</h2>
            <p>
                Whatever your personal goal might be - we are here to help
                you! Lose weight, improve stamina,
                build muscles or find your way to a healthy/healthier lifestyle.
                It is your desicion, your goal, your achievements -
                SHAPE OF YOU!
            </p>

            <ul class="tabs home_section_goals">
                <li class="tab-link current_tab" data-tab="goal-tab-1">
                    <img alt="lose weight" src="{{ asset('images/welcome/lose_weight.png') }}" width="110" height="110">
                </li>
                <li class="tab-link" data-tab="goal-tab-2">
                    <img class="home_goal_bg2" alt="become fit" src="{{ asset('images/welcome/become_fit.png') }}" width="110"
                         height="110">
                </li>
                <li class="tab-link" data-tab="goal-tab-3">
                    <img alt="build muscles" src="{{ asset('images/welcome/build_muscles.png') }}" width="110" height="110">
                </li>
                <li class="tab-link" data-tab="goal-tab-4">
                    <img class="home_goal_bg2" alt="become fit" src="{{ asset('images/welcome/healthy_lifestyle.png') }}"
                         width="110" height="110">
                </li>
            </ul>

            <div id="goal-tab-1" class="tab-content current_tab">
                <strong>WEIGHT LOSS</strong> We are going to help! You'll find a lot of interesting Blogs about
                Nutrition and Workout, so you are going to feel as awesome as possible with SHAPE OF YOU!
            </div>
            <div id="goal-tab-2" class="tab-content">
                <strong>FITNESS</strong>Are you thinking about running a Marathon or just noticed you'd like to
                be able
                to take the stairs
                without gasping for air afterwards? No need to search more! We are here for you and together we
                will
                make you fit to run stairs so fast you could call yourself The Flash!
            </div>
            <div id="goal-tab-3" class="tab-content">
                <strong>MUSCLE WORK</strong>You are already fit and have a healthy lifestyle, but now it's time
                to
                define your body or add some
                new muscles? This is the place to be! With our Workouts and Nutrition Guides you will be able to
                build muscles at places you did not know you could even have muscles there!
            </div>
            <div id="goal-tab-4" class="tab-content">
                <strong>HEALTH</strong> Pizza, Burger, Fries and Coke! No thanks, those times are over! If your
                goal is
                a healthier
                lifestyle, we have Blogs and light Workouts to comfort you in your new and healthy way of
                living!
                Your body will love you for it, and you will love the SHAPE OF YOU!
            </div>
        </div>

    </div>


    <!-- COMMUNITY -->

    <div class="home_section home_section_community">
        <div>
            <h2>Awesome Events</h2>
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
            @if(auth()->check())
                <a href="{{ url('meetups') }}">GO TO EVENTS</a>
            @else
                <a href="{{ url('register') }}">START NOW</a>
            @endif
        </div>
    </div>

    <!-- BODY SHAPE -->

    <div class="home_section shape_bg">
        <div class="home_section_shapes_content">
            <h2>Choose Your Body Shape</h2>
            <ul class="tabs">
                <li class="tab-link current_tab" data-tab="shape-tab-1">
                    <img alt="hour glass shape" src="{{ asset('images/welcome/hourglass_shape.png') }}" width="120"
                         height="120">
                </li>
                <li class="tab-link" data-tab="shape-tab-2">
                    <img alt="apple shape" src="{{ asset('images/welcome/apple_shape.png') }}" width="120" height="120">
                </li>
                <li class="tab-link" data-tab="shape-tab-3">
                    <img alt="pear shape" src="{{ asset('images/welcome/pear_shape.png') }}" width="120" height="120">
                </li>
                <li class="tab-link" data-tab="shape-tab-4">
                    <img alt="stick_shape" src="{{ asset('images/welcome/stick_shape.png') }}" width="120" height="120">
                </li>
            </ul>
            <div id="shape-tab-1" class="tab-content current_tab">
                Hour Glass! If your shoulders and hips are in line and your waist is nicely rounded, then you are an
                Hour Glass Body Type! But what to do with this information? Easy: Time to check out our Blog about
                Body
                Shapes!
            </div>
            <div id="shape-tab-2" class="tab-content">
                If you tend to gain weight around your waist first, but your legs are still as thin as you want them
                to
                be - then you are an Apple Shape Body Type! But what to do with this information? Easy: Time to
                check
                out our Blog about Body
                Shapes!
            </div>
            <div id="shape-tab-3" class="tab-content">
                Your hips are bigger than your shoulders and when you put on weight it's always first on your hips
                and
                legs, but almost never happens to be on your upper torso or arms? And when you lose weight, it's
                always
                to be seen on your upper torso and arms first, but your legs and ass alwys are the last section,
                where
                you see change? Then you are a Pear Shape Body Type! But what to do with this information? Easy:
                Time to
                check out our Blog about Body Shapes!
            </div>
            <div id="shape-tab-4" class="tab-content">
                There is always that one friend who can eat whatever and as much as they want without gaining weight
                at
                all. If you are this person, everybody is secretely jealous of, then congratulations: You are a
                Straight
                Body Type. Or Stick Figure Body Type. Or Banana Body Type. - Chose whatever you'd like to be called!
                But
                what to do with this information? Easy: Time to
                check out our Blog about Body Shapes!
            </div>
        </div>
    </div>

    <!-- BLOGS -->

    <div class="home_section home_section_food">
        <div>
            <h2>Up to date</h2>
            <p>
                Whether new nutrition styles and workouts come out or scientists reveal a new method to lose weight over
                night due to a magical drink - we will find it, test it, share it with you. The good and the bad sides.
                What do you have to do? Easy! Just:
            </p>
            @if(auth()->check())
                <a href="{{ url('superfood') }}">READ BLOGS</a>
            @else
                <a href="{{ url('register') }}">START NOW</a>
            @endif
        </div>
    </div>


@endsection