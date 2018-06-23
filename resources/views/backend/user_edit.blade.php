@extends('layouts.backendmaster')

@section('title')
    <title>ADMIN AREA</title>
@endsection

@section('content')

    <div class="h1_bg">
        <h1>EDIT/UPDATE</h1>
    </div>

        <form class="register_form" method="post" action="/edit_user/{{$user->id}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <label>First Name</label>
            <input type="text" name="firstname" placeholder="{{$user->firstname}}">
            <label>Last Name</label>
            <input type="text" name="lastname" placeholder="{{$user->lastname}}">
            <label>Password</label>
            <input type="password" name="password" placeholder="Your password">
            <label>Repeat Password</label>
            <input type="password" name="password_confirmation" placeholder="Repeat password"
                   id="password_confirmation">
            <label>Email</label>
            <input type="email" name="email" placeholder="{{$user->email}}">
            <label>Username</label>
            <input type="text" name="username" placeholder="{{$user->username}}">
            <label>Change Profile Picture</label><br>
            <input type="file" name="ProfileToUpload" id="ProfileToUpload">
            <label>Motivational Quote</label>
            <input type="text" name="mq" placeholder="{{$user->mq}}">
            <label>Birthdate</label><br>
            <input type="date" name="birthdate">
            <label>Origin</label><br>
            <input type="Text" name="origin" placeholder="{{$user->origin}}">
            <label>Body Shape</label><br>
            <select name="UserShape">
                <option value="0" @if($user->UserShape === 0) selected="selected" @endif>Secret</option>
                <option value="1" @if($user->UserShape === 1) selected="selected" @endif>Pear</option>
                <option value="2" @if($user->UserShape === 2) selected="selected" @endif>Apple</option>
                <option value="3" @if($user->UserShape === 3) selected="selected" @endif>Hour Glass</option>
                <option value="4" @if($user->UserShape === 4) selected="selected" @endif>Straight</option>
            </select>
            <label>Change Diet</label><br>
            <select name="UserDiet">
                <option value="0" @if($user->UserDiet === 0) selected="selected" @endif>Secret</option>
                <option value="1" @if($user->UserDiet === 1) selected="selected" @endif>No diet</option>
                <option value="2" @if($user->UserDiet === 2) selected="selected" @endif>Pescetarian</option>
                <option value="3" @if($user->UserDiet === 3) selected="selected" @endif>Vegan</option>
                <option value="4" @if($user->UserDiet === 4) selected="selected" @endif>Vegetarian</option>
            </select>
            <label>Change Goal</label><br>
            <select name="UserGoal">
                <option value="0" @if($user->UserGoal === 0) selected="selected" @endif>Secret</option>
                <option value="1" @if($user->UserGoal === 1) selected="selected" @endif>Lose weight</option>
                <option value="2" @if($user->UserGoal === 2) selected="selected" @endif>Stay/Become fit</option>
                <option value="3" @if($user->UserGoal === 3) selected="selected" @endif>Build muscles</option>
                <option value="4" @if($user->UserGoal === 4) selected="selected" @endif>Stay/Become healthy</option>
            </select>
            @if($user->isAdmin === 1)
                <label>BloggerBio</label>
                <input type="text" name="BloggerBio" placeholder="Please add your bio...">
                <label>AdminText</label>
                <input type="text" name="AdminText" placeholder="Admin text">
            @endif
                <button type="submit" class="white_button">Update User</button>
            </form>


@endsection