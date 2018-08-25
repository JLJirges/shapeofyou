@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | My Blogs</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>MY BLOGS</h1>
    </div>
    <div class="profile_section">
        @include ('partials.profilenav')
        @include ('partials.profilepersonalinfo')
    </div>

    @if($user->username === Auth::user()->username)
        <div class="profile_section_2">
            <p>Is there anything you would like to remember? Do not fear - your
                favourites are here! Every Blog you liked, every
                article you were or still are interested in it - as long as you clicked on the heart which you can find
                next to the article title, it will show
                up here. But
                be aware that if we update our Blogs - because fitness and nutrition has to go with time too - your
                Blogs could
                disappear.</p>
            <img src="{{ asset ('images/unclicked_fav_icon.png')}}" alt="unclicked fav icon" width="80" height="80">
            <p>Have you ever noticed this strange Icon next to the title of an article
                (Blogs) and wondered what it might do?
                No need to be afraid, you won't lose your heart to a person, who gives it back after a second. This
                Icon is meant for real love -
                Nutrition Love! Do you have Blogs you'd like to remember? Simply click the item and...</p>
            <img src="{{ asset ('images/fav_icon.png')}}" alt="fav icon" width="80" height="80">
            <p>...it will turn into this wonderful, heartwarming image, to remind you to
                have a favorite! BUT... Yes, it could be,
                that Blogs you faved might disappear from your list. Not because we are mean and like to see your
                reaction in the hidden camera that turns on, after your first sign up
                at SHAPE OF YOU. (Please notice, that this was a joke!) No. The reason is, that sometimes Trends or
                even experts change their mind and
                we only want our Blogs to be up-to-date!</p>

        </div>
    @endif

    <!-- Show favourite Blogs -->
    @if(($user->username === \Auth::user()->username)&&($fave_blog_ids))

        <div class="square_box_section">
            @foreach($blogs-> whereIn('id', $fave_blog_ids) as $fave_blog)
                <div style="background-image:url({{asset('images/blogs/' . $fave_blog->BlogHeroImage)}});background-size:cover; background-position:center;">
                    <a class="box_link"
                       href="{{url('blog/' . $fave_blog->id)}}">
                        {{$fave_blog->BlogTitle}}
                    </a>
                </div>
            @endforeach
        </div>
    @elseif(($user->username !== \Auth::user()->username)&&($fave_blog_ids))
        <div class="square_box_section">
            @foreach($blogs-> whereIn('id', $fave_blog_ids) as $fave_blog)
                <div style="background-image:url({{asset('images/blogs/' . $fave_blog->BlogHeroImage)}});background-size:cover; background-position:center;">
                    <a class="box_link"
                       href="{{url('blog/' . $fave_blog->id)}}">
                        {{$fave_blog->BlogTitle}}
                    </a>
                </div>
            @endforeach
        </div>
    @endif

@endsection