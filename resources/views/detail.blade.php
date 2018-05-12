@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | Workout-Details</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>WORKOUT</h1>
    </div>

    <div class="workout_entry">
        <div class="workout_entry_setting">
            <div class="workout_details_profilepicture">
                <img src="{{asset('images/aboutus/Joao.png')}}" alt="user profile picture">
                <span>Username</span>
            </div>
            <h2>Workout Title</h2>
            <span class="addworkout"></span>
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

@endsection