@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | My Profile</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>MY PROFILE</h1>
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

        <div class="profile_info_section">
            <div class="profile_info_section_images">
                @if($user->profilepic)
                    <div style="background-image:url({{'images/uploads/' . $user->profilepic}});background-size:cover; background-position:center;"
                         class="profile_picture">
                    </div>
                @else
                    <img alt="diet" src="{{asset('images/profile/default_profile_pic_v1.png')}}"
                         class="profile_picture">
                @endif
                <div class="profile_personal_section">
                    <p>Body Shape</p>
                    @if(($user->UserShape === 0) || ($user->UserShape === NULL))
                        <img alt="shape" src="{{asset('images/profile/default_secret.png')}}">
                    @elseif($user->UserShape === 1)
                        <img alt="shape" src="{{asset('images/pear_shape_1.png')}}">
                    @elseif($user->UserShape === 2)
                        <img alt="shape" src="{{asset('images/apple_shape_1.png')}}">
                    @elseif ($user->UserShape === 3)
                        <img alt="shape" src="{{asset('images/hourglass_shape_1.png')}}">
                    @elseif ($user->UserShape === 4)
                        <img alt="shape" src="{{asset('images/stick_shape_1.png')}}">
                    @endif
                </div>
                <div class="profile_personal_section">
                    <p>Diet</p>
                    @if(($user->UserDiet === 0) || ($user->UserDiet === NULL))
                        <img alt="diet" src="{{asset('images/profile/default_secret.png')}}">
                    @elseif($user->UserDiet === 1)
                        <img alt="diet" src="{{asset('images/community/nospecialdiet.png')}}">
                    @elseif($user->UserDiet === 2)
                        <img alt="diet" src="{{asset('images/community/pescetarian.png')}}">
                    @elseif ($user->UserDiet === 3)
                        <img alt="diet" src="{{asset('images/community/vegan.png')}}">
                    @elseif ($user->UserDiet === 4)
                        <img alt="diet" src="{{asset('images/community/vegetarian.png')}}">
                    @endif
                </div>
                <div class="profile_personal_section">
                    <p>Goal</p>
                    @if(($user->UserGoal === 0) || ($user->UserGoal === NULL))
                        <img alt="goal" src="{{asset('images/profile/default_secret.png')}}">
                    @elseif($user->UserGoal === 1)
                        <img alt="goal" src="{{asset('images/lose_weight_3.png')}}">
                    @elseif($user->UserGoal === 2)
                        <img alt="goal" src="{{asset('images/become_fit_2.png')}}">
                    @elseif ($user->UserGoal === 3)
                        <img alt="goal" src="{{asset('images/build_muscles_2.png')}}">
                    @elseif ($user->UserGoal === 4)
                        <img alt="goal" src="{{asset('images/healthy_lifestyle_2.png')}}">
                    @endif
                </div>

            </div>

            <div class="profile_section_personal">
                <div>
                    <p>MOTIVATION QUOTE</p>
                    <p class="profile_section_personal_motivation_quote">@if($user->mq){{ $user->mq }} @else
                            'No motivational quote defined...' @endif</p>
                </div>

                <div class="profile_info_section_personal_details">
                    <div>
                        <p>NAME:</p>
                        <p>AGE:</p>
                        <p>COUNTRY:</p>
                    </div>
                    <div>
                        <p> {{ $user->username }} </p>
                        <p> @if($user->birthdate){{ $user->birthdate }} @else no birth date
                            defined @endif </p>
                        <p> @if($user->origin){{ $user->origin }} @else no origin defined @endif</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="profile_section profile_section_2">


        <div class="profile_diary_section">

            <h3>Write a new Diary Entry</h3>
            <form class="diary_form" method="post" enctype="multipart/form-data">
                <label>Write a title</label>
                <input type="text" name="title" placeholder="I am the Title"><br>
                <label>Write your entry</label>
                <input type="text" name="diarytext" placeholder="Time to write a diary...">
                <label>Upload Image</label><br>
                <input type="file" name="DiaryfileToUpload" id="DiaryfileToUpload">
                <button type="submit" value="Write Diary" name="writediary" class="profile_button">Write in my Diary
                </button>
            </form>


        </div>
    </div>


    <div class="blog_entry">


        <div class="blog_box">
            <div class="old_diary_entry_setting">
                <span>Date</span>
                <h4>Diary Entry Title</h4>
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
        <div class="tab-content" id="comment-tab-2">
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
                                consectetur culpa ducimus est exercitationem hic, impedit magnam nesciunt obcaecati
                                placeat
                                quae quidem, repellat repudiandae sapiente tenetur veritatis?
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda, beatae
                                blanditiis
                                consectetur culpa ducimus est exercitationem hic, impedit magnam nesciunt obcaecati
                                placeat
                                quae quidem, repellat repudiandae sapiente tenetur veritatis?
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda, beatae
                                blanditiis
                                consectetur culpa ducimus est exercitationem hic, impedit magnam nesciunt obcaecati
                                placeat
                                quae quidem, repellat repudiandae sapiente tenetur veritatis?</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda, beatae blanditiis
                                consectetur culpa ducimus est exercitationem hic, impedit magnam nesciunt obcaecati
                                placeat
                                quae quidem, repellat repudiandae sapiente tenetur veritatis?
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda, beatae
                                blanditiis
                                consectetur culpa ducimus est exercitationem hic, impedit magnam nesciunt obcaecati
                                placeat
                                quae quidem, repellat repudiandae sapiente tenetur veritatis?
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda, beatae
                                blanditiis
                                consectetur culpa ducimus est exercitationem hic, impedit magnam nesciunt obcaecati
                                placeat
                                quae quidem, repellat repudiandae sapiente tenetur veritatis?</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda, beatae blanditiis
                                consectetur culpa ducimus est exercitationem hic, impedit magnam nesciunt obcaecati
                                placeat
                                quae quidem, repellat repudiandae sapiente tenetur veritatis?
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda, beatae
                                blanditiis
                                consectetur culpa ducimus est exercitationem hic, impedit magnam nesciunt obcaecati
                                placeat
                                quae quidem, repellat repudiandae sapiente tenetur veritatis?
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda, beatae
                                blanditiis
                                consectetur culpa ducimus est exercitationem hic, impedit magnam nesciunt obcaecati
                                placeat
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

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium culpa dignissimos earum
                            ex
                            facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae
                            ratione
                            recusandae saepe tempora.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Accusantium culpa
                            dignissimos earum ex
                            facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae
                            ratione
                            recusandae saepe tempora.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Accusantium culpa
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
                            Accusantium culpa
                            dignissimos earum ex
                            facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae
                            ratione
                            recusandae saepe tempora.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Accusantium culpa
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
                            Accusantium culpa
                            dignissimos earum ex
                            facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae
                            ratione
                            recusandae saepe tempora.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Accusantium culpa
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
                            Accusantium culpa
                            dignissimos earum ex
                            facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae
                            ratione
                            recusandae saepe tempora.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Accusantium culpa
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
                            Accusantium culpa
                            dignissimos earum ex
                            facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae
                            ratione
                            recusandae saepe tempora.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Accusantium culpa
                            dignissimos earum ex
                            facere hic iste labore, nemo neque, nostrum odit, officia optio perspiciatis placeat quae
                            ratione
                            recusandae saepe tempora.</p>
                    </div>
                </div>
                <div class="tab-content" id="oldentry-comment-tab-2">
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


@endsection

