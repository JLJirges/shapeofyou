<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <title>Shape of you! Member Overview</title>

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


    <h2>COMMUNITY MEMBER OVERVIEW</h2>

    <div class="overview_section">

        <div class="overview_filter_section">
            <div>
                <p>
                    Pescetarian
                </p>
                <p>
                    Vegetarian
                </p>
                <p>
                    Vegan
                </p>
                <p>
                    No Diet
                </p>
            </div>
            <div>
                <p>
                    Breakfast
                </p>
                <p>
                    Snack
                </p>
                <p>
                    Lunch
                </p>
                <p>
                    Dinner
                </p>
                <p>
                    Dessert
                </p>
            </div>
            <div>
                <p>
                    Show filtered recipes
                </p>
                <p>
                    Show all recipes
                </p>
            </div>
        </div>
        <div class="overview_filter_description">
            <p>Activate the filter by choosing one or more diets and occasions to get what you deserve: the healthiest,
                the most delicious, the best!</p>
        </div>
    </div>

    <div class="box_section">
        <div class="box_indoor">
            <a class="box_link" href="#">INDOOR</a>
        </div>
        <div class="box_outdoor">
            <a class="box_link" href="#">OUTDOOR</a>
        </div>
        <div class="box_stretch">
            <a class="box_link" href="#">STRETCHING</a>
        </div>
        <div class="box_tenminutes">
            <a class="box_link" href="#">10 MINUTES WORKOUT</a>
        </div>
        <div class="box_partnerworkout">
            <a class="box_link" href="#">PARTNER WORKOUT</a>
        </div>
        <div class="box_yoga">
            <a class="box_link" href="#">YOGA</a>
        </div>
        <div class="box_workoutwithequipment">
            <a class="box_link" href="#">POWER WORKOUT WITH EQUIPMENT</a>
        </div>
        <div class="box_withoutequipment">
            <a class="box_link" href="#">WITHOUT EQUIPMENT</a>
        </div>
    </div>
</div>




<footer>
    <div class="footer_content footer_content_1">
        <div class="footer_options">
            <a href="{{ url('aboutus') }}">About us</a>
            <a href="{{ url('jobs') }}">Jobs</a>
            <a href="{{ url('contact') }}">Contact</a>
        </div>

        <div class="footer_options">
            <a href="{{ url('register') }}">Become a Member</a>
            <a href="{{ url('termsandconditions') }}">Terms and Conditions</a>
            <a href="{{ url('faq') }}">FAQ</a>
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