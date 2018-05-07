@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | Workout-Details</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>WORKOUT DETAILS</h1>
    </div>

    <div class="workout_entry">
        <div class="workout_entry_setting">
            <div class="workout_details_profilepicture">
                <img src="{{asset('images/aboutus/Joao.png')}}" alt="user profile picture">
                <span>Username</span>
            </div>
            <h2>Workout Title</h2>
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
            <span>Read Comments</span>
            <span>Write a Comment</span>
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

@endsection