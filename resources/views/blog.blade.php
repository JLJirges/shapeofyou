<?php
/**
 * Created by PhpStorm.
 * User: Jeanne
 * Date: 13/04/2018
 * Time: 11:45
 */
?>
        <!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <title>Shape of you!</title>

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

    <div class="blog_entry">

        <div class="blog_box">
            <h3>Blog Title</h3>
            <div>
                <img src="{{('../images/workout/workout_bg.png')}}" alt="diray image">

                <div class="blog_text">

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
                    <img src="{{('../images/workout/workout_bg.png')}}" alt="diray image">
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


    <div class="blog_abouttheauthor">
        <h4>About the author</h4>
        <div class="blog_abouttheauthor_content">

            <img alt="blogger image" src="{{ asset('images/aboutus/Mira.jpg') }}">

            <div class="blog_abouttheauthor_content_info">
                <div>
                    <h5>Name</h5>
                    <p>Tamira Karunarathna</p>
                </div>
                <div>
                    <h5>Birthday</h5>
                    <p>May 21st, 1994</p>
                </div>
                <div>
                    <h5>Origin</h5>
                    <p>Srilanka/Germany</p>
                </div>
            </div>
        </div>
        <div class="blog_abouttheauthor_content_bio">
            <h5>Biography</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium architecto ducimus, eaque enim eos
                eum fuga, harum libero nobis obcaecati suscipit, ullam vero. Assumenda dolore doloribus iste nisi quo
                veniam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium architecto ducimus, eaque enim eos
                eum fuga, harum libero nobis obcaecati suscipit, ullam vero. Assumenda dolore doloribus iste nisi quo
                veniam.</p>
        </div>
    </div>

    <div class="diary_comments">
        <div class="diary_comments_interaction">
            <h5>Read Comments</h5>
            <h5>Write a Comment</h5>
            <h5>Hide Comments</h5>
        </div>
        <div class="diary_comments_details">
            <div class="diary_comments_details_user">

                <div class="diary_comments_details_profilepicture">
                    <img src="{{asset('images/aboutus/Joao.png')}}" alt="user profile picture">
                    <span>Username</span>
                </div>
                <span>Date</span>
                <div class="diary_comments_details_edit">
                    <span class="delete"></span>
                    <span class="report"></span>
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
                    <span class="delete"></span>
                    <span class="report"></span>
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
                    <span class="delete"></span>
                    <span class="report"></span>
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
                    <span class="delete"></span>
                    <span class="report"></span>
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
                    <span class="delete"></span>
                    <span class="report"></span>
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