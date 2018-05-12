@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | Workout</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>OVERVIEW</h1>
    </div>


    <div class="square_box_section">
        <div class="box_indoor">
            <a class="box_link" href="{{url('detail')}}">INDOOR</a>
        </div>
        <div class="box_outdoor">
            <a class="box_link" href="{{url('detail')}}">OUTDOOR</a>
        </div>
        <div class="box_stretch">
            <a class="box_link" href="{{url('detail')}}">STRETCHING</a>
        </div>
        <div class="box_tenminutes">
            <a class="box_link" href="{{url('detail')}}">10 MINUTES WORKOUT</a>
        </div>
        <div class="box_partnerworkout">
            <a class="box_link" href="{{url('detail')}}">PARTNER WORKOUT</a>
        </div>
        <div class="box_yoga">
            <a class="box_link" href="{{url ('detail')}}">YOGA</a>
        </div>
        <div class="box_workoutwithequipment">
            <a class="box_link" href="{{url('detail')}}">WORKOUT WITH EQUIPMENT</a>
        </div>
        <div class="box_withoutequipment">
            <a class="box_link" href="{{url('detail')}}">WITHOUT EQUIPMENT</a>
        </div>
    </div>


@endsection