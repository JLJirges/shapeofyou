@extends('layouts.backendmaster')

@section('title')
    <title>ADMIN AREA</title>
@endsection

@section('content')

    <div class="h1_bg">
        <h1>EDIT/UPDATE</h1>
    </div>

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

    <form class="register_form" method="POST" action="/edit_workout/{{$workout->id}}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <label>Workout Title</label>
        <input type="text" name="WorkoutTitle" placeholder="{{$workout->WorkoutTitle}}">
        <label>Insert Hero Image</label>
        <input type="file" name="WorkoutHeroImage">
        <label>Workout Content One</label>
        <input type="text" name="WorkoutContentOne" placeholder="content">
        <label>Insert Second Image</label>
        <input type="file" name="WorkoutImage">
        <label>Workout Content Two</label>
        <input name="WorkoutContentTwo" placeholder="content">
        <label>Workout Category</label><br>
        <select name="WorkoutCategory">
            <option value="1" @if($workout->WorkoutCategory === 1)selected="selected" @endif >Warm Up</option>
            <option value="2" @if($workout->WorkoutCategory === 2)selected="selected" @endif >Stretching</option>
            <option value="3" @if($workout->WorkoutCategory === 3) selected="selected"@endif>Main Workout</option>
        </select>
        <label>Author</label><br>
        <select name="BloggerId">
            @foreach($admin_users as $admin_user)
                <option value="{{$admin_user->id}}">
                    {{$admin_user->username}}
                </option>
            @endforeach
        </select>

        <button class="white_button" type="submit">Update Workout</button>

    </form>


@endsection