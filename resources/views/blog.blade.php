@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | Blog</title>
@endsection

@section('content')

    <div class="blog_entry">

        <div class="blog_box">
            <div class="workout_entry_setting">
                @if($user_likes_blog)
                    <form method="POST" action="{{ '/favorite_blog/remove/' . $blog_id . '/' . $user_id }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <button class="clicked_fav_icon fav_icon_button">
                        </button>
                    </form>
                @else
                    <form method="POST" action="{{ '/favorite_blog/insert/' . $blog_id . '/' . $user_id }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <button class="fav_icon fav_icon_button">
                        </button>
                    </form>
                @endif
                <h1 class="blog_h1">{{ $blog->BlogTitle }}</h1>
            </div>

            <div>

                <img src="{{ asset('images/blogs/' . $blog->BlogHeroImage) }}" alt="blog hero image">

                <div class="blog_text">

                    <p>

                        {{ $blog->BlogContentOne }}
                    </p>
                    <img src="{{ asset('images/blogs/' . $blog->BlogImage) }}" alt="second blog image"
                         class="second_blog_image">
                    <p>

                        {{ $blog->BlogContentTwo }}
                    </p>
                </div>
            </div>
        </div>


    </div>

    <div class="blog_author_section">
        <div class="blog_abouttheauthor"
             style="background-image:url({{asset('images/blogs/responsive_author_bg.png')}});background-size: cover; background-position: center;">
            <h4>About the author</h4>
            <div class="blog_abouttheauthor_content">
                <div>

                    <div style="background-image: url({{asset('images/uploads/' . $blog_author->profilepic )}});background-size: cover; background-position: center"
                         class="profile_picture"></div>
                </div>
                <div class="blog_abouttheauthor_content_info">
                    <div>
                        <h5>Blogger Name</h5>
                        <p>{{ $blog_author->username }}</p>
                    </div>
                    <div>
                        <h5>Birthday</h5>
                        <p>{{ $blog_author->birthdate }}</p>
                    </div>
                    <div>
                        <h5>Origin</h5>
                        <p>{{ $blog_author->origin }}</p>
                    </div>
                </div>
            </div>
            <div class="blog_abouttheauthor_content_bio">
                <h5>Biography</h5>
                <p>{{ $blog_author->BloggerBio }}</p>
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
                        <a href="{{url('profile/' . $users->where('id', $blog_comment->UserId)->first()->username)}}">
                            <div class="comments_details_profilepicture">
                                @if($users->where('id', $blog_comment->UserId)->first()->profilepic)
                                    <img src="{{asset('images/uploads/' . $users->where('id', $blog_comment->UserId)->first()->profilepic)}}"
                                         alt="user profile picture">
                                @else
                                    <img src="{{ asset ('images/profile/default_profile_pic_v1.png')}}"
                                         alt="user profile picture">
                                @endif
                                <span @if( $users->where('id', $blog_comment->UserId)->first()->username) style=" color: darkorange;" @endif>{{ $users->where('id', $blog_comment->UserId)->first()->username}}</span>
                            </div>
                        </a>
                        <span>{{ $blog_comments->where('BlogCommentDate', $blog_comment->BlogCommentDate)->first()->BlogCommentDate}}</span>
                        @if( ((auth()->check()) && (Auth::user()->isAdmin === 1)) || ((Auth::user()->id === $blog_comment->UserId)))
                            <div class="comments_details_edit">
                                <form action="/delete_blog_comment/{{$blog->id}}/{{$blog_comment->id}}" method="post">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" class="delete"></button>
                                </form>

                            </div>
                        @else
                            <div class="comments_details_edit">
                            </div>
                        @endif
                    </div>
                    <p>{{ $blog_comment->BlogCommentContent}}</p>
                </div>




            @endforeach


        </div>
        <div class="tab-content" id="comment-tab-2">
            <form class="comment_form" method="post"
                  action="{{'/write_comment/blog/' . $blog_id . '/' . $user_id}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <h2>Leave a Comment</h2>
                <label>Write your comment</label>
                <input type="text" name="comment" placeholder="I will be your comment...">
                <button class="white_button">Add Comment</button>
            </form>
        </div>
        <div class="tab-content" id="comment-tab-3"></div>

    </div>
@endsection