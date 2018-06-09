@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | Jobs</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>Jobs</h1>
    </div>
    @if($jobs)
        @foreach($jobs as $job)
            <div class="jobs">

                   <string class="jobtitle">We are looking for:</string>
                    <string> {{$job->JobTitle}}</string>

                    <string class="jobtitle">Your Tasks:</string>
                    <string> {{$job->JobDescription}}</string>

                    <string class="jobtitle">Your Skills:</string>
                    <string> {{$job->YourSkills}}</string>

                    <string class="jobtitle">Please contact:</string>
                    <string> {{$job->ContactUs}}</string>

            </div>

        @endforeach
    @else
        <p>We are very sorry, but right now we have no jobs available!</p>
    @endif
@endsection