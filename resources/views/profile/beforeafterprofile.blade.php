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
                <a href="{{ url ('buddiesprofile')}}">My Buddies</a>
            </div>
            <div class="profile_navigation_sections profile_navigation__section_box">
                <a href="{{ url ('settingsprofile')}}">Settings</a>
            </div>
            <div class="profile_navigation_sections profile_navigation__section_box">
                <a href="{{ url('logout') }}">Logout</a>
            </div>
        </div>

        <div class="profile_diary_section">

            <h3>Write a new Before/After Story</h3>
            <form class="diary_form" method="post" action="/BeforeAfterStory">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <label>Write a title</label>
                <input type="text" name="BeforeAfterStoryTitle" placeholder="I am the Title"><br>
                <label>Write your entry</label>
                <input type="text" name="BeforeAfterStoryContent" placeholder="Time to tell a story...">
                <label>Upload BEFORE Image</label><br>
                <input type="file" name="StoryOneToUpload" id="StoryOneToUpload">
                <label>Upload AFTER Image</label><br>
                <input type="file" name="StoryTwoToUpload" id="StoryTwoToUpload">
                <button type="submit" value="Post Story" name="BeforeAfterStory" class="white_button">Post Story</button>
            </form>

            @if($errors->any())
                <div style="color:red; border:1px solid #aaa; padding:4px; margin-top:10px">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
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
        <ul class="comments_section_interaction tabs">
            <li class="tab-link shown_tab" data-tab="comment-tab-1"><h5>Read Comments</h5></li>
            <li class="tab-link" data-tab="comment-tab-2"><h5>Write a Comment</h5></li>
            <li class="tab-link" data-tab="comment-tab-3"><h5>Hide Comments</h5></li>
        </ul>
        <div class="tab-content shown_tab" id="comment-tab-1">

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
        <div  class="tab-content" id="comment-tab-2">
            <form class="comment_form" method="post" action="">
                <h2>Leave a Comment</h2>
                <label>Write your comment</label>
                <input type="text" name="comment" placeholder="I will be your comment...">
                <button class="white_button">Add Comment</button>
            </form>
        </div>
        <div class="tab-content" id="comment-tab-3"></div>
    </div>

    <div class="old_diary_entries">
        <div class="profile_diary_section_loadolddiaries">
            <div class="profile_diary_section_loadolddiaries_details">
                <span>Date</span>
                <h4 class="whole_old_entry_trigger">Example to try out - click me</h4>
                <span>Read</span>
                <span class="delete"></span>
            </div>
        </div>


        <div class="whole_old_entry">
            <div class="blog_entry">


                <div class="blog_box">
                    <div class="old_diary_entry_setting">
                        <span>Date</span>
                        <h4>Diary Entry Title</h4>
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
                <ul class="comments_section_interaction tabs">
                    <li class="tab-link shown_tab" data-tab="oldentry-comment-tab-1"><h5>Read Comments</h5></li>
                    <li class="tab-link" data-tab="oldentry-comment-tab-2"><h5>Write a Comment</h5></li>
                    <li class="tab-link" data-tab="oldentry-comment-tab-3"><h5>Hide Comments</h5></li>
                </ul>
                <div class="tab-content shown_tab" id="oldentry-comment-tab-1">

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
                <div  class="tab-content" id="oldentry-comment-tab-2">
                    <form class="comment_form" method="post" action="">
                        <h2>Leave a Comment</h2>
                        <label>Write your comment</label>
                        <input type="text" name="comment" placeholder="I will be your comment...">
                        <button class="white_button">Add Comment</button>
                    </form>
                </div>
                <div class="tab-content" id="oldentry-comment-tab-3"></div>
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