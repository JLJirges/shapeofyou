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
    <link rel="stylesheet" href="css/profile.css">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/profile.js') }}"></script>


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
    <h2>WELCOME 'USERNAME'</h2>

    <div class="profile_section">
        <div class="profile_navigation">

            <div class="profile_navigation_sections profile_navigation__section_box">
                <p>My Profile</p>
            </div>
            <div class="profile_navigation_sections profile_navigation__section_box">
                <p>BMI Calculator</p>
            </div>
            <div class="profile_navigation_sections profile_navigation__section_box">
                <p>My Blogs</p>
            </div>
            <div class="profile_navigation_sections profile_navigation__section_box">
                <p>My Workout</p>
            </div>
            <div class="profile_navigation_sections profile_navigation__section_box">
                <p>Workout Buddies</p>
            </div>
            <div class="profile_navigation_sections profile_navigation__section_box">
                <p>Help & Seetings</p>
            </div>
            <div class="profile_navigation_sections profile_navigation__section_box">
                <p>Logout</p>
            </div>
        </div>

        <div class="profile_info_section">
            <div class="profile_info_section_images">
                <img alt="profile picture" src="{{ ('images/aboutus/Founder.jpg') }}" class="profile_picture">
                <div class="profile_personal_section">
                    <p>Diet</p>
                    <img alt="diet" src="{{('images/community/nospecialdiet.png')}}">
                </div>
                <div class="profile_personal_section">
                    <p>Goal</p>
                    <img alt="diet" src="{{('images/community/stayhealthy.png')}}">
                </div>
                <div class="profile_personal_section">
                    <p>Body Shape</p>
                    <img alt="diet" src="{{ asset('images/hourglass_shape_1.png') }}">
                </div>
            </div>

            <div class="profile_section_personal">
                <div>
                    <p>MOTIVATION QUOTE</p>
                    <p class="profile_section_personal_motivation_quote">'If you can dream it, you can do it!'</p>
                </div>

                <div class="profile_info_section_personal_details">
                    <div>
                        <p>NAME:</p>
                        <p>AGE:</p>
                        <p>COUNTRY:</p>
                    </div>
                    <div>
                        <p>Jeanne Jirges</p>
                        <p>24</p>
                        <p>Austria</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="profile_section profile_section_2">
        <div class="profile_navigation_two">

            <div class="profile_navigation_sections profile_navigation__section_box">
                <p>My Diary</p>
            </div>
            <div class="profile_navigation_sections profile_navigation__section_box">
                <p>My Before/After-Story</p>
            </div>
            <div class="profile_navigation_sections profile_navigation__section_box">
                <p>My Motivation Letters</p>
            </div>
        </div>

        <div class="profile_diary_section">

            <h3>Write a new Diary Entry</h3>
            <form class="diary_form" method="post" enctype="multipart/form-data">
                <label>Write a title</label>
                <input type="text" row="2"><br>
                <label>Write your entry</label><br>
                <textarea name="comment" form="usrform">Time to write a diary...</textarea>
                <label>Upload Image</label><br>
                <input type="file" name="DiaryfileToUpload" id="DiaryfileToUpload">
                <input type="submit" value="Post Diary Entry" name="submit">
            </form>


        </div>
    </div>

    <div class="profile_diary_entry_section">

        <div class="old_diary_entry">
            <div class="old_diary_entry_setting">
                <span>Date</span>
                <h4>Diary Entry Title</h4>
                <span class="delete"></span>
            </div>

            <div class="profile_old_diary_entry_box">

                <div>
                    <img src="{{('../images/workout/workout_bg.png')}}" alt="diray image">

                    <div class="old_diary_entry_text">

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
                <h5>Read Comments</h5>
                <h5>Write a Comment</h5>
                <h5>Hide Comments</h5>
            </div>
            <div class="profile_diary_content">
                <div>
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium culpa dignissimos earum
                            ex
                            facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae
                            ratione
                            recusandae saepe tempora.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Accusantium
                            culpa
                            dignissimos earum ex
                            facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae
                            ratione
                            recusandae saepe tempora.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Accusantium
                            culpa
                            dignissimos earum ex
                            facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae
                            ratione
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium culpa dignissimos earum
                            ex
                            facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae
                            ratione
                            recusandae saepe tempora.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Accusantium
                            culpa
                            dignissimos earum ex
                            facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae
                            ratione
                            recusandae saepe tempora.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Accusantium
                            culpa
                            dignissimos earum ex
                            facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae
                            ratione
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium culpa dignissimos earum
                            ex
                            facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae
                            ratione
                            recusandae saepe tempora.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Accusantium
                            culpa
                            dignissimos earum ex
                            facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae
                            ratione
                            recusandae saepe tempora.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Accusantium
                            culpa
                            dignissimos earum ex
                            facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae
                            ratione
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium culpa dignissimos earum
                            ex
                            facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae
                            ratione
                            recusandae saepe tempora.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Accusantium
                            culpa
                            dignissimos earum ex
                            facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae
                            ratione
                            recusandae saepe tempora.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Accusantium
                            culpa
                            dignissimos earum ex
                            facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae
                            ratione
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium culpa dignissimos earum
                            ex
                            facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae
                            ratione
                            recusandae saepe tempora.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Accusantium
                            culpa
                            dignissimos earum ex
                            facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae
                            ratione
                            recusandae saepe tempora.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Accusantium
                            culpa
                            dignissimos earum ex
                            facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae
                            ratione
                            recusandae saepe tempora.</p>
                    </div>
                </div>
            </div>
            <div>
                blabla
            </div>
        </div>
    </div>
    <div class="old_diary_entries">
        <div class="profile_diary_section_loadolddiaries">
            <div class="profile_diary_section_loadolddiaries_details">
                <span>Date</span>
                <h4>Diary Entry Title</h4>
                <span>Read</span>
                <span class="delete"></span>

            </div>
        </div>
        <div class="profile_diary_section_loadolddiaries">
            <div class="profile_diary_section_loadolddiaries_details">
                <span>Date</span>
                <h4>Diary Entry Title</h4>
                <span>Read</span>
                <span class="delete"></span>

            </div>
        </div>
        <div class="profile_diary_section_loadolddiaries">
            <div class="profile_diary_section_loadolddiaries_details">
                <span>Date</span>
                <h4>Diary Entry Title</h4>
                <span>Read</span>
                <span class="delete"></span>

            </div>
        </div>
        <div class="profile_diary_section_loadolddiaries">
            <div class="profile_diary_section_loadolddiaries_details">
                <span>Date</span>
                <h4>Diary Entry Title</h4>
                <span>Read</span>
                <span class="delete"></span>

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