<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


    <!-- Styles -->

    <style>
        html, body {
            background-color: #fff;
            font-family: 'Century Schoolbook', sans-serif;
            height: auto;
            margin: 0;
        }

        a {
            text-decoration: none;
        }

        .top-middle {
            position: fixed;
            right: 0;
            top: 0;
            left: 0;
            width: 100%;
            height: 50px;
            background-color: white;
            box-shadow: grey 2px 1px 5px 2px;
            display: flex;
            align-items: center;
        }

        .logo_header {
            width: 110px;
            height: 110px;
            vertical-align: middle;
            margin-top: 50px;
            background-color: white;
            border-radius: 60px;
            box-shadow: grey 0 7px 7px -4px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 55px 0 55px;
            font-size: 10px;
            font-weight: 600;
            letter-spacing: .2rem;
            text-decoration: none;
            text-transform: uppercase;
            width: 100%;
        }

        .links > a:hover {
            color: lightgrey;
        }

        /* REGISTER */

        .register_content {
            width: 100%;
            height: 100vh;
            background: url("../assets/images/register/register_bg.png") fixed;
            background-size: cover;

            display: flex;
            justify-content: center;
            align-items: center;
        }

        form {
            width: 25%;
            height: auto;
            background: rgba(255, 255, 255, 0.9);
            box-shadow: black 0 0 1px 0;
            border: 3px black solid;
            padding: 15px;
            display: flex;
            flex-direction: column;
            margin: 10px;

        }

        .register_form > div {
            display: flex;
            justify-content: space-around;
            margin: 5px;
        }

        .register_form > div > div {
            display: flex;
            flex-direction: column;

        }

        /*  FOOTER */
        footer {
            height: auto;
            width: 100%;
            background-color: white;
            border-top: 1px lightgrey solid;
        }

        .footer_content_1 {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: center;
            width: 50%;
            margin: 1% 25% 1% 25%;
        }

        .footer_options {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: 5px;
        }

        .footer_options > a {
            color: black;
            font-weight: inherit;
            padding: 3px;
            font-size: 10pt;
        }

        .footer_content_2 {
            border-top: lightgrey 1px solid;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 1%;
        }

        .footer_follow_images {
            display: flex;
        }

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
        <div>
            <div>
                <label>First Name</label>
                <input type="text" name="firstname" placeholder="Write your first name...">
                <label>Last Name</label>
                <input type="text" name="lastname" placeholder="Write your last name...">
                <label>Email</label>
                <input type="email" name="email" placeholder="Your.email@example.com">
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
            <a href="#"><img alt="share instagram" src="../assets/images/headerfooter/share_instagram.png"></a>
            <a href="#"><img alt="share instagram" src="../assets/images/headerfooter/share_facebook.png"></a>
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