<?php

namespace App\Http\Controllers;

use App\Workouts;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;

class WorkoutsController extends Controller
{

    public function create()
    {
        return view('/backend/create');
    }

    public function store(Request $request)
    {

        $this->validate(request(), [
            'WorkoutTitle' => 'required|string|max:50',
            'WorkoutCategory' => 'required',
            'BloggerId' => '',
            'WorkoutHeroImage' => '',
            'WorkoutImage' => 'required',
            'WorkoutContentOne' => 'required|string|max:3000',
            'WorkoutContentTwo' => 'required|string|max:3000',
            'created_at' => '',
            'updated_at' => ''

        ]);

        if (($request->hasFile('WorkoutHeroImage')) && ($request->hasFile('WorkoutImage'))) {

            $request->file('WorkoutHeroImage')->move(("images\\workout\\"), $request->file('WorkoutHeroImage')->getClientOriginalName());
            $filename_workouthero = $request->file('WorkoutHeroImage')->getClientOriginalName();
            $request->file('WorkoutImage')->move(("images\\workout\\"), $request->file('WorkoutImage')->getClientOriginalName());
            $filename_workoutimage = $request->file('WorkoutImage')->getClientOriginalName();

            Workouts::create([
                'WorkoutTitle' => request('WorkoutTitle'),
                'WorkoutCategory' => request('WorkoutCategory'),
                'BloggerId' => request('BloggerId'),
                'WorkoutHeroImage' => $filename_workouthero,
                'WorkoutImage' => $filename_workoutimage,
                'WorkoutContentOne' => request('WorkoutContentOne'),
                'WorkoutContentTwo' => request('WorkoutContentTwo'),
                'created_at' => '',
                'updated_at' => ''
            ]);

        }
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

    public function deleteWorkout($workout_id)
    {

        $workout = \DB::table('workouts')->where('id', $workout_id);

        $workout->delete();

        return redirect()->to('/backend/workoutoverview');
    }

}
