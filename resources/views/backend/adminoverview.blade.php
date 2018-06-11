@extends('layouts.backendmaster')

@section('title')
    <title>ADMIN AREA | Admin Infos Overview</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>ADMIN INFOS OVERVIEW</h1>
    </div>

    <div class="square_box_section">
        <div class="box_jobs">
            <a class="box_link" href="{{url('/backend/jobs_faq_overview')}}">JOBS & FAQs</a>
        </div>
    </div>
@endsection