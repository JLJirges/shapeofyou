@extends('layouts.backendmaster')

@section('title')
    <title>ADMIN AREA | Create Blog</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>CREATE BLOG</h1>
    </div>

    <form class="register_form" method="POST" action="/createblog">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <label>Blog Title</label>
        <input type="text" name="BlogTitle" placeholder="Blog Title">
        <label>Blog Content</label>
        <input type="text" name="BlogContent" placeholder="Blog Content">
        <label>Insert Box Image</label>
        <input type="file" name="BlogBoxImage">
        <label>Insert Hero Image</label>
        <input type="file" name="BlogHeroImage">
        <label>Insert Second Image</label>
        <input type="file" name="BlogImage">
        <label>Blog Category</label><br>
        <select type="text" name="BlogCategory">
            <option value="1">Occassional Blog</option>
            <option value="2">Diet Blog</option>
            <option value="3">Current Exciter</option>
            <option value="4">Workout Blog</option>
        </select>
        <label>Blogger</label><br>
        <select type="text" name="BlogAuthorId">
            <option value="1">Lea</option>
            <option value="2">Mira</option>
            <option value="3">Corinna</option>
            <option value="4">Workout Blog</option>
        </select>

        <button class="white_button" type="submit">Create Blog</button>

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