<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    @include('layouts.meta')

    @yield('title')

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    @yield('css')

    <script async src="{{ asset('js/app.js') }}"></script>

    @yield('scripts')
    <script>
        window.addEventListener("load", function () {
            window.cookieconsent.initialise({
                "palette": {
                    "popup": {"background": "rgba(255,140,0,0.8)", "text": "#000000"},
                    "button": {"background": "#000000", "text": " 	#FFA500"}
                },
                "content": {
                    "message": "SHAPE OF YOU uses cookies to ensure you get the best experience on our website.",
                    "link": "Read more"
                }
            })
        });

    </script>
</head>


<body>


@include('partials.header')


<main class="content">

    @yield('content')


</main>


@include('partials.footer')

</body>
</html>
