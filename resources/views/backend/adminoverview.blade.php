@extends('layouts.backendmaster')

@section('title')
    <title>ADMIN AREA | Admin Infos Overview</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>ADMIN INFOS OVERVIEW</h1>
    </div>

    <div class="square_box_section">
        <div class="box_users">
            <a class="box_link" href="{{url('/backend/admin_jobs')}}">JOBS</a>
        </div>
        <div class="box_backend_blogs">
            <a class="box_link" href="{{url('/backend/admin_contact')}}">CONTACT</a>
        </div>
        <div class="box_stretch">
            <a class="box_link" href="{{url('/backend/admin_tac')}}">TERMS & CONDITIONS</a>
        </div>
        <div class="community_box_diaries">
            <a class="box_link" href="{{url('/backend/admin_faqs')}}">FAQ's</a>
        </div>
    </div>
@endsection