<?php

namespace App\Http\Controllers;

use App\BeforeAfterStory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;


class OverviewController extends Controller
{

    public function diary_overview($type)
    {

        if (!Auth()->check()) {
            return redirect()->to('register');
        } else {
            $data = [
                'users' => \DB::table('users')->where('id', '!=', Auth::user()->id),
                'diaries' => \DB::table('diaries')->get(),
                'beforeafterstories' => \DB::table('beforeafterstories'),
                'type' => $type,
            ];

            return view('usertalkoverview')->with($data);
        }
    }

    public function bas_overview($type)
    {
        if (!Auth()->check()) {
        return redirect()->to('register');
    } else {
        $data = [
            'user' => Auth::user(),
            'diaries' => \DB::table('diaries')->get(),
            'beforeafterstories' => \DB::table('beforeafterstories')->orderBy('created_at', 'desc')->get(),
            'users' => \DB::table('users')->where('id', '!=', Auth::user()->id),
            'type' => $type,
        ];

        return view('beforeafteroverview')->with($data);
    }
    }

    public function workout_overview($workout_category)
    {
        $category_exists = \DB::table('workouts')
                ->where('WorkoutCategory', $workout_category)->count() > 0;

        if (!$category_exists) {
            return redirect()->to('workouts');
        }

        if (!Auth()->check()) {
            return redirect()->to('register');
        } else {
            $data = [
                'workouts' => \DB::table('workouts'),
                'workout_category' => $workout_category
            ];

            return view('overview')->with($data);
        }
    }

    public function user_overview($type, $type_id)
    {
        if (!Auth()->check()) {
            return redirect()->to('register');
        } else {
            $data = [
                'user' => Auth::user(),
                'users' => \DB::table('users')->where('id', '!=', Auth::user()->id)->where($type, $type_id)->get(),
                'type' => $type,
                'type_id' => $type_id
            ];

            return view('useroverview')->with($data);
        }
    }

    public function allusers_overview()
    {
        if (!Auth()->check()) {
            return redirect()->to('register');
        } else {
            $data = [
                'user' => Auth::user(),
                'users' => \DB::table('users')->where('id', '!=', Auth::user()->id)->get()
            ];

            return view('useroverview')->with($data);
        }
    }

    public function buddy_overview()
    {
        if (!Auth()->check()) {
            return redirect()->to('register');
        } else {
            $data = [
                'user' => Auth::user(),
                'users' => \DB::table('users')->where('id', '!=', Auth::user()->id)->where(
                    ['UserDiet' => Auth::user()->UserDiet,
                        'UserGoal' => Auth::user()->UserGoal,
                        'UserShape' => Auth::user()->UserShape])->get(),

            ];

            return view('useroverview')->with($data);
        }
    }

}
