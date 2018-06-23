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


            @if($blog->BlogHeroImage)
                <div style="background-image:url({{asset('images/blogs/' . $blog->BlogHeroImage)}});background-size:cover; background-position:center;">
                    @else
                        <div style="background-image:url({{asset('images/blogs/' . $blog->BlogImage)}});background-size:cover; background-position:center;">
                            @endif
                            <a class="box_link"
                               href="{{url('blog/' . $blog->id)}}">
                                {{$blog->BlogTitle}}  </a>
                            <div class="admin_blog_interaction">
                                <form action="/delete_blog/{{$blog->id}}" method="post">
                                    <a class="edit" href="{{'blog_edit/' . $blog->id}}">Edit</a>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button class="delete"></button>
                                </form>
                            </div>
                        </div>

                        @endforeach

                </div>
@endsection