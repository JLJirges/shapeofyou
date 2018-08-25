@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | Community</title>
    <meta name="description"
          content="Do you want to belong Austria's biggest Fitness Lifestyle Community? Let's visit Events together, support each other to achieve our goals and change ourself to somebody we can be proud of! Join us now!">
@endsection

@section('content')
    <div class="h1_bg">
        <h1>COMMUNITY</h1>
    </div>
    <!-- Community description -->
    <div class="community_bg">
        <div class="community_section">
            <div>
                <p class="superfood_text">
                    Join our community and get one step closer to your better self.
                    Connect, chat, share, motivate each other and reach your goals together!
                </p>
                <p>
                    Find people with the same goals, diet, body shape and motivation as you!
                    Get your workout buddy today, start now!
                </p>
            </div>
        </div>
    </div>

    <!-- User interactions -->
    <div class="title_bg community_h2">
        <h2>Stay motivated</h2>
    </div>
    <div class="community_section_2">
        <div class="community_text_section">
            <h3>Our Stories</h3>
            <p>
                Stop! No need to search for motivation any longer! It's right here in front of you! Choose the story
                you'd like to
                read or share your own with the community.
            </p>
            <p>
                Either it's about your daily workout, sports, workout buddy
                moments, your personal body change or other stuff you'd like to share.
                Do it! Read it! Be part of it!
            </p>
        </div>

        <!-- Read Before/After-Stories of all Community Members -->

        <div class="community_box_section">
            <div class="community_box_beforeafter">
                <a href="@if( (auth()->check())){{url('beforeafteroverview/beforeafterstories')}}@else{{url('register')}}@endif">
                    <svg viewbox="0 -1.5 50 37" width="298" height="205.5">
                        <defs>
                            <mask class="mask" id="beforeafter_mask" x="0" y="0">
                                <rect x="0.5" y="0.5" width="49" height="49" fill="#fff"/>
                                <text x="7" text-anchor="middle" y="10" dy="0">B</text>
                                <text x="13" text-anchor="middle" y="10" dy="0">E</text>
                                <text x="19" text-anchor="middle" y="10" dy="0">F</text>
                                <text x="25" text-anchor="middle" y="10" dy="0">O</text>
                                <text x="32" text-anchor="middle" y="10" dy="0">R</text>
                                <text x="38" text-anchor="middle" y="10" dy="0">E</text>
                                <text x="44" text-anchor="middle" y="10" dy="0">/</text>

                                <text x="10" text-anchor="middle" y="25" dy="0">A</text>
                                <text x="16" text-anchor="middle" y="25" dy="0">F</text>
                                <text x="22" text-anchor="middle" y="25" dy="0">T</text>
                                <text x="29" text-anchor="middle" y="25" dy="0">E</text>
                                <text x="36" text-anchor="middle" y="25" dy="0">R</text>

                                <text x="5" text-anchor="middle" y="34" dy="0">S</text>
                                <text x="12" text-anchor="middle" y="34" dy="0">T</text>
                                <text x="19" text-anchor="middle" y="34" dy="0">O</text>
                                <text x="26" text-anchor="middle" y="34" dy="0">R</text>
                                <text x="31" text-anchor="middle" y="34" dy="0">I</text>
                                <text x="36" text-anchor="middle" y="34" dy="0">E</text>
                                <text x="43" text-anchor="middle" y="34" dy="0">S</text>
                            </mask>
                        </defs>
                        <rect x="0.5" y="0.5" width="220" height="205" mask="url(#beforeafter_mask)" fill-opacity="1"
                              fill="rgba(000, 000, 000, 0.9)"/>
                    </svg>
                </a>
            </div>

            <!-- Find people with exactly the same settings as oneself -->

            <div class="community_box_workoutbuddies">
                <a href="@if( (auth()->check())){{url('buddyoverview/')}}@else{{url('register')}}@endif">
                    <svg viewbox="0 -1.5 50 37" width="298" height="205.5">
                        <defs>
                            <mask class="mask" id="buddy_mask" x="0" y="0">
                                <rect x="0.5" y="0.5" width="49" height="49" fill="#fff"/>
                                <text x="6" text-anchor="middle" y="25" dy="0">W</text>
                                <text x="14" text-anchor="middle" y="25" dy="0">O</text>
                                <text x="21" text-anchor="middle" y="25" dy="0">R</text>
                                <text x="27" text-anchor="middle" y="25" dy="0">K</text>
                                <text x="33" text-anchor="middle" y="25" dy="0">O</text>
                                <text x="40" text-anchor="middle" y="25" dy="0">U</text>
                                <text x="46" text-anchor="middle" y="25" dy="0">T</text>

                                <text x="5" text-anchor="middle" y="34" dy="0">B</text>
                                <text x="12" text-anchor="middle" y="34" dy="0">U</text>
                                <text x="19" text-anchor="middle" y="34" dy="0">D</text>
                                <text x="26" text-anchor="middle" y="34" dy="0">D</text>
                                <text x="31" text-anchor="middle" y="34" dy="0">I</text>
                                <text x="36" text-anchor="middle" y="34" dy="0">E</text>
                                <text x="43" text-anchor="middle" y="34" dy="0">S</text>
                            </mask>
                        </defs>
                        <rect x="0.5" y="0.5" width="220" height="205" mask="url(#buddy_mask)" fill-opacity="1"
                              fill="rgba(000, 000, 000, 0.9)"/>
                    </svg>
                </a>
            </div>

            <!-- Read (Workout) Diaries of all Community Members -->

            <div class="community_box_diaries">
                <a href="@if( (auth()->check())){{url('usertalkoverview/diaries/')}}@else{{url('register')}}@endif">
                    <svg viewbox="0 -1.5 50 37" width="298" height="205.5">
                        <defs>
                            <mask id="diary_mask" x="0" y="0">
                                <rect x="0.5" y="0.5" width="49" height="49" fill="#fff"/>
                                <text x="6" text-anchor="middle" y="25" dy="0">W</text>
                                <text x="14" text-anchor="middle" y="25" dy="0">O</text>
                                <text x="21" text-anchor="middle" y="25" dy="0">R</text>
                                <text x="27" text-anchor="middle" y="25" dy="0">K</text>
                                <text x="33" text-anchor="middle" y="25" dy="0">O</text>
                                <text x="40" text-anchor="middle" y="25" dy="0">U</text>
                                <text x="46" text-anchor="middle" y="25" dy="0">T</text>

                                <text x="8" text-anchor="middle" y="34" dy="0">D</text>
                                <text x="13" text-anchor="middle" y="34" dy="0">I</text>
                                <text x="18" text-anchor="middle" y="34" dy="0">A</text>
                                <text x="25" text-anchor="middle" y="34" dy="0">R</text>
                                <text x="30" text-anchor="middle" y="34" dy="0">I</text>
                                <text x="35" text-anchor="middle" y="34" dy="0">E</text>
                                <text x="42" text-anchor="middle" y="34" dy="0">S</text>
                            </mask>
                        </defs>
                        <rect x="0.5" y="0.5" width="220" height="205" mask="url(#diary_mask)" fill-opacity="1"
                              fill="rgba(000, 000, 000, 0.9)"/>
                    </svg>
                </a>
            </div>

            <!-- Visit the Event Site -->

            <div class="community_box_meetups">
                <a href="@if( (auth()->check())){{url('meetups')}}@else{{url('register')}}@endif">
                    <svg viewbox="0 -1.5 50 37" width="298" height="205.5">
                        <defs>
                            <mask id="meetups_mask" x="0" y="0">
                                <rect x="0.5" y="0.5" width="49" height="49" fill="#fff"/>
                                <text x="6" text-anchor="middle" y="22" dy="0">M</text>
                                <text x="14" text-anchor="middle" y="22" dy="0">E</text>
                                <text x="21" text-anchor="middle" y="22" dy="0">E</text>
                                <text x="27" id="ltrV" text-anchor="middle" y="22" dy="0">T</text>
                                <text x="33" text-anchor="middle" y="22" dy="0">U</text>
                                <text x="40" text-anchor="middle" y="22" dy="0">P</text>
                                <text x="46" text-anchor="middle" y="22" dy="0">S</text>
                            </mask>
                        </defs>
                        <rect x="0.5" y="0.5" width="220" height="205" mask="url(#meetups_mask)" fill-opacity="1"
                              fill="rgba(255, 255, 255, 0.9)"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>


    <!-- Filter Community Members by... -->

    <div class="title_bg community_h2">
        <h2>Find new Workout Buddies</h2>
    </div>
    <div class="buddy_bg">
        <div class="buddy_section">

            <!-- ...diets! -->
            <div class="buddy_section_filter">
                <h3>Diets</h3>
                <div>
                    <a href="@if( (auth()->check())){{url('useroverview/UserDiet/2')}}@else{{url('register')}}@endif">
                        <span>PESCETARIAN</span>
                        <img src="{{asset('../images/community/pescetarian.png')}}" alt="Pescetarian" width="130" height="130">
                    </a>
                    <a href="@if( (auth()->check())){{url('useroverview/UserDiet/4')}}@else{{url('register')}}@endif">
                        <span>VEGETARIAN</span>
                        <img src="{{asset('../images/community/vegetarian.png')}}" alt="Vegetarian" width="130" height="130">
                    </a>
                    <a href="@if( (auth()->check())){{url('useroverview/UserDiet/3')}}@else{{url('register')}}@endif">
                        <span>VEGAN</span>
                        <img src="{{asset('../images/community/vegan.png')}}" alt="Vegan" width="130" height="130">
                    </a>
                    <a href="@if( (auth()->check())){{url('useroverview/UserDiet/1')}}@else{{url('register')}}@endif">
                        <span>NO DIET</span>
                        <img src="{{asset('../images/community/nospecialdiet.png')}}" alt="No diet" width="130" height="130">
                    </a>
                </div>
            </div>

            <!-- ...goals! -->
            <div class="buddy_section_filter">
                <h3>Goals</h3>
                <div>
                    <a href="@if( (auth()->check())){{url('useroverview/UserGoal/1')}}@else{{url('register')}}@endif">
                        <span>LOSE WEIGHT</span>
                        <img src="{{asset('../images/community/loseweight.png')}}" alt="lose weight" width="120" height="120">
                    </a>
                    <a href="@if( (auth()->check())){{url('useroverview/UserGoal/2')}}@else{{url('register')}}@endif">
                        <span>BECOME FIT</span>
                        <img src="{{asset('../images/community/becomefit.png')}}" alt="become fit" width="120" height="120">
                    </a>
                    <a href="@if( (auth()->check())){{url('useroverview/UserGoal/3')}}@else{{url('register')}}@endif">
                        <span>BUILD UP MUSCLES</span>
                        <img src="{{asset('../images/community/buildmuscles.png')}}" alt="build up muscles" width="120" height="120">
                    </a>
                    <a href="@if( (auth()->check())){{url('useroverview/UserGoal/4')}}@else{{url('register')}}@endif">
                        <span>STAY HEALTHY</span>
                        <img src="{{asset('../images/community/stayhealthy.png')}}" alt="stay healthy" width="120" height="120">
                    </a>
                </div>
            </div>

            <!-- ...body shapes! -->
            <div class="buddy_section_filter">
                <h3>Body Shapes</h3>
                <div>
                    <a href="@if( (auth()->check())){{url('useroverview/UserShape/3')}}@else{{url('register')}}@endif">
                        <span>HOUR GLASS</span>
                        <img src="{{asset('../images/community/hourglass_shape.png')}}" alt="hour glass" width="110" height="110">
                    </a>
                    <a href="@if( (auth()->check())){{url('useroverview/UserShape/2')}}@else{{url('register')}}@endif">
                        <span>APPLE</span>
                        <img src="{{asset('../images/community/apple_shape.png')}}" alt="apple" width="110" height="110">
                    </a>
                    <a href="@if( (auth()->check())){{url('useroverview/UserShape/4')}}@else{{url('register')}}@endif">
                        <span>STRAIGHT</span>
                        <img src="{{asset('../images/community/stick_shape.png')}}" alt="stick" width="110" height="110">
                    </a>
                    <a href="@if( (auth()->check())){{url('useroverview/UserShape/1')}}@else{{url('register')}}@endif">
                        <span>PEAR</span>
                        <img src="{{asset('../images/community/pear_shape.png')}}" alt="pear" width="110" height="110">
                    </a>
                </div>
            </div>

            <!-- See all Members -->
            <a href="@if( (auth()->check())){{url('alluseroverview/')}}@else{{url('register')}}@endif"
               class="white_button community_button">
                <span>Show all Users!</span>
            </a>
        </div>
    </div>

@endsection