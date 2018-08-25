@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | Profile and Diary</title>
@endsection

@section('content')
    @if(!auth()->check())
        <?php return redirect()->to('login'); ?>
    @else
        <div class="h1_bg">
            <h1>MY DIARY</h1>
        </div>

        <div class="profile_section">
            <!-- Profile Navigation -->
        @include ('partials.profilenav')

        <!-- Personal Profile Section -->
            @include ('partials.profilepersonalinfo')
        </div>

        <div class="profile_section_2">
            @if($user->username === Auth::user()->username)

                <h3>Write a new Diary Entry</h3>
                <p>Write in your Diary to share your experience today! Either if it's about food & recipes, your
                    workout,
                    (lack of) motivation or your new sports experience with your big brother, who did not as well as
                    you
                    -
                    whatever it is: Share your thoughts! (This Diary will be public to community
                    members)</p>
                <form class="diary_form" method="POST" action="/profile" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="DiaryUserId" value="{{Auth::user()->id}}">
                    <label>Write a title</label>
                    <input type="text" name="DiaryTitle" placeholder="I am the Title"><br>
                    <label>Write your entry</label>
                    <input type="text" name="DiaryContent" placeholder="Time to write a diary...">
                    <label>Upload Image</label><br>
                    <input type="file" name="DiaryHeroImage" id="DiaryHeroImage">
                    <button type="submit" value="Write Diary" name="Diary" class="white_button">Write in my Diary
                    </button>
                </form>
                @if($errors->any())
                    <div style="color:red; border:1px solid #aaa; padding:4px; margin-top:10px">
                        @foreach($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
            @endif

        <!-- Show User's Diaries -->
            @if(($user->username === Auth::user()->username) && ($diary->where('DiaryUserId', Auth::user()->id)->count() > 0))
                <div class="square_box_section">
                    @foreach($diary->where('DiaryUserId', Auth::user()->id) as $entry)
                        @if($entry->DiaryHeroImage)
                            <div style="background-image:url('{{asset('images/uploads_diaries/' . $entry->DiaryHeroImage)}}');background-size:cover; background-position:center;">
                                @else
                                    <div class="community_box_diaries">
                                        @endif
                                        <a class="box_link"
                                           href="{{url('diary/' . $entry->id)}}">
                                            {{$entry->DiaryTitle}}
                                        </a>
                                    </div>
                            </div>
                            @endforeach

                        @else
                            <div class="square_box_section">
                                @foreach($diary->where('DiaryUserId', $user->id) as $diaryentry)
                                    @if($diaryentry->DiaryHeroImage)
                                        <div style="background-image:url({{asset('images/uploads_diaries/' . $diaryentry->DiaryHeroImage)}});background-size:cover; background-position:center;">
                                            @else
                                                <div class="community_box_diaries">
                                                    @endif
                                                    <a class="box_link"
                                                       href="{{url('diary/' . $diaryentry->id)}}">
                                                        {{$diaryentry->DiaryTitle}}
                                                    </a>
                                                </div>
                                        </div>
                                        @endforeach
                            </div>
                </div>
                        @endif


            @endif
        </div>
@endsection

