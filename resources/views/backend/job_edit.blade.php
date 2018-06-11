@extends('layouts.backendmaster')

@section('title')
    <title>ADMIN AREA</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>EDIT/UPDATE</h1>
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

    <form class="register_form" method="POST" action="/edit_job/{{$job->id}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <label>Job Title</label>
        <input type="text" name="JobTitle" placeholder="{{$job->JobTitle}}">
        <label>Job Description</label>
        <input type="text" name="JobDescription" placeholder="Job Description">
        <label>Your Skills</label>
        <input type="text" name="YourSkills" placeholder="Your Skills">
        <label>Contact:</label>
        <input type="text" name="ContactUs" placeholder="{{$job->ContactUs}}">
        <button class="white_button" type="submit">Update Job</button>
    </form>

@endsection