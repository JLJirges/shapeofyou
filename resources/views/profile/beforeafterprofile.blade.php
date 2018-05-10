@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | Profile</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>MY STORIES</h1>
    </div>
    <div class="profile_section">
        <div class="profile_navigation">

            <div class="profile_navigation_sections profile_navigation__section_box">
                <a href="{{ url ('profile')}}">My Profile</a>
            </div>
            <div class="profile_navigation_sections profile_navigation__section_box">
                <a href="{{ url ('beforeafterprofile')}}">Before/After</a>
            </div>
            <div class="profile_navigation_sections profile_navigation__section_box">
                <a href="{{ url ('motivationprofile')}}">Motivation</a>
            </div>
            <div class="profile_navigation_sections profile_navigation__section_box">
                <a href="{{ url ('blogoverviewprofile')}}">My Blogs</a>
            </div>
            <div class="profile_navigation_sections profile_navigation__section_box">
                <a href="{{ url ('workoutprofile')}}">My Workout</a>
            </div>
            <div class="profile_navigation_sections profile_navigation__section_box">
                <a href="{{ url ('buddyprofile')}}">My Buddies</a>
            </div>
            <div class="profile_navigation_sections profile_navigation__section_box">
                <a href="{{ url ('settingsprofile')}}">Seetings</a>
            </div>
            <div class="profile_navigation_sections profile_navigation__section_box">
                <a href="{{ url ('welcome')}}">Logout</a>
            </div>
        </div>

        <div class="profile_diary_section">

            <h3>Write a new Before/After Story</h3>
            <form class="diary_form" method="post" enctype="multipart/form-data">
                <label>Write a title</label>
                <input type="text" name="title" placeholder="I am the Title"><br>
                <label>Write your entry</label>
                <input type="text" name="diarytext" placeholder="Time to tell a story...">
                <label>Upload Image</label><br>
                <input type="file" name="DiaryfileToUpload" id="DiaryfileToUpload">
                <button type="submit" value="Post Story" name="poststory" class="profile_button">Post Story</button>
            </form>


        </div>
    </div>



    <div class="blog_entry">

        <div class="blog_box">
            <div class="old_diary_entry_setting">
                <span>Date</span>
                <h4>Before/After Title</h4>
                <span class="delete"></span>
            </div>
            <div>
                <img src="{{('../images/workout/workout_bg.png')}}" alt="blog hero image">

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
                    <img src="{{('../images/workout/workout_bg.png')}}" alt="blog hero image">
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

        <div class="comments_section">
            <div class="comments_section_interaction">
                <h5>Read Comments</h5>
                <h5>Write a Comment</h5>
                <h5>Hide Comments</h5>
            </div>
            <div class="profile_diary_content">
                <div>
                    <div class="comments_details">
                        <div class="comments_details_user">

                            <div class="comments_details_profilepicture">
                                <img src="{{asset('images/aboutus/Joao.png')}}" alt="user profile picture">
                                <span>Username</span>
                            </div>
                            <span>Date</span>
                            <div class="comments_details_edit">
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
                    <div class="comments_details">
                        <div class="comments_details_user">

                            <div class="comments_details_profilepicture">
                                <img src="{{asset('images/aboutus/Remus.png')}}" alt="user profile picture">
                                <span>Username</span>
                            </div>
                            <span>Date</span>
                            <div class="comments_details_edit">
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
                    <div class="comments_details">
                        <div class="comments_details_user">

                            <div class="comments_details_profilepicture">
                                <img src="{{asset('images/aboutus/Joao.png')}}" alt="user profile picture">
                                <span>Username</span>
                            </div>
                            <span>Date</span>
                            <div class="comments_details_edit">
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
                    <div class="comments_details">
                        <div class="comments_details_user">

                            <div class="comments_details_profilepicture">
                                <img src="{{asset('images/aboutus/Corinna.png')}}" alt="user profile picture">
                                <span>Username</span>
                            </div>
                            <span>Date</span>
                            <div class="comments_details_edit">
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
                    <div class="comments_details">
                        <div class="comments_details_user">

                            <div class="comments_details_profilepicture">
                                <img src="{{asset('images/aboutus/Remus.png')}}" alt="user profile picture">
                                <span>Username</span>
                            </div>
                            <span>Date</span>
                            <div class="comments_details_edit">
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
        </div>

    <div class="old_diary_entries">
        <div class="profile_diary_section_loadolddiaries">
            <div class="profile_diary_section_loadolddiaries_details">
                <span>Date</span>
                <h4>Story Title</h4>
                <span>Read</span>
                <span class="delete"></span>

            </div>
        </div>
        <div class="profile_diary_section_loadolddiaries">
            <div class="profile_diary_section_loadolddiaries_details">
                <span>Date</span>
                <h4>Story Title</h4>
                <span>Read</span>
                <span class="delete"></span>

            </div>
        </div>
        <div class="profile_diary_section_loadolddiaries">
            <div class="profile_diary_section_loadolddiaries_details">
                <span>Date</span>
                <h4>Story Title</h4>
                <span>Read</span>
                <span class="delete"></span>

            </div>
        </div>
        <div class="profile_diary_section_loadolddiaries">
            <div class="profile_diary_section_loadolddiaries_details">
                <span>Date</span>
                <h4>Story Title</h4>
                <span>Read</span>
                <span class="delete"></span>

            </div>
        </div>
    </div>


@endsection