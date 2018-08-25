@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | Profile</title>
@endsection

@section('content')

    <h1>MY STORIES</h1>
    <div class="profile_section">
        <!-- Profile Navigation -->
    @include ('partials.profilenav')

    <!-- Personal Info -->
        @include ('partials.profilepersonalinfo')
    </div>

    <!-- Before/After Stories -->
    <div class="profile_section_2">
        @if($user->username === Auth::user()->username)
            <h3>Write a new Before/After Story</h3>
            <p>Write your Before/After-Story and share your progress with the community. It's a good opportunity to
                motivate other and/or to get some more tips from other members and our professionals! Every little
                progress is an awesome progress! Share it! (This Before/After-Story will be public to community
                members)</p>
            <form class="diary_form" method="post" action="/BeforeAfterStory"
                  enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <label>Write a title</label>
                <input type="text" name="BeforeAfterStoryTitle" placeholder="I am the Title"><br>
                <label>Write your entry</label>
                <input type="text" name="BeforeAfterStoryContent" placeholder="Time to tell a story...">
                <label>Upload BEFORE Image</label><br>
                <input type="file" name="BeforeAfterStoryImageOne" id="BeforeAfterStoryImageOne">
                <label>Upload AFTER Image</label><br>
                <input type="file" name="BeforeAfterStoryImageTwo" id="BeforeAfterStoryImageTwo">
                <button type="submit" value="Post Story" name="BeforeAfterStory" class="white_button">Post Story
                </button>
            </form>

            @if($errors->any())
                <div style="color:red; border:1px solid #aaa; padding:4px; margin-top:10px">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
        @endif
    </div>

    <!-- Show Before/After Stories -->

    @if(($user->id === Auth::user()->id) && ($bas->where('BeforeAfterStoryUserId', Auth::user()->id)->count() > 0))
        <div class="square_box_section">
            @foreach($bas->where('BeforeAfterStoryUserId', Auth::user()->id) as $entry)
                <div style="background-image:url({{asset('images/uploads_stories/' . $entry->BeforeAfterStoryImageTwo)}});background-size:cover; background-position:center;">
                    <a class="box_link"
                       href="{{url('beforeafter/' . $entry->id)}}">
                        {{$entry->BeforeAfterStoryTitle}}
                    </a>
                </div>
        </div>
        @endforeach

    @else
        <div class="square_box_section">
            @foreach($bas->where('BeforeAfterStoryUserId', $user->id) as $basentry)
                <div style="background-image:url({{asset('images/uploads_stories/' . $basentry->BeforeAfterStoryImageTwo)}});background-size:cover; background-position:center;">
                    <a class="box_link"
                       href="{{url('beforeafter/' . $basentry->id)}}">
                        {{$basentry->BeforeAfterStoryTitle}}  </a>
                </div>
            @endforeach
        </div>

    @endif

@endsection