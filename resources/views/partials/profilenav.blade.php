<div>
    @if($user->username === Auth::user()->username)
        <div class="profile_navigation">
            <div>
                <a href="{{ url ('profile')}}">My Diary</a>
            </div>
            <div>
                <a href="{{ url ('beforeafterprofile')}}">Before/After</a>
            </div>
            <div>
                <a href="{{ url ('motivationprofile')}}">Motivation</a>
            </div>
            <div>
                <a href="{{ url ('blogoverviewprofile')}}">My Blogs</a>
            </div>
            <div>
                <a href="{{ url ('workoutprofile')}}">My Workout</a>
            </div>
            <div>
                <a href="{{ url ('buddiesprofile')}}">My Buddies</a>
            </div>
            <div>
                <a href="{{ url ('settingsprofile')}}">Settings</a>
            </div>
            <div>
                <a href="{{ url ('helpprofile')}}">Help</a>
            </div>
            <div>
                <a href="{{ url('logout') }}">Logout</a>
            </div>
        </div>
    @else
        <div class="profile_navigation">
            <div>
                <a href="{{ url ('profile/' . $user->username)}}">Diary</a>
            </div>
            <div>
                <a href="{{ url ('beforeafterprofile/' . $user->username)}}">Stories</a>
            </div>
            <div>
                <a href="{{ url ('blogoverviewprofile/' . $user->username)}}">Blogs</a>
            </div>
            <div>
                <a href="{{ url ('workoutprofile/' . $user->username)}}">Workout</a>
            </div>
            <div>
                <a href="{{ url ('buddiesprofile/' . $user->username)}}">Buddies</a>
            </div>
        </div>
    @endif

    <div class="responsive-profile-nav">
        <div>
            <a>
                <img id="profileicon" class="burgericon" width="60" height="60"
                     src="{{ asset('images/user_icon.png') }}" alt="burger icon">
            </a>
        </div>
        @if($user->username === Auth::user()->username)

            <ul id="responsive-profile-nav">

                <li><a href="{{ url('profile') }}">My Profile</a></li>
                <li><a href="{{ url('beforeafterprofile') }}">Stories</a></li>
                <li><a href="{{ url('motivationprofile') }}">Motivation</a></li>
                <li><a href="{{ url ('blogoverviewprofile') }}">My Blogs</a></li>
                <li><a href="{{ url('workoutprofile') }}">Workout</a></li>
                <li><a href="{{ url('buddiesprofile') }}">Buddies</a></li>
                <li><a href="{{ url('settingsprofile') }}">Settings</a></li>
                <li><a href="{{ url('logout') }}">Logout</a></li>
            </ul>
        @else
            <ul id="responsive-profile-nav">
                <li><a href="{{ url('profile/' . $user->username) }}">Profile</a></li>
                <li><a href="{{ url('beforeafterprofile/' . $user->username) }}">Stories</a></li>
                <li><a href="{{ url ('blogoverviewprofile/' . $user->username) }}">Blogs</a></li>
                <li><a href="{{ url('workoutprofile/' . $user->username) }}">Workout</a></li>
                <li><a href="{{ url('buddiesprofile/' . $user->username) }}">Buddies</a></li>
            </ul>
        @endif
    </div>
</div>