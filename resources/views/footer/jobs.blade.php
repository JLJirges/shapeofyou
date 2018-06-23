@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | Jobs</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>Jobs</h1>
    </div>

    <h2>You would like to work for SHAPE OF YOU?</h2>
    @if($jobs)
        <h3>We're hiring!</h3>
        @foreach($jobs as $job)
            <div class="jobs">

                   <h4 class="jobtitle">We are looking for:</h4>
                    <p> {{$job->JobTitle}}</p>

                    <h4 class="jobtitle">Your Tasks:</h4>
                    <p> {{$job->JobDescription}}</p>

                    <h4 class="jobtitle">Your Skills:</h4>
                    <p> {{$job->YourSkills}}</p>

                    <h4 class="jobtitle">Please contact:</h4>
                    <p> {{$job->ContactUs}}</p>

            </div>

        @endforeach
    @else
        <p>We are very sorry, but right now we have no jobs available!</p>
    @endif
@endsection