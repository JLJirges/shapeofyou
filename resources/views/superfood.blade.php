@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | Superfood</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>SUPER FOOD</h1>
    </div>
    <p class="superfood_text">Are you hungry or just looking for inspiration? Then this is the place to be!
        Choose the occasion, decide the diet or just go for it all! We are here to help you
        in a healthy and delicious way to get you the lifestyle you deserve!
        Healthy, delicious and perfect for any occasion!
    </p>

    @if($blogs->where('BlogCategory', 1)->count() > 0)


            <div class="title_bg">
                <h2>Ocassional Blogs</h2>
            </div>

            <div class="superfood_blog_bg">
                <div class="square_box_section">
                    @foreach($blogs->where('BlogCategory', 1) as $blog)
                        <div style="background-image:url({{'images/blogs/' . $blog->BlogHeroImage}});background-size:cover; background-position:center;">
                            <a class="box_link"
                               href="@if( (auth()->check())){{url('blog/' . $blog->id)}}@else{{ url ('register') }}@endif">
                                {{$blog->BlogTitle}}
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

        @endif


    @if($blogs->where('BlogCategory', 2)->count() > 0)

            <div class="title_bg">
                <h2>Diet Blogs</h2>
            </div>


            <div class="superfood_blog_bg">
                <div class="square_box_section">
                    @foreach($blogs->where('BlogCategory', 2) as $blog)
                        <div style="background-image:url({{'images/blogs/' . $blog->BlogHeroImage}});background-size:cover; background-position:center;">

                            <a class="box_link"
                               href="@if( (auth()->check())){{url('blog/' . $blog->id)}}@else{{ url ('register') }}@endif">
                                {{$blog->BlogTitle}}  </a>
                        </div>
                    @endforeach
                </div>
            </div>


            @endif



        <div class="title_bg">
            <h2>Current Exciters</h2>
        </div>

        @if($blogs->where('BlogCategory', 3)->count() > 0)
            <div class="superfood_blog_bg">
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