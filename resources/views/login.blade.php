@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | Log In</title>
    <meta name="description" content="Are you already a Member of SHAPE OF YOU? Login and continue your journey!">
@endsection

@section('content')
    <div class="h1_bg">
        <h1>LOG IN</h1>
    </div>
    @if($errors->any())
        <div style="color:red; border:1px solid #aaa; padding:4px; margin-top:10px">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    <form class="login_form" method="post" action="/handlelogin">
        <h2>Welcome back</h2>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <label>Username</label>
        <input type="text" name="username" placeholder="Username">
        <label>Password</label>
        <input type="password" name="password" placeholder="Your password">
        <button class="white_button">Login</button>
    </form>
@endsection