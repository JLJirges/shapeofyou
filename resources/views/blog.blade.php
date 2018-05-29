@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | Blog</title>
@endsection

@section('content')
    <div class="h1_bg">


    </div>

    <div class="blog_entry">

        <div class="blog_box">
            <div class="workout_entry_setting">
                <span class="fav_icon"></span>
                <h1>{{ $blog->BlogTitle }}</h1>
            </div>

            <div>
                <img src="{{ asset('images/blogs/seafood/title_image.png')}}" alt="blog hero image">

                <div class="blog_text">

                    <p>

                        {{ $blog->BlogContentOne }}
                    </p>
                    <img src="{{ asset('images\blogs\seafood\second_blog_image.png')}}" alt="second blog image">
                    <p>

                        {{ $blog->BlogContentTwo }}
                    </p>
                </div>
            </div>
        </div>


    </div>

    <div class="blog_author_section">
        <div class="blog_abouttheauthor">
            <h4>About the author</h4>
            <div class="blog_abouttheauthor_content">

                <img alt="blogger image" src="{{ asset('images/aboutus/Lea.png') }}">

                <div class="blog_abouttheauthor_content_info">
                    <div>
                        <h5>Name</h5>
                        <p>Lea Schächter</p>
                    </div>
                    <div>
                        <h5>Birthday</h5>
                        <p>August 3rd, 1993</p>
                    </div>
                    <div>
                        <h5>Origin</h5>
                        <p>Austria | Vienna</p>
                    </div>
                </div>
            </div>
            <div class="blog_abouttheauthor_content_bio">
                <h5>Biography</h5>
                <p>As a half German half Austrian, jewish girl, Lea Schächter was bron and raised as a pure mix between
                    cultures. She gratuated at the age of 18, did a Diploma in Comics and Animation and studies
                    journalism. Because of her mother - who was working as a translator for some years - Lea's
                    mothertongue ist German, but she is also fluent in English, Hebrew and French.</p>
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

            @foreach($blog_comments as $blog_comment)
                <div class="comments_details">


                    <div class="comments_details_user">
                        <div class="comments_details_profilepicture">
                            <img src="{{asset('images/uploads/' . $users->where('id', $blog_comment->UserId)->first()->profilepic)}}" alt="user profile picture">
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

            @endforeach
        </div>
        <div  class="tab-content" id="comment-tab-2">
            <form class="comment_form" method="post" action="">
                <h2>Leave a Comment</h2>
                <label>Write your comment</label>
                <input type="text" name="comment" placeholder="I will be your comment...">
                <button class="comment_button">Add Comment</button>
            </form>
        </div>
        <div class="tab-content" id="comment-tab-3"></div>
    </div>
@endsection