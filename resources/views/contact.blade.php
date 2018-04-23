<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shape of you! - Contact</title>

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


    <div class="contact_content">

        <h2> SHAPE OF YOU</h2>
        <div class="contact_info">

                <h3>Contact us!</h3>

                <div>
                    <h4>Email us:</h4>
                    <span>contact@shapeofyou.com</span>
                </div>
            <div>
                <h4>Write us:</h4>
                <span>Grinzingerstraße 147/3/16, 1190 Vienna</span>
            </div>
            <div>
                <h4>Call us:</h4>
                <span>+43 699 11 33 94 73</span>
            </div>


            </div>
        </div>
    </div>


</div>
<footer>
    <div class="footer_content footer_content_1">
        <div class="footer_options">
            <a href="#">About us</a>
            <a href="#">Jobs</a>
            <a href="{{ url('contact') }}">Contact</a>
        </div>

        <div class="footer_options">
            <a href="{{ url('register') }}">Become a Member</a>
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