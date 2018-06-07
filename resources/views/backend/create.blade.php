@extends('layouts.backendmaster')

@section('title')
    <title>ADMIN AREA | New/Add/Create</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>NEW, ADD & CREATE</h1>
    </div>

    <div class="title_bg">
        <h2>Add a new User</h2>
    </div>

    @if(\Session::has('newuser_error_message'))
        <div style="color:green; border:1px solid #aaa; padding:4px; margin-top:10px">
            {{ \Session::get('newuser_error_message') }}
        </div>
    @endif
    @if($errors->any())
        <div style="color:red; border:1px solid #aaa; padding:4px; margin-top:10px">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form class="register_form" method="POST" action="/register_new_user">
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
        <button class="white_button" type="submit">Add User</button>

    </form>

    <div class="title_bg">
        <h2>Write a new Blog</h2>
    </div>

    @if(\Session::has('newblog_error_message'))
        <div style="color:green; border:1px solid #aaa; padding:4px; margin-top:10px">
            {{ \Session::get('newblog_error_message') }}
        </div>
    @endif
    @if($errors->any())
        <div style="color:red; border:1px solid #aaa; padding:4px; margin-top:10px">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form class="register_form" method="POST" action="/create">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <label>Blog Title</label>
        <input type="text" name="BlogTitle" placeholder="CAPITAL LETTERS">
        <label>Insert Box Image</label>
        <input type="file" name="BlogBoxImage">
        <label>Insert Hero Image</label>
        <input type="file" name="BlogHeroImage">
        <label>Blog Content One</label>
        <input type="text" name="BlogContentOne" placeholder="Blog Content">
        <label>Insert Second Image</label>
        <input type="file" name="BlogImage">
        <label>Blog Content Two</label>
        <input type="text" name="BlogContentTwo" placeholder="Blog Content">
        <label>Blog Category</label><br>
        <select type="text" name="BlogCategory">
            <option value="1">Occassional Blog</option>
            <option value="2">Diet Blog</option>
            <option value="3">Current Exciter</option>
            <option value="4">Workout Blog</option>
        </select>
        <label>Blogger</label><br>
        <select type="text" name="AuthorId">
            <option value="1">Lea</option>
            <option value="2">Mira</option>
            <option value="3">Corinna</option>
        </select>

        <button class="white_button" type="submit">Create Blog</button>

    </form>


@endsection