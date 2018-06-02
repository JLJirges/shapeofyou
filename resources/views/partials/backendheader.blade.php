<div class="nav nav-links">
    <a href="{{ url('dashboard') }}">
        <img class="logo_header" src="{{ asset('images/headerfooter/Logo.png') }}" alt="logo">
    </a>
    <a href="{{ url('') }}">Frontend</a>


    <a href="{{ url('logout') }}">Log Out</a>

</div>

<div class="responsive-nav">
    <div>
        <a href="{{ url('dashboard') }}">
            <img width="100" height="100" src="{{ asset('images/headerfooter/Logo_2.png') }}" alt="mobile logo">
        </a>
        <a>
            <img id="burgericon" class="burgericon" width="100" height="100"
                 src="{{ asset('images/headerfooter/burger_icon.png') }}" alt="burger icon">
        </a>
    </div>
    <ul id="responsive_nav">
       
        <li><a href="{{ url('') }}">Frontend</a></li>
        <li><a href="{{ url('logout') }}">Log Out</a></li>
    </ul>
</div>


