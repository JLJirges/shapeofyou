<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <title>Shape of you! Workout Details</title>

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





<h2>WORKOUT DETAILS</h2>
<div class="workout_entry">
    <div class="workout_entry_setting">
        <div class="workout_details_profilepicture">
            <img src="{{asset('images/aboutus/Joao.png')}}" alt="user profile picture">
            <span>Username</span>
        </div>
        <h3>Workout Title</h3>
        <span class="addworkout"><img alt="add workout" src="{{asset('images/addworkout_icon.png')}}"></span>
    </div>

    <div class="workout_entry_box">

        <div>
            <img src="{{('../images/workout/workout_bg.png')}}" alt="diray image">

            <div class="workout_entry_text">

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda, beatae blanditiis
                    consectetur culpa ducimus est exercitationem hic, impedit magnam nesciunt obcaecati placeat
                    quae quidem, repellat repudiandae sapiente tenetur veritatis?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda, beatae blanditiis
                    consectetur culpa ducimus est exercitationem hic, impedit magnam nesciunt obcaecati placeat
                    quae quidem, repellat repudiandae sapiente tenetur veritatis?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda, beatae blanditiis
                    consectetur culpa ducimus est exercitationem hic, impedit magnam nesciunt obcaecati placeat
                    quae quidem, repellat repudiandae sapiente tenetur veritatis?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda, beatae blanditiis
                    consectetur culpa ducimus est exercitationem hic, impedit magnam nesciunt obcaecati placeat
                    quae quidem, repellat repudiandae sapiente tenetur veritatis?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda, beatae blanditiis
                    consectetur culpa ducimus est exercitationem hic, impedit magnam nesciunt obcaecati placeat
                    quae quidem, repellat repudiandae sapiente tenetur veritatis?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda, beatae blanditiis
                    consectetur culpa ducimus est exercitationem hic, impedit magnam nesciunt obcaecati placeat
                    quae quidem, repellat repudiandae sapiente tenetur veritatis?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda, beatae blanditiis
                    consectetur culpa ducimus est exercitationem hic, impedit magnam nesciunt obcaecati placeat
                    quae quidem, repellat repudiandae sapiente tenetur veritatis?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda, beatae blanditiis
                    consectetur culpa ducimus est exercitationem hic, impedit magnam nesciunt obcaecati placeat
                    quae quidem, repellat repudiandae sapiente tenetur veritatis?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda, beatae blanditiis
                    consectetur culpa ducimus est exercitationem hic, impedit magnam nesciunt obcaecati placeat
                    quae quidem, repellat repudiandae sapiente tenetur veritatis?</p>
            </div>
        </div>
    </div>

</div>
<div class="diary_comments">
    <div class="diary_comments_interaction">
        <h4>Read Comments</h4>
        <h4>Write a Comment</h4>
        <h4>Hide Comments</h4>
    </div>
    <div class="diary_comments_details">
        <div class="diary_comments_details_user">

            <div class="diary_comments_details_profilepicture">
                <img src="{{asset('images/aboutus/Joao.png')}}" alt="user profile picture">
                <span>Username</span>
            </div>
            <span>Date</span>
            <div class="diary_comments_details_edit">
                <span class="delete">delete<img alt="delete" src="{{asset('images/trash_icon.png')}}"></span>
                <span class="report">report<img alt="report" src="{{asset('images/report_icon.png')}}"></span>
            </div>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium culpa dignissimos earum ex
            facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae ratione
            recusandae saepe tempora.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium culpa
            dignissimos earum ex
            facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae ratione
            recusandae saepe tempora.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium culpa
            dignissimos earum ex
            facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae ratione
            recusandae saepe tempora.</p>
    </div>
    <div class="diary_comments_details">
        <div class="diary_comments_details_user">

            <div class="diary_comments_details_profilepicture">
                <img src="{{asset('images/aboutus/Remus.png')}}" alt="user profile picture">
                <span>Username</span>
            </div>
            <span>Date</span>
            <div class="diary_comments_details_edit">
                <span class="delete">delete<img alt="delete" src="{{asset('images/trash_icon.png')}}"></span>
                <span class="report">report<img alt="report" src="{{asset('images/report_icon.png')}}"></span>
            </div>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium culpa dignissimos earum ex
            facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae ratione
            recusandae saepe tempora.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium culpa
            dignissimos earum ex
            facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae ratione
            recusandae saepe tempora.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium culpa
            dignissimos earum ex
            facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae ratione
            recusandae saepe tempora.</p>
    </div>
    <div class="diary_comments_details">
        <div class="diary_comments_details_user">

            <div class="diary_comments_details_profilepicture">
                <img src="{{asset('images/aboutus/Joao.png')}}" alt="user profile picture">
                <span>Username</span>
            </div>
            <span>Date</span>
            <div class="diary_comments_details_edit">
                <span class="delete">delete<img alt="delete" src="{{asset('images/trash_icon.png')}}"></span>
                <span class="report">report<img alt="report" src="{{asset('images/report_icon.png')}}"></span>
            </div>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium culpa dignissimos earum ex
            facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae ratione
            recusandae saepe tempora.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium culpa
            dignissimos earum ex
            facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae ratione
            recusandae saepe tempora.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium culpa
            dignissimos earum ex
            facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae ratione
            recusandae saepe tempora.</p>
    </div>
    <div class="diary_comments_details">
        <div class="diary_comments_details_user">

            <div class="diary_comments_details_profilepicture">
                <img src="{{asset('images/aboutus/Corinna.png')}}" alt="user profile picture">
                <span>Username</span>
            </div>
            <span>Date</span>
            <div class="diary_comments_details_edit">
                <span class="delete">delete<img alt="delete" src="{{asset('images/trash_icon.png')}}"></span>
                <span class="report">report<img alt="report" src="{{asset('images/report_icon.png')}}"></span>
            </div>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium culpa dignissimos earum ex
            facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae ratione
            recusandae saepe tempora.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium culpa
            dignissimos earum ex
            facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae ratione
            recusandae saepe tempora.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium culpa
            dignissimos earum ex
            facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae ratione
            recusandae saepe tempora.</p>
    </div>
    <div class="diary_comments_details">
        <div class="diary_comments_details_user">

            <div class="diary_comments_details_profilepicture">
                <img src="{{asset('images/aboutus/Remus.png')}}" alt="user profile picture">
                <span>Username</span>
            </div>
            <span>Date</span>
            <div class="diary_comments_details_edit">
                <span class="delete">delete<img alt="delete" src="{{asset('images/trash_icon.png')}}"></span>
                <span class="report">report<img alt="report" src="{{asset('images/report_icon.png')}}"></span>
            </div>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium culpa dignissimos earum ex
            facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae ratione
            recusandae saepe tempora.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium culpa
            dignissimos earum ex
            facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae ratione
            recusandae saepe tempora.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium culpa
            dignissimos earum ex
            facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae ratione
            recusandae saepe tempora.</p>
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
</html>