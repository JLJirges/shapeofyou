<?php

namespace App\Http\Controllers;

use App\Workouts;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;

class WorkoutsController extends Controller
{

    public function create()
    {
        return view('/backend/create');
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

    public function deleteWorkoutComment($workout_id, $workout_comment_id)
    {

        \DB::table('workouts')->where('id', $workout_id);
        $workout_comment = \DB::table('workoutcomment')->where([
            'id'=> $workout_comment_id,
            'WorkoutId' => $workout_id
        ]);

        $workout_comment->delete();

        return redirect()->to('detail/' . $workout_id);
    }

}
