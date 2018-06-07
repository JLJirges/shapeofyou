@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | Register</title>
@endsection

@section('content')


    <div class="h1_bg">
        <h1>REGISTER</h1>
    </div>

    <form class="register_form" method="POST" action="/register">
        <h2>New Community Member</h2>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <label>First Name</label>
        <input type="text" name="firstname" placeholder="First Name">
        <label>Last Name</label>
        <input type="text" name="lastname" placeholder="Last Name">
        <label>Username</label>
        <input type="text" name="username" placeholder="Username">
        <label>Email</label>
        <input type="email" name="email" placeholder="Email">
        <label>Password</label>
        <input type="password" name="password" placeholder="Your password">
       <!-- <div>
            <input type="checkbox" name="agb">
            <label>I have read and agree to the <a href=" {{ url('termsandconditions')}}">Terms and
                    Conditions</a>
            </label>
        </div>-->
        <button class="login_button" type="submit">Sign up</button>
<span>*With your registration you agree to the <a class="tandc" href="{{'termsandconditions'}}">Terms and Conditions</a> made by SHAPE OF YOU!</span>


    </form>

    @if(\Session::has('flash_message'))
        <div style="color:green; border:1px solid #aaa; padding:4px; margin-top:10px">
            {{ \Session::get('flash_message') }}
        </div>
    @endif
    @if($errors->any())
        <div style="color:red; border:1px solid #aaa; padding:4px; margin-top:10px">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif


@endsection