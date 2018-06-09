@extends('layouts.backendmaster')

@section('title')
    <title>ADMIN AREA | Admin Jobs</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>Jobs</h1>
    </div>

    <div class="title_bg">
        <h2>Add Job</h2>
    </div>

    @if(\Session::has('job_error_message'))
        <div style="color:green; border:1px solid #aaa; padding:4px; margin-top:10px">
            {{ \Session::get('job_error_message') }}
        </div>
    @endif
    @if($errors->any())
        <div style="color:red; border:1px solid #aaa; padding:4px; margin-top:10px">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form class="register_form" method="POST" action="/add_job">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <label>Job Title</label>
        <input type="text" name="JobTitle" placeholder="Job Title">
        <label>Job Description</label>
        <input type="text" name="JobDescription" placeholder="Job Description">
        <label>Your Skills</label>
        <input type="text" name="YourSkills" placeholder="Your Skills">
        <label>Contact:</label>
        <input type="text" name="ContactUs" placeholder="Contact Data">
        <button class="white_button" type="submit">Add Job</button>
    </form>

@endsection