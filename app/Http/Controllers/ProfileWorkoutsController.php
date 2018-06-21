<?php

namespace App\Http\Controllers;

use App\Diary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;

class ProfileWorkoutsController extends Controller
{

    public function my_workout_view()
    {
        if (!Auth()->check()) {
            return redirect()->to('/');
        } else {
            $data = [
                'user' => Auth::user(),
                'workouts' => \DB::table('workouts')->get(),
                'fave_workout_ids' => \DB::table('user_favorites')->where('UserId', Auth::user()->id)->pluck('type_id')->toArray()
            ];

            return view('profile/workoutprofile')->with($data);
        }
    }

    public function other_workout_view($username)
    {
        $user_exists = \DB::table('users')
                ->where('username', $username)->count() > 0;

        if (!$user_exists) {
            return redirect()->to('community');
        }

        if (!Auth()->check()) {
            return redirect()->to('/');
        } else {
            $user_id = \DB::table('users')->where('username', $username)->first()->id;

            $data = [
                'user' => \DB::table('users')->where('username', $username)->first(),
                'workouts' => \DB::table('workouts')->get(),
                'fave_workout_ids' => \DB::table('user_favorites')->where('UserId', $user_id)->pluck('type_id')->toArray()
            ];

            return view('profile/workoutprofile')->with($data);
        }
    }

}
