<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

</head>
<body>

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


    <h2>SPORTS AND WORKOUT</h2>
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

        <div class="workout_box_section">
            <div class="box_indoor">
                <a class="workout_box_link" href="#">INDOOR</a>
            </div>
            <div class="box_outdoor">
                <a class="box_link" href="#">OUTDOOR</a>
            </div>
            <div class="box_stretch">
                <a class="workout_box_link" href="#">STRETCHING</a>
            </div>
            <div class="box_tenminutes">
                <a class="box_link" href="#">10 MINUTES WORKOUT</a>
            </div>
            <div class="box_partnerworkout">
                <a class="workout_box_link" href="#">PARTNER WORKOUT</a>
            </div>
            <div class="box_yoga">
                <a class="box_link" href="#">YOGA</a>
            </div>
            <div class="box_workoutwithequipment">
                <a class="workout_box_link" href="#">POWER WORKOUT WITH EQUIPMENT</a>
            </div>
            <div class="box_withoutequipment">
                <a class="box_link" href="#">WITHOUT EQUIPMENT</a>
            </div>
        </div>
    </div>
    <div class="workout_blog_bg">

       <div class="title_bg"><h3>WORKOUT AND TRAINING BLOGS</h3>
       </div>
        <div class="workout_box_section">
            <div class="box_whatequipment">
                <a class="workout_box_link" href="#">WHAT EQUIPMENT</a>
            </div>
            <div class="box_thepowerofbreaks">
                <a class="workout_box_link" href="#">THE POWER OF BREAKS</a>
            </div>
            <div class="box_doyouevenbmi">
                <a class="workout_box_link" href="#">DO YOU EVEN BMI</a>
            </div>
            <div class="box_beachbodychallenge">
                <a class="workout_box_link" href="#">BEACH BODY CHALLENGE</a>
            </div>
            <div class="box_listentoyourself">
                <a class="workout_box_link" href="#">LISTEN TO YOURSELF</a>
            </div>
            <div class="box_theperfectass">
                <a class="workout_box_link" href="#">THE PERFECT ASS</a>
            </div>
            <div class="box_bodyshapes">
                <a class="workout_box_link" href="#">BODYSHAPES</a>
            </div>
            <div class="box_theabsabc">
                <a class="workout_box_link" href="#">THE ABS - ABC</a>
            </div>
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