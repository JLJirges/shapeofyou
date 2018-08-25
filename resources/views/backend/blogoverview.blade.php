@extends('layouts.backendmaster')

@section('title')
    <title>ADMIN AREA | Blog Overview</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>Blog Overview</h1>
    </div>


    <div class="backend-box-section">
        @foreach($blogs as $blog)
            <div class="backend-users">
                @if($blog->BlogHeroImage)
                    <a href="{{url('blog/' . $blog->id)}}" class="backend_profile_picture_overview"
                       style="background-image:url({{asset('images/blogs/' . $blog->BlogHeroImage)}});background-size:cover; background-position:center;">
                    <span class="username_backend_overview">
                        {{$blog->BlogTitle}}
                    </span>

                        <form class="backend-user-action" action="/delete_blog/{{$blog->id}}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <a class="edit" href="{{'blog_edit/' . $blog->id}}">Edit</a>
                            <button class="delete"></button>
                        </form>

                    </a>
                @else
                    <a href="{{url('blog/' . $blog->id)}}" class="backend_profile_picture_overview"
                       style="background-image:url({{asset('images/blogs/' . $blog->BlogImage)}});background-size:cover; background-position:center;">
                    <span class="username_backend_overview">
                        {{$blog->BlogTitle}}
                    </span>

                    </a>

                @endif
            </div>
        @endforeach
    </div>




@endsection