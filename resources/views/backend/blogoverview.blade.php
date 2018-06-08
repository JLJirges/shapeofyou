@extends('layouts.backendmaster')

@section('title')
    <title>ADMIN AREA | Blog Overview</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>Blog Overview</h1>
    </div>

    <div class="square_box_section">

        @foreach($blogs as $blog)


            @if($blog->BlogBoxImage)
                <div style="background-image:url({{asset('images/' . $blog->BlogBoxImage)}});background-size:cover; background-position:center;">
                    @else
                        <div style="background-image:url({{asset('images/' . $blog->BlogHeroImage)}});background-size:cover; background-position:center;">
                            @endif
                            <a class="box_link"
                               href="{{url('blog/' . $blog->id)}}">
                                {{$blog->BlogTitle}}  </a>
                            <div class="admin_blog_interaction">
                                <form>
                                    <a>Edit</a>
                                    <button class="delete"></button>
                                </form>
                            </div>
                        </div>

                        @endforeach
                </div>
    </div>
@endsection