<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shape of you!</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
<div class="flex-center position-ref full-height">

    <div class="top-middle links">


        <a href="{{ url('superfood') }}">Super Food</a>
        <a href="{{ url('workout') }}">Workout</a>
        <a href="{{ url('community') }}">Community</a>
        <a href="{{ url('') }}">
            <img class="logo_header" src="{{ asset('images/headerfooter/Logo.png') }}" alt="logo">
        </a>
        <a href="{{ url ('meetups') }}">Meetups</a>

        <a href="{{ url('profile') }}">Login</a>
        <a href="{{ url('register') }}">Start now</a>

    </div>


    <div class="content">
        <!-- <div class="heroimg">

         </div> -->

        <h2> SHAPE OF YOU</h2>

        <div class="home_section goal_bg">
            <div>
                <h3>Choose your goal!</h3>
                <div class="home_section_goals">
                    <img alt="lose weight" src="{{ asset('images/lose_weight_3.png') }}" width="120" height="110">
                    <img alt="become fit" src="{{ asset('images/become_fit_2.png') }}" width="120" height="110">
                    <img alt="lose weight" src="{{ asset('images/build_muscles_2.png') }}" width="120" height="110">
                    <img alt="become fit" src="{{ asset('images/healthy_lifestyle_2.png') }}" width="120" height="110">
                </div>
                <div class="goal_info">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam architecto dolor error
                        incidunt ipsum itaque, iure, iusto non obcaecati officiis, quas quo repudiandae vel velit? Nobis
                        obcaecati tempore velit!
                    </p>

                </div>
            </div>
        </div>


    </div>


</div>

<div class="home_section home_section_community">
    <div>
        <h3>Community</h3>
        <p>
            Are you ready to become part of Austria's biggest lifestyle event? Choose your goal and achieve it. Alone or
            togehter - you decide. Become part of the community and get tips, tricks, the newest workouts and motivation
            from people all around Austria! Join the big events and have real talks to our fitness professionals, who
            are always there to help you out - online and in person!
            What do you think? We think, you should:
        </p>
        <a href="#">START NOW</a>
    </div>
</div>

<div class="home_section shape_bg">
    <div>
        <h3>Choose Your Body Shape</h3>
        <div class="home_body_shape_img">
            <img alt="hour glass shape" src="{{ asset('images/hourglass_shape_1.png') }}" width="120" height="120">
            <img alt="apple shape" src="{{ asset('images/apple_shape_1.png') }}" width="120" height="120">
            <img alt="pear shape" src="{{ asset('images/pear_shape_1.png') }}" width="120" height="120">
            <img alt="stick_shape" src="{{ asset('images/stick_shape_1.png') }}" width="120" height="120">
        </div>
    </div>
</div>
<div>
    <div class="home_section home_section_food">
        <div>
            <h3>Super Food</h3>
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
            <a href="#">START NOW</a>
        </div>
    </div>
</div>
<footer>
    <div class="footer_content footer_content_1">
        <div class="footer_options">
            <a href="#">About us</a>
            <a href="#">Jobs</a>
            <a href="#">Contact</a>
        </div>

        <div class="footer_options">
            <a href="#">Become a Member</a>
            <a href="#">Terms and Conditions</a>
            <a href="#">FAQ</a>
        </div>
    </div>
    <div class="footer_content footer_content_2">
        <div class="footer_follow">
            <span>Follow us on</span>
        </div>
        <div class="footer_follow footer_follow_images">
            <a href="#"><img alt="share instagram" src="{{ asset('images/headerfooter/share_instagram.png') }}"></a>
            <a href="#"><img alt="share instagram" src="{{ asset('images/headerfooter/share_facebook.png') }}"></a>
        </div>
        <div class="follow_footer">
                <span>
                    © by J.L. Jirges
                </span>
        </div>
    </div>
</footer>
</body>
</html>
