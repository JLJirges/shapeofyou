@extends('layouts.backendmaster')

@section('title')
    <title>ADMIN AREA | Event Overview</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>JOBS AND FAQS</h1>
    </div>

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
                        <form method="post" action="/delete_event/{{$job->id}}">
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
                        <a href="{{url('backend/faq_edit/' . $faq->id)}}">Edit</a>
                        <form method="post" action="/delete_event/{{$faq->id}}">
                            <button type="submit" class="delete"></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection