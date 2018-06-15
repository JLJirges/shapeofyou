@extends('layouts.gallery')

@section('title')
    <title>SHAPE OF YOU | Gallery</title>
@endsection

@section('content')
    <div class="gallery_overlay_background">
        <img class="prev_gallery" src="{{asset('images/prev_icon.png')}}" width="70" height="70">
        <div class="slide_box_gallery">

            <ul class="slide_list_gallery">
                @foreach($event_images as $event_image)
                    <li class="page_gallery"
                        style="background-image:url({{asset('images/event_gallery/' . $event_image->GalleryImage)}}); background-size: contain; background-repeat: no-repeat">
                    </li>
                @endforeach
            </ul>

        </div>
        <img class="next_gallery" src="{{asset('images/next_icon.png')}}" width="70" height="70">

    </div>

@endsection

