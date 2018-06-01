@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | Usertalk</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>OVERVIEW</h1>
    </div>

    
    @foreach($diaries as $diary)

        <div class="square_box_section">
            <div style="background-image:url({{asset('images/uploads/' . $diary->DiaryHeroImage)}});background-size:cover; background-position:center;">

                <a class="box_link"
                   href="{{url('diary/' . $diary->id)}}">
                    {{$diary->DiaryTitle}}  </a>
            </div>
        </div>
    @endforeach



@endsection