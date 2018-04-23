<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shape of you! FAQ</title>

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


    <div class="faq_content">
        <h2>FREQUENTLY ASKED QUESTIONS</h2>


        <ul class="faq">
            <li>
                <h3>Do you have any questions? Perhaps it's not the first time somebody asked this:</h3>
            </li>
            <li>
                <h4>Do I have to pay for my membership?</h4>
                <p>
                    No, you do not have to pay do be a member of the 'SHAPE OF YOU'-Community and enjoy all of our
                    services.
                </p>
            </li>
            <li>
                <h4>What is 'SHAPE OF YOU'?</h4>
                <p>
                    'SHAPE OF YOU' is a platform for people who would like to live a healthy or healthier lifestyle, to
                    lose weight or to build muscles and stay fit.
                </p>
            </li>
            <li>
                <h4>Can I get the money back of an event's ticket in case I can't attend?</h4>
                <p>
                    We are sorry to tell you, that it's not possible to give a ticket back or to get a refund. What is
                    possible is to give the ticket to another person, even if this person is no (active) member of
                    'SHAPE OF YOU'.
                </p>
            </li>
            <li>
                <h4>What if I want to delete my account?</h4>
                <p>
                    We will cry, our hearts will break, but we will accept your desicion without making a szene. You are
                    free to go same as you are free to come back whenever you feel like it!
                </p>
            </li>
        </ul>
    </div>
</div>
<footer>
    <div class="footer_content footer_content_1">
        <div class="footer_options">
            <a href="#">About us</a>
            <a href="{{ url('jobs') }}">Jobs</a>
            <a href="{{ url('contact') }}">Contact</a>
        </div>

        <div class="footer_options">
            <a href="{{ url('register') }}">Become a Member</a>
            <a href="{{ url('termsandconditions') }}">Terms and Conditions</a>
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