@extends('layouts.master')

@section('title')
    <title>SHAPE OF YOU | Superfood</title>
@endsection

@section('content')
    <div class="h1_bg">
        <h1>SUPER FOOD</h1>
    </div>
    <p class="superfood_text">Are you hungry or just looking for inspiration? Then this is the place to be!
        Choose the occasion, decide the diet or just go for it all! We are here to help you
        in a healthy and delicious way to get you the lifestyle you deserve!
        Healthy, delicious and perfect for any occasion!
    </p>
    <div class="superfood_blog_section">
        <div class="title_bg">
            <h2>Ocassional Blogs</h2>
        </div>
        <div class="box_section">

            <div class="box_appetizers">
                <a class="box_link" href="{{url('blog')}}">APPETIZERS</a>
            </div>
            <div class="box_breakfast">
                <a class="box_link" href="{{url('blog')}}">BREAKFAST</a>
            </div>
            <div class="box_lunch">
                <a class="box_link" href="{{url('blog')}}">LUNCH</a>
            </div>
            <div class="box_snacks">
                <a class="box_link" href="{{url('blog')}}">SNACKS</a>
            </div>
            <div class="box_dinner">
                <a class="box_link" href="{{url('blog')}}">DINNER</a>
            </div>
            <div class="box_desserts">
                <a class="box_link" href="{{url('blog')}}">DESSERTS</a>
            </div>
        </div>
    </div>

    <div class="superfood_blog_section">
        <div class="title_bg">
            <h2>Diet Blogs</h2>
        </div>
        <div class="box_section">

            <div class="superfood_box_vegan">
                <a class="box_link" href="{{url('blog')}}">VEGAN</a>
            </div>
            <div class="superfood_box_vegetarian">
                <a class="box_link" href="{{url('blog')}}">VEGETARIAN</a>
            </div>
            <div class="superfood_box_pescetarian">
                <a class="box_link" href="{{url('blog')}}">PESCETARIAN</a>
            </div>
            <div class="superfood_box_nospecialdiet">
                <a class="box_link" href="{{url('blog')}}">NO SPECIAL DIET</a>
            </div>
            <div class="superfood_box_lowcarbnocarb">
                <a class="box_link" href="{{url('blog')}}">LOW CARB/ NO CARB</a>
            </div>
            <div class="superfood_box_ketodiet">
                <a class="box_link" href="{{url('blog')}}">KETO DIET</a>
            </div>
        </div>
    </div>


    <div class="title_bg">
        <h2>CURRENT EXCITERS</h2>
    </div>

    <div class="superfood_blog_bg">
        <div class="square_box_section">

                <div class="superfood_box_nuts">
                    <a class="box_link" href="{{url('blog')}}">LET'S GO NUTS</a>
                </div>
                <div class="superfood_box_goodcarbsbadcarbs">
                    <a class="box_link" href="{{url('blog')}}">GOOD CARBS, BAD CARBS</a>
                </div>
                <div class="superfood_box_thepowerofchia">
                    <a class="box_link" href="{{url('blog')}}">THE POWER OF CHIA SEEDS</a>
                </div>
                <div class="superfood_box_proteinpowder">
                    <a class="box_link" href="{{url('blog')}}">PROTEIN POWDER</a>
                </div>
                <div class="superfood_box_superfood">
                    <a class="box_link" href="{{url('blog')}}">SUPER FOOD</a>
                </div>
                <div class="superfood_box_underthesea">
                    <a class="box_link" href="{{url('blog')}}">UNDER THE SEA</a>
                </div>
                <div class="superfood_box_whatdoineed">
                    <a class="box_link" href="{{url('blog')}}">WHAT DO I NEED</a>
                </div>
                <div class="superfood_box_gowiththeseason">
                    <a class="box_link" href="{{url('blog')}}">GO WITH THE SEASON</a>
                </div>

        </div>

    </div>

@endsection