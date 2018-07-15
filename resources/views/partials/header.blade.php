<div class="nav nav-links">
    <a href="{{ url('superfood') }}">Our Blogs</a>
    <a href="{{ url('workout') }}">Workout</a>
    <a href="{{ url('community') }}">Community</a>
    <a href="{{ url('') }}">
        <img class="logo_header" src="{{ asset('images/headerfooter/Logo.png') }}" alt="logo">
    </a>
    <a href="{{ url ('meetups') }}">Meetups</a>
    @if( (auth()->check()) && (Auth::user()->isAdmin === 1) )
        <a href="{{ url('profile') }}">Profile</a>
        <a href="{{ url('dashboard') }}">Backend</a>
    @elseif( (auth()->check()))
        <a href="{{ url('profile') }}">Profile</a>
        <a href="{{ url('logout') }}">Log Out</a>
    @else
        <a href="{{ url('login') }}">Login</a>
        <a href="{{ url('register') }}">Start now</a>
    @endif
</div>

<div class="responsive-nav">
    <div>
        <a href="{{ url('') }}">
            <img width="100" height="100" src="{{ asset('images/headerfooter/Logo_2.png') }}" alt="mobile logo">
        </a>
        <a>
            <img id="burgericon" class="burgericon" width="80" height="80"
                 src="{{ asset('images/headerfooter/burger_icon.png') }}" alt="burger icon">
        </a>
    </div>
    <ul id="responsive_nav">
        <li><a href="{{ url('superfood') }}">Our Blogs</a></li>
        <li><a href="{{ url('workout') }}">Workout</a></li>
        <li><a href="{{ url('community') }}">Community</a></li>
        <li><a href="{{ url ('meetups') }}">Meetups</a></li>
        @if( (auth()->check()) && (Auth::user()->isAdmin === 1) )
           <li> <a href="{{ url('profile') }}">Profile</a></li>
            <li> <a href="{{ url('dashboard') }}">Backend</a></li>
        @elseif( (auth()->check()))
            <li><a href="{{ url('profile') }}">Profile</a></li>
            <li><a href="{{ url('/logout') }}">Log Out</a></li>
        @else
            <li><a href="{{ url('login') }}">Login</a></li>
            <li><a href="{{ url('register') }}">Start now</a></li>
        @endif
    </ul>
</div>


