@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | Workout</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>'content' OVERVIEW</h1>
    </div>

    <p class="superfood_text">Activate the filter by choosing one or more diets and occasions to get what you deserve: the healthiest,
        the most delicious, the best!
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut blanditiis consequuntur explicabo
        laudantium molestiae molestias nulla obcaecati placeat praesentium rem, sint sit sunt voluptate.
        Incidunt libero repudiandae suscipit veritatis voluptas!</p>

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