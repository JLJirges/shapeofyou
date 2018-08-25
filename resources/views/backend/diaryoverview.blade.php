@extends('layouts.backendmaster')

@section('title')
    <title>ADMIN AREA | Diary Overview</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>Diary Overview</h1>
    </div>

    <div class="backend-box-section">
        @foreach($diaries as $diary)
            <div class="backend-users">
                @if($diary->DiaryHeroImage)

                    <a href="{{url('diary/' . $diary->id)}}"
                       style="background-image:url('{{asset('images/uploads_diaries/' . $diary->DiaryHeroImage)}}');background-size:cover; background-position:center;"
                       class="backend_profile_picture_overview">
                    <span class="username_backend_overview">
                        {{$diary->DiaryTitle}}
                    </span>
                        <form class="backend-user-action" action="/delete_diary_frombackend/{{$diary->id}}"
                              method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button class="delete"></button>
                        </form>
                    </a>
                <!--  <img src="{{asset('/images/uploads_diaries/' . $diary->DiaryHeroImage)}}" width="200" height="200">-->

                @else
                    <a href="{{url('diary/' . $diary->id)}}"
                       style="background-image:url({{asset('images/community/diaries.png')}});background-size:cover; background-position:center;"
                       class="backend_profile_picture_overview">
                        <span class="username_backend_overview">{{$diary->DiaryTitle}}
                    </span>
                        <form class="backend-user-action" action="/delete_diary_frombackend/{{$diary->id}}"
                              method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button class="delete"></button>
                        </form>
                    </a>

                @endif
            </div>
        @endforeach
    </div>


@endsection