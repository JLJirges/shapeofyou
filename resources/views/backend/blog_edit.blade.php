@extends('layouts.backendmaster')

@section('title')
    <title>ADMIN AREA</title>
@endsection

@section('content')

    <div class="h1_bg">
        <h1>EDIT/UPDATE</h1>
    </div>
    <form class="register_form" method="POST" action="/edit_blog/ {{$blog->id}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <label>Blog Title</label>
        <input type="text" name="BlogTitle" placeholder="{{$blog->BlogTitle}}">
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
            <option value="1" @if($blog->BlogCategory === 1) selected="selected" @endif>Occassional Blog</option>
            <option value="2" @if($blog->BlogCategory === 2) selected="selected" @endif>Diet Blog</option>
            <option value="3" @if($blog->BlogCategory === 3) selected="selected" @endif>Current Exciter</option>
            <option value="4" @if($blog->BlogCategory === 4) selected="selected" @endif>Workout Blog</option>
        </select>
        <label>Blogger</label><br>
        <select type="text" name="BloggerId">
            @foreach($admin_users as $admin_user)
                <option value="{{$admin_user->id}}">
                    {{$admin_user->username}}
                </option>
            @endforeach
        </select>

        <button class="white_button" type="submit">Edit Blog</button>

    </form>



@endsection