@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | About us</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>ABOUT US</h1>
    </div>


    <div class="aboutus_content">
        <p>Shape of you is a platform that allows people to interact with other community members, to support them
            and
            to live a healthy life.
            We have nutrition guides, workouts, blogs and fitness professionals and a lot of motivation for you!
        </p>
    </div><!--
        <div class="aboutusteam">
            <div class="aboutusteam_profile">

                <img alt="founder image" src="{{ asset('images\aboutus\Founder.jpg') }}">
                <div>
                    <p>'Hi, my name is Janet L. Jirges! I am 24 years old and the Founder & Designer + Programmer of
                        SHAPE OF YOU.
                        If you write us, call us, find us - I'll be the one you are to 90% going to talk to!'</p>
                </div>

            </div>
            <div class="aboutusteam_profile">


                <div>
                    <p>'Hello Peeps! My name is Mira. I am one of your Bloggers and I love to give you some tips
                        and tricks for your body and to make the best out of your unique way of being!'</p>
                </div>
                <img alt="blogger image" src="{{ asset('images\aboutus\Mira.jpg') }}">
            </div>
            <div class="aboutusteam_profile">


                <img alt="blogger image" src="{{ asset('images\aboutus\Lea.png') }}">

                <div>
                    <p>'Listen everybody! Lea is the name, Blogger by heart and I'm here for you and your nutrition
                        troubles! Your trouble is my trouble. So do not be afraid of trouble makers, because it's
                        like
                        with carbs - there are bad and good types!'</p>
                </div>

            </div>
            <div class="aboutusteam_profile">


                <div>
                    <p>'Heyhey, I am Corinna! Nutrition Guide and Blogger Nr. 3 about your workout and muscle
                        buildings! You'll see me
                        at the events, running around and talking to everybody. Feel free to say hello, I'll be ver
                        happy to have a nice conversation and to help you out with whatever you need!'</p>
                </div>

                <img alt="nutrition guide image" src="{{ asset('images\aboutus\Corinna.png') }}">

            </div>
            <div class="aboutusteam_profile">


                <img alt="fitness professional image" src="{{ asset('images\aboutus\Joao.png') }}">

                <div>
                    <p>'Olá, Hello and Hallo! Nice to meet you, I'm João and I'm one of your fitness guides. You
                        will
                        mostly see my comments on fitness posts and workout diaries, same as on festivals. Feel free
                        to have a nice conversation - I'm up for motivational talks!'</p>
                </div>

            </div>

            <div class="aboutusteam_profile">


                <div>
                    <p>'So this is it!? Are you sure you're ready to shape your body? Because once you've started, I
                        swear I won't stop pushing you until you made the best version of yourself possible! Still
                        ready to go? Follow me and SHAPE OF YOU to SHAPE YOUR BODY! By the way, call me Remus!'</p>
                </div>

                <img alt="fitness professional image" src="{{ asset('images\aboutus\Remus.png') }}">

            </div>
            <div class="aboutusteam_profile">


                <img alt="event manager image" src="{{ asset('images\aboutus\Nina.png') }}">

                <div>
                    <p>'Are you going to join some of our festivals? I hope so, because I plan those events for you.
                        My name is Nina and if you want to attend one of the most amazing events of your life -
                        visit one of mine, or with other words: Shape of You - Events!'</p>
                </div>

            </div>
        </div>
    </div>

-->
    @foreach($admins as $admin)
        <div class="aboutusteam_profile">
            <a href="{{url('profile/' . $admin->username)}}"
               style="background-image:url({{asset('images/uploads/' . $admin->profilepic)}});background-size:cover; background-position:center;"
               class="backend_profile_picture_overview"><span class="username_backend_overview">{{$admin->username}}
                </span>
            </a>
            <div>
      <p>{{$admin->AdminText}}</p>
            </div>
        </div>
    @endforeach

@endsection