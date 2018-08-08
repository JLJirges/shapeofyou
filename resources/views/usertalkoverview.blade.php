@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | Usertalk</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>OVERVIEW</h1>
    </div>

    <div class="square_box_section">
        @foreach($diaries as $diary)
            @if($diary->DiaryHeroImage)
                <div style="background-image:url('{{asset('images/uploads_diaries/' . $diary->DiaryHeroImage)}}');background-size:cover; background-position:center;">
                    @else
                        <div class="community_box_diaries">
                            @endif
                            <a class="box_link"
                               href="{{url('diary/' . $diary->id)}}">
                                {{$diary->DiaryTitle}}  </a>
                        </div>
                        @endforeach
                </div>

@endsection