<?php

namespace App\Http\Controllers;

use App\Diary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;

class ProfileBuddiesController extends Controller
{
    public function my_buddies_view()
    {
        $data = [
            'user' => Auth::user(),
            'users' => \DB::table('users')->where('id', '!=', Auth::user()->id)->where(
                ['UserDiet' => Auth::user()->UserDiet,
                    'UserGoal' => Auth::user()->UserGoal,
                    'UserShape' => Auth::user()->UserShape])->get(),

        ];


        return view('profile/buddiesprofile')->with($data);
    }

    public function other_buddies_view($username)
    {
        $this_user = \DB::table('users')->where('username', $username)->get();

        $data = [
            'user' => \DB::table('users')->where('username', $username)->first(),
            'users' => \DB::table('users')->where('username', '!=', $username)->where(
                ['UserDiet' => $this_user->first()->UserDiet,
                    'UserGoal' => $this_user->first()->UserGoal,
                    'UserShape' => $this_user->first()->UserShape])->get(),
        ];


        return view('profile/buddiesprofile')->with($data);
    }
}
