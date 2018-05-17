<div class="nav nav-links">
    <a href="{{ url('superfood') }}">Super Food</a>
    <a href="{{ url('workout') }}">Workout</a>
    <a href="{{ url('community') }}">Community</a>
    <a href="{{ url('') }}">
        <img class="logo_header" src="{{ asset('images/headerfooter/Logo.png') }}" alt="logo">
    </a>
    <a href="{{ url ('meetups') }}">Meetups</a>
    <a href="{{ url('profile') }}">Login</a>
    <a href="{{ url('register') }}">Start now</a>
</div>

<div class="responsive-nav">
    <div>
        <a href="{{ url('') }}">
            <img width="100" height="100" src="{{ asset('images/headerfooter/Logo_2.png') }}" alt="mobile logo">
        </a>
        <a>
            <img id="burgericon" class="burgericon" width="100" height="100" src="{{ asset('images/headerfooter/burger_icon.png') }}" alt="burger icon">
        </a>
    </div>
    <ul id="responsive_nav">
        <li><a href="{{ url('superfood') }}">Super Food</a></li>
        <li><a href="{{ url('workout') }}">Workout</a></li>
        <li><a href="{{ url('community') }}">Community</a></li>
        <li><a href="{{ url ('meetups') }}">Meetups</a></li>
        <li><a href="{{ url('profile') }}">Login</a></li>
        <li><a href="{{ url('register') }}">Start now</a></li>
    </ul>
</div>


