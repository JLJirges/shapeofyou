<div class="profile_info_section">
    <!-- Profile Picture -->
    <div class="profile_info_section_images">
        @if($user->profilepic)
        <div style="background-image:url({{asset('images/uploads/' . $user->profilepic)}});background-size:cover; background-position:center;"
             class="profile_picture">
            <span class="show_username_profile">{{$user->username}}</span>
        </div>
        @else
        <div href="{{url('profile/' . $user->username)}}"
             style="background-image:url({{ asset ('images/profile/default_secret.png')}});background-size:cover; background-position:center;"
             class="backend_profile_picture_overview">
            <span class="show_username_profile">{{$user->username}}</span>
        </div>
        @endif

        <!-- Body Shape -->
        <div class="profile_personal_section">
            <p>Body Shape</p>
            @if(($user->UserShape === 0) || ($user->UserShape === NULL))
            <img alt="shape" src="{{asset('images/profile/default_secret.png')}}">
            @elseif($user->UserShape === 1)
            <img alt="shape" src="{{asset('images/profile/pear_shape.png')}}">
            @elseif($user->UserShape === 2)
            <img alt="shape" src="{{asset('images/profile/apple_shape.png')}}">
            @elseif ($user->UserShape === 3)
            <img alt="shape" src="{{asset('images/profile/hourglass_shape.png')}}">
            @elseif ($user->UserShape === 4)
            <img alt="shape" src="{{asset('images/profile/stick_shape.png')}}">
            @endif
        </div>

        <!-- Diet -->
        <div class="profile_personal_section">
            <p>Diet</p>
            @if(($user->UserDiet === 0) || ($user->UserDiet === NULL))
            <img alt="diet" src="{{asset('images/profile/default_secret.png')}}">
            @elseif($user->UserDiet === 1)
            <img alt="diet" src="{{asset('images/profile/nospecialdiet.png')}}">
            @elseif($user->UserDiet === 2)
            <img alt="diet" src="{{asset('images/profile/pescetarian.png')}}">
            @elseif ($user->UserDiet === 3)
            <img alt="diet" src="{{asset('images/profile/vegan.png')}}">
            @elseif ($user->UserDiet === 4)
            <img alt="diet" src="{{asset('images/profile/vegetarian.png')}}">
            @endif
        </div>

        <!-- Goal -->
        <div class="profile_personal_section">
            <p>Goal</p>
            @if(($user->UserGoal === 0) || ($user->UserGoal === NULL))
            <img alt="goal" src="{{asset('images/profile/default_secret.png')}}">
            @elseif($user->UserGoal === 1)
            <img alt="goal" src="{{asset('images/profile/lose_weight.png')}}">
            @elseif($user->UserGoal === 2)
            <img alt="goal" src="{{asset('images/profile/become_fit.png')}}">
            @elseif ($user->UserGoal === 3)
            <img alt="goal" src="{{asset('images/profile/build_muscles.png')}}">
            @elseif ($user->UserGoal === 4)
            <img alt="goal" src="{{asset('images/profile/healthy_lifestyle.png')}}">
            @endif
        </div>

    </div>

    <div class="profile_section_personal">
        <div>
            <p>MOTIVATION QUOTE</p>
            <p class="profile_section_personal_motivation_quote">@if($user->mq){{ $user->mq }} @else
                'No motivational quote in Profile Settings defined...' @endif</p>
        </div>

        <div class="profile_info_section_personal_details">
            <div>
                <p>ORIGIN:</p>
            </div>
            <div>
                <p> @if($user->origin){{ $user->origin }} @else no origin defined @endif</p>
            </div>
        </div>
    </div>
</div>