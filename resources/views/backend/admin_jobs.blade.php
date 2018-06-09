@extends('layouts.backendmaster')

@section('title')
    <title>ADMIN AREA | Admin Jobs</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>Jobs</h1>
    </div>

    <div class="title_bg">
        <h2>Add FAQ</h2>
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

    <form class="register_form" method="POST" action="/add_faq">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <label>Question</label>
        <input type="text" name="Question" placeholder="Question">
        <label>Answer</label>
        <input type="text" name="Answer" placeholder="Answer">
        <button class="white_button" type="submit">Add FAQ</button>
    </form>

@endsection