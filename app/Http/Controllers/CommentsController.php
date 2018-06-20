<?php

namespace App\Http\Controllers;

use App\Workouts;
use App\WorkoutComments;
use App\BlogComments;
use App\ Blogs;
use App\Diary;
use App\DiaryComments;
use App\BeforeAfterStory;
use App\BeforeAfterComments;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;

class CommentsController extends Controller
{

    public function create()
    {if (!Auth()->check()) {
        return redirect()->to('/');
    } elseif (Auth::user()->isAdmin !== 1) {
        Auth::logout();
        Session:
        flush();
        return redirect()->to('/');
    } else {
        return view('/backend/create');
    }
    }

    public function store()
    {

        $this->validate(request(), [
            'WorkoutTitle' => 'required|string|max:50',
            'WorkoutCategory' => 'required',
            'BloggerId' => '',
            'WorkoutContentOne' => 'required|string|max:3000',
            'WorkoutContentTwo' => 'required|string|max:3000',
            'created_at' => '',
            'updated_at' => ''

        ]);
        Workouts::create([
            'WorkoutTitle' => request('WorkoutTitle'),
            'WorkoutCategory' => request('WorkoutCategory'),
            'BloggerId' => request('BloggerId'),
            'WorkoutContentOne' => request('WorkoutContentOne'),
            'WorkoutContentTwo' => request('WorkoutContentTwo'),
            'created_at' => '',
            'updated_at' => ''
        ]);
        \Session::flash('newworkout_error_message', 'Workout successfully added to training!');

        return redirect()->to('/backend/create');

    }

    public function edit(Request $request, $id)
    {
        $this->validate(request(), [
            'WorkoutTitle' => '',
            'WorkoutCategory' => '',
            'BloggerId' => '',
            'WorkoutContentOne' => '',
            'WorkoutContentTwo' => '',
            'created_at' => '',
            'updated_at' => ''
        ]);

        $workout = Workouts::findOrFail($id);
        $workout->update(array_filter($request->all()));

        \Session::flash('workout_message', 'Update successful!');
        return redirect()->to('/backend/workout_edit/' . $workout->id);
    }

}
