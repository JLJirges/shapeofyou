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
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <style>


    </style>
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


<div class="register_content">
    <form class="login_form">
        <label>Username</label>
        <input type="text" name="username" placeholder="Username">
        <label>Password</label>
        <input type="password" name="password" placeholder="Your password">

        <button>Login</button>
        <span>*Fortgot Password</span>
    </form>
    <form class="register_form" method="post" action="">
        <div class="form-group">
            <div>
                <label>First Name</label>
                <input class="form-control" type="text" name="firstname" placeholder="Write your first name...">
                <label>Last Name</label>
                <input class="form-control" type="text" name="lastname" placeholder="Write your last name...">
                <label>Email</label>
                <input class="form-control" type="email" name="email" placeholder="Your.email@example.com">
            </div>
            <div>
                <label>Username</label>
                <input type="text" name="username" placeholder="Choose a Username">
                <label>Password</label>
                <input type="password" name="password" placeholder="Choose a Password">
                <label>Re-enter Password</label>
                <input type="password" name="password" placeholder="Re-enter Password">
            </div>
        </div>
        <div>
            <input type="checkbox" name="agb">
            <label>I've read and agree to the AGB</label>
        </div>
        <button>Register</button>
    </form>

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
</html>