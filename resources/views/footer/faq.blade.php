@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | FAQ</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>FAQ</h1>
    </div>

        <ul class="faq">
            @foreach($faqs as $faq)
            <li>

                <p class="question">{{$faq->Question}}</p>
                <p>
                    {{$faq->Answer}}
                </p>
            </li>
            @endforeach

        </ul>



@endsection