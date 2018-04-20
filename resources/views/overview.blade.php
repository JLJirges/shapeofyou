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

        h2 {
            font-family: 'AR DARLING', sans-serif;
            font-size: 40pt;

            background: url("../assets/images/background_colour.png") no-repeat;

            margin-top: 0;
            margin-bottom: 0;
            padding: 110px 25px 25px 25px;

            display: flex;
            justify-content: center;
            align-self: center;
        }

        h3 {
            margin-top: 0;
            font-family: "AR DARLING", sans-serif;

            font-size: 24pt;
            background: url("../assets/images/background_colour.png") no-repeat;

            display: flex;
            justify-content: center;
            align-items: center;

            width: 100%;
            height: 100px;
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

        .content {
            text-align: center;
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



        .overview_section {
            width: 100%;
            height: auto;
            display: flex;
            flex-wrap: wrap;

        }

        .overview_filter_section {
            display: flex;
            justify-content: space-between;
            width: 40%;
            height: auto;
            margin-left: 10%;
            text-align: right;
        }

        .overview_filter_description {
            width: 30%;
            margin-top: 10px;
            margin-left: 5%;
            text-align: left;
            border-left: 1px grey solid;
            padding: 20px;
        }

        .overview_filter_section > div {
            display: flex;
            flex-direction: column;
            padding: 20px;
        }

        .workout_section > div {
            display: flex;
            flex-wrap: wrap;
            width: 50%;
            margin: 10px 25% 1% 25%;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .workout_section > div > p {
            text-align: center;
            font-weight: bold;
            font-size: 14pt;
            text-shadow: #0b2e13;
            width: 60%;
            padding: 0 20% 0 20%;
        }

        .box_link {
            font-family: "AR DARLING", sans-serif;
            font-size: 20pt;
            color: white;
            text-shadow: 2px 2px 4px #000000;
            width: 98%;
            padding-top: 50%;
            height: 98px;
        }

        .box_link:hover {
            background: rgba(255, 255, 255, 0.5);
            border-radius: 2px;
            color: black;;
            width: 98%;
            text-shadow: none;
            vertical-align: middle;
        }

        .box_section {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            width: 80%;
            margin: 0 10% 0 10%;
        }

        .box_section > div {
            width: 280px;
            height: 205px;
            border-radius: 2px;
            display: flex;
            justify-content: space-around;
            align-items: center;
            box-shadow: dimgrey 0 0 2px 0;
            margin: 10px 0 10px 0;
        }

        .box_indoor {
            background: url("../assets/images/workout/indoor.png") center;
            background-size: cover;
        }

        .box_outdoor {
            background: url("../assets/images/workout/outdoor.png") center;
            background-size: cover;
        }

        .box_stretch {
            background: url("../assets/images/workout/stretch.png") center;
            background-size: cover;
        }

        .box_tenminutes {
            background: url("../assets/images/workout/tenminutes.png") center;
            background-size: cover;
        }

        .box_partnerworkout {
            background: url("../assets/images/workout/partnerworkout.png") center;
            background-size: cover;
        }

        .box_yoga {
            background: url("../assets/images/workout/yoga.png") center;
            background-size: cover;
        }

        .box_workoutwithequipment {
            background: url("../assets/images/workout/workoutwithequipment.png") center;
            background-size: cover;
        }

        .box_withoutequipment {
            background: url("../assets/images/workout/withoutequipment.png") center;
            background-size: cover;
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

    <a href="http://localhost/shapeofyou/resources/views/superfood.blade.php">Super Food</a>
    <a href="http://localhost/shapeofyou/resources/views/workout.blade.php">Workout</a>
    <a href="http://localhost/shapeofyou/resources/views/community.blade.php">Community</a>
    <a href="http://localhost/shapeofyou/resources/views/welcome.blade.php">
        <img class="logo_header" src="../assets/images/headerfooter/Logo.png" alt="logo">
    </a>
    <a href="http://localhost/shapeofyou/resources/views/meetups.blade.php">Meetups</a>

    <a href="{{ route('login') }}">Login</a>
    <a href="http://localhost/shapeofyou/resources/views/register.blade.php">Start now</a>

</div>


<div class="content">


    <h2>'CONTENT' OVERVIEW</h2>

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