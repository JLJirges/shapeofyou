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
            'BloggerId' => 'required',
            'WorkoutContentOne' => 'required|string|max:300',
            'WorkoutContentTwo' => 'required|string|max:300',
            'created_at' => '',
            'updated_at' => ''

        ]);
        Workouts::create([
            'WorkoutTitle' => request('WorkoutTitle'),
            'WorkoutCategory' => request('WorkoutCategory'),
            'BloggerId' => \request('BloggerId'),
            'WorkoutContentOne' => request('WorkoutContentOne'),
            'WorkoutContentTwo' => request('WorkoutContentTwo'),
            'created_at' => '',
            'updated_at' => ''
        ]);
        \Session::flash('newworkout_error_message', 'Workout successfully added to training!');

        return redirect()->to('/backend/create');

    }

    /*  public function edit(Request $request)
      {
          $this->validate(request(), [
              'BlogTitle' => 'string|max:50',
              'BlogCategory' => 'required',
              'BlogAuthorName' => 'string|max:50',
              'BlogAuthorBio' => 'string|max:200',
              'BlogAuthorBirthdate' => '',
              'BlogAuthorImage' => '',
              'BlogAuthorOrigin' => 'string|max:50',
              'BlogHeroImage' => '',
              'BlogImage' => '',
              'BlogContentOne' => 'string|max:300',
              'BlogContentTwo' => 'string|max:300'
          ]);



          $blogs = Blogs::findOrFail(\Auth::blogs() -> id);
          $blogs->update($request->all());
          return redirect()->to('/backend/dashboard');
      }*/

}
