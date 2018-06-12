@extends('layouts.backendmaster')

@section('title')
    <title>ADMIN AREA | Event Overview</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>JOBS AND FAQS</h1>
    </div>


    <a href="{{url('backend/admin_jobs')}}" class="white_button">Add new Job</a>
    <a href="{{url('backend/admin_faqs')}}" class="white_button">Add new FAQ</a>

    <div class="title_bg">
        <h2>Jobs</h2>
    </div>


        @foreach($jobs as $job)
            <div class="faqs">
            <div>
                <a
                   href="{{url('backend/job_edit/' . $job->id)}}">
                    {{$job->JobTitle}}  </a>
                <div>
                    <div class="admin_delete_edit">
                        <a class="edit" href="{{url('backend/job_edit/' . $job->id)}}">Edit</a>
                        <form action="/delete_job/{{$job->id}}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="delete"></button>
                        </form>
                    </div>
                </div>
            </div>
            </div>

        @endforeach

    <div class="title_bg">
        <h2>FAQ's</h2>
    </div>


    @foreach($faqs as $faq)
        <div class="faqs">
            <div>
                <a class="edit" href="{{url('/backend/faq_edit/' . $faq->id)}}">{{$faq->Question}} </a>
                <div>
                    <div class="admin_delete_edit">
                        <a class="edit" href="{{url('backend/faq_edit/' . $faq->id)}}">Edit</a>
                        <form action="/delete_faq/{{$faq->id}}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="delete"></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection