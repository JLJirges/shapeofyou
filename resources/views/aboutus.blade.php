<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shape of you! About us</title>

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
        <h2>ABOUT US</h2>

        <div class="aboutus_content">
            <p>Shape of you is a platform that allows people to interact with other community members, to support them
                and
                to live a healthy life.
                We have nutrition guides, workouts, blogs and fitness professionals and a lot of motivation for you!
            </p>
            <div class="aboutusteam">
                <div class="aboutusteam_profile">

                    <img alt="founder image" src="{{ asset('images\aboutus\Founder.jpg') }}">
                    <div>
                        <p>'Hi, my name is Janet L. Jirges! I am 24 years old and the Founder & Designer + Programmer of
                            SHAPE OF YOU.
                            If you write us, call us, find us - I'll be the one you'll most likely to talk to!'</p>
                    </div>

                </div>
                <div class="aboutusteam_profile">


                    <div>
                        <p>'Hello Peeps! My name is Mira. I am one of your Bloggers and I love to give you some tips
                            and tricks for your body and to make the best out of your unique way of being!'</p>
                    </div>
                    <img alt="founder image" src="{{ asset('images\aboutus\Mira.jpg') }}">
                </div>
                <div class="aboutusteam_profile">


                    <img alt="founder image" src="{{ asset('images\aboutus\Lea.png') }}">

                    <div>
                        <p>'Listen everybody! Lea is the name, Blogger by heart and I'm here for you and your nutrition
                            troubles! Your trouble is my trouble. So do not be afraid of trouble makers, because it's
                            like
                            with carbs - there are bad and good types!'</p>
                    </div>

                </div>
                <div class="aboutusteam_profile">


                    <div>
                        <p>'Heyhey, I am Corinna! Nutrition Guide and Blogger Nr. 3 about your workout and muscle
                            buildings! You'll see me
                            at the events, running around and talking to everybody. Feel free to say hello, I'll be ver
                            happy to have a nice conversation and to help you out with whatever you need!'</p>
                    </div>

                    <img alt="founder image" src="{{ asset('images\aboutus\Corinna.png') }}">

                </div>
                <div class="aboutusteam_profile">


                    <img alt="founder image" src="{{ asset('images\aboutus\Joao.png') }}">

                    <div>
                        <p>'Olá, Hello and Hallo! Nice to meet you, I'm João and I'm one of your fitness guides. You
                            will
                            mostly see my comments on fitness posts and workout diaries, same as on festivals. Fell free
                            to have a nice conversation - I'm up for motivational talks!'</p>
                    </div>

                </div>

                <div class="aboutusteam_profile">


                    <div>
                        <p>'So this is it!? Are you sure you're ready to shape your body? Because once you've started, I
                            swear I won't stop pushing you until you made the best version of yourself possible! Still
                            ready to go? Follow me and SHAPE OF YOU to SHAPE YOUR BODY! By the way, call me Remus!'</p>
                    </div>

                    <img alt="founder image" src="{{ asset('images\aboutus\Remus.png') }}">

                </div>
                <div class="aboutusteam_profile">


                    <img alt="founder image" src="{{ asset('images\aboutus\Nina.png') }}">

                    <div>
                        <p>'Are you going to join some of our festivals? I hope so, because I plan thoe events for you.
                            My name is Nina and if you want to attend one of the most amazing events of your life -
                            visit one of mine, or with other words: Shape of You - Events!'</p>
                    </div>

                </div>
            </div>
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