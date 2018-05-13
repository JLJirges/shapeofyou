@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | Register</title>
@endsection

@section('content')

    <div class="h1_bg">
        <h1>REGISTER</h1>
    </div>

    <form class="login_form" method="post" action="">
        <h2>Login</h2>
        <label>Username</label>
        <input type="text" name="username" placeholder="Username">
        <label>Password</label>
        <input type="password" name="password" placeholder="Your password">

        <button class="login_button">Login</button>
        <span>Forgot Password</span>
    </form>

    <form class="register_form" method="post" action="">
        <h2>New Community Member</h2>

        <label>First Name</label>
        <input type="text" name="firstname" placeholder="First Name">
        <label>Last Name</label>
        <input type="text" name="lastname" placeholder="Last Name">
        <label>Email</label>
        <input type="email" name="email" placeholder="Email">
        <label>Username</label>
        <input type="text" name="username" placeholder="Username">
        <label>Password</label>
        <input type="password" name="password" placeholder="Your password">
        <label>Repeat Password</label>
        <input type="password" name="password" placeholder="Repeat password">
        <div>
            <input type="checkbox" name="agb">
            <label>I have read and agree to the <a href=" {{ url('termsandconditions')}}">Terms and
                    Conditions</a>
            </label>
        </div>

        <button class="login_button">Sign up</button>
    </form>


@endsection