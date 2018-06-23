@extends('layouts.backendmaster')

@section('title')
    <title>ADMIN AREA</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>EDIT/UPDATE</h1>
    </div>

    @if(\Session::has('faq_error_message'))
        <div style="color:green; border:1px solid #aaa; padding:4px; margin-top:10px">
            {{ \Session::get('faq_error_message') }}
        </div>
    @endif
    @if($errors->any())
        <div style="color:red; border:1px solid #aaa; padding:4px; margin-top:10px">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form class="register_form" method="POST" action="/edit_faq/{{$faq->id}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <label>Question</label>
        <input type="text" name="Question" placeholder="{{$faq->Question}}">
        <label>Answer</label>
        <input type="text" name="Answer" placeholder="{{$faq->Answer}}">

        <button class="white_button" type="submit">Edit FAQ</button>

    </form>


@endsection