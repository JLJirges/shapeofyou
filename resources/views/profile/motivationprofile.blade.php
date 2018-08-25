@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | Profile</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>TIME FOR MOTIVATION</h1>
    </div>

    <div class="profile_section">
    @include ('partials.profilenav')

    @include ('partials.profilepersonalinfo')

    <!-- Write yourself a letter into the future -->
    </div>
    <div class="profile_section_2">

        <h2>Write a motivational Letter...</h2>
        <p>...and decide when to receive it! We all have some troubles to stay focused or lack motivation sometimes.
            And who knows better how to motivate oneself than oneself? Exactly this is what this Letter is about!
            Write
            down why you don't want you future self to give up! Remind your future self why you started! You know
            best if you need motivation per week, month or from time to time. Whenever you feel like it: write
            and motivate yourself! You will receive the letter per email so this letter is private and won't be
            sharable with other members!</p>

        @if(\Session::has('letter_message'))
            <div style="color:green; border:1px solid #aaa; padding:4px; margin-top:10px">
                {{ \Session::get('letter_message') }}
            </div>
        @endif
        @if($errors->any())
            <div style="color:red; border:1px solid #aaa; padding:4px; margin-top:10px">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form class="diary_form" method="post" enctype="multipart/form-data"
              action="/futureletter/{{Auth::user()->id}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <label>Write a Title</label>
            <input type="text" name="LetterTitle" placeholder="I am the Title"><br>
            <label>Write your Entry</label>
            <input type="text" name="LetterContent" placeholder="I am the Content"><br>
            <label>When to receive?</label>
            <input type="date" name="received_at">
            <button type="submit" value="Send Letter" name="sendletter" class="white_button">Send Letter</button>
        </form>
    </div>
@endsection