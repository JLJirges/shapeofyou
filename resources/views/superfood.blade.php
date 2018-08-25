@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | Blogs</title>
    <meta name="description"
          content="If you are looking for healthy food trends or nutrition guides - here we are! Just read and enjoy!">
@endsection

@section('content')

    <!-- OCASSIONAL BLOGS -->
    @if($blogs->where('BlogCategory', 1)->count() > 0)
        <div class="superfood_blog_bg">
            <h1>BLOGS</h1>
            <h2>Ocassional Blogs</h2>
            <div class="square_box_section">
                @foreach($blogs->where('BlogCategory', 1) as $blog)
                    <div class="slide-in-elliptic-top-fwd"
                         style="background-image:url({{'images/blogs/' . $blog->BlogHeroImage}});background-size:cover; background-position:center;">
                        <a class="box_link"
                           href="@if( (auth()->check())){{url('blog/' . $blog->id)}}@else{{ url ('register') }}@endif">
                            {{$blog->BlogTitle}}
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    <!-- WORKOUT BLOGS -->
    @if($blogs->where('BlogCategory', 4)->count() > 0)
        <div class="workout_blog_bg">
            <h2>Workout Blogs</h2>
            <div class="square_box_section">
                @foreach($blogs->where('BlogCategory', 4) as $blog)
                    <div style="background-image:url({{asset('images/blogs/' . $blog->BlogHeroImage)}});background-size:cover; background-position:center;">
                        <a class="box_link"
                           href="@if( (auth()->check())){{url('blog/' . $blog->id)}}@else{{ url ('register') }}@endif">
                            {{$blog->BlogTitle}}  </a>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    <!-- CURRENT EXCITERS -->
    @if($blogs->where('BlogCategory', 3)->count() > 0)

        <div class="superfood_blog_bg">
            <h2>Current Exciters</h2>
            <div class="square_box_section">
                @foreach($blogs->where('BlogCategory', 3) as $blog)
                    <div style="background-image:url({{'images/blogs/' . $blog->BlogHeroImage}});background-size:cover; background-position:center;">
                        <a class="box_link"
                           href="@if( (auth()->check())){{url('blog/' . $blog->id)}}@else{{ url ('register') }}@endif">
                            {{$blog->BlogTitle}}  </a>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
@endsection