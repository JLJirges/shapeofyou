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

    public function workout_view()
    {
        $data = [
            'blogs' => \DB::table('blogs')->get(),
            'workout' => \DB::table('workouts')->get(),
        ];

        return view('workout')->with($data);
    }

    public function detail_view($workout_id)
    {
        // Get blog comments of blog with the BlogId=$id
        // blog_comments is an array of entries of the table 'blogcomment'
        $workout_comments = \DB::table('workoutcomment')
            ->where('WorkoutId', $workout_id);

        // Get UserIds that are in the blog_comments
        // user_ids is an array of UserIds (e.g., [1,2,3])
        $user_ids = $workout_comments->pluck('UserId')->toArray();

        // Get BloggerId
        $blogger_id = \DB::table('workouts')->where('id', $workout_id)->first()->BloggerId;

        // Get all the data needed to pass to the blade view
        $data = [
            // blog_id is in the url
            'workout_id' => $workout_id,

            // I need the blog entry from the 'blogs' table.
            // Go to the Blogs and find the entry where 'id'=$id
            'workout' => \DB::table('workouts')->where('id', $workout_id)->first(),

            'workout_author' => \DB::table('users')->where('id', $blogger_id)->first(),

            // get blog comments ordered by their date
            'workout_comments' => $workout_comments->orderBy('WorkoutCommentDate', 'desc')->get(),

            // get users associated with blog comments
            'users' => \DB::table('users')
                ->whereIn('id', $user_ids)->get(),

            // get authenticated user
            'user_id' => Auth::user()->id,

            // Boolean variable: true if user likes blog, false otherwise
            'user_likes_workout' => \DB::table('user_favorites')
                    ->where(['UserId' => Auth::user()->id, 'type' => 'detail', 'type_id' => $workout_id])->count() > 0
        ];
        return view('detail')->with($data);
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
            'WorkoutHeroImage' =>'',
            'WorkoutImage' => '',
            'WorkoutContentOne' => '',
            'WorkoutContentTwo' => '',
            'created_at' => '',
            'updated_at' => ''
        ]);

        $toUpdate = array_filter($request->all());

        if ($request->hasFile('WorkoutHeroImage')) {

            $request->file('WorkoutHeroImage')->move(("images\\workouts\\"), $request->file('WorkoutHeroImage')->getClientOriginalName());

            $filename = $request->file('WorkoutHeroImage')->getClientOriginalName();
            $toUpdate['WorkoutHeroImage']=$filename;
        }
        if ($request->hasFile('WorkoutImage')) {

            $request->file('WorkoutImage')->move(("images\\workouts\\"), $request->file('WorkoutImage')->getClientOriginalName());

            $filename = $request->file('WorkoutImage')->getClientOriginalName();
            $toUpdate['WorkoutImage']=$filename;
        }

        $workout = Workouts::findOrFail($id);
        $workout->update($toUpdate);

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
