@extends('layouts.backendmaster')

@section('title')
    <title>ADMIN AREA | Story Overview</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>STORY OVERVIEW</h1>
    </div>

    <div class="backend-box-section">
        @foreach($stories as $story)
            <div style="background-image:url({{asset('images/uploads_stories/' . $story->BeforeAfterStoryImageTwo)}});background-size:cover; background-position:center;">
                <a class="box_link"
                   href="{{url('beforeafter/' . $story->id)}}">
                    {{$story->BeforeAfterStoryTitle}}  </a>
                <div class="admin_blog_interaction">
                    <form action="/delete_bas_frombackend/{{$story->id}}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button class="delete"></button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

@endsection