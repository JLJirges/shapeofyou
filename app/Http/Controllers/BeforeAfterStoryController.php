<?php

namespace App\Http\Controllers;

use App\BeforeAfterStory;
use Illuminate\Http\Request;
use App\User;

class BeforeAfterStoryController extends Controller
{

    public function create()
    {

        return view('/beforeafterprofile');
    }

    public function store()
    {

        $this->validate(request(), [
            'BeforeAfterStoryTitle' => 'required|string|max:20',
            'BeforeAfterStoryContent' => 'required|string|max:500',
            'StoryOneToUpload' => 'required',
            'StoryTwoToUpload' => 'required'


        ]);
        BeforeAfterStory::create([
            'BeforeAfterStoryTitle' => request('BeforeAfterStoryTitle'),
            'BeforeAfterStoryContent' => request('BeforeAfterStoryContent'),
            'BeforeAfterStoryImageOne' => request('StoryOneToUpload'),
            'BeforeAfterStoryImageTwo' => request('StoryTwoToUpload')
        ]);

        \Session::flash('flash_message', 'Story upload successful!');
        return redirect()->to('/beforeafterprofile');
    }

    public function upload_photo_one(Request $request)
    {

        if ($request->hasFile('StoryOneToUpload')) {
            // Read image
            $image = $request->file('StoryOneToUpload');

            // Get filename
            $filename = $image->getClientOriginalName();

            // Insert filename in database
            \DB::table('beforeafterstories')
                ->where('BeforeAfterStoryUserId', \Auth::user()->id)
                ->update(['BeforeAfterStoryImageOne' => $filename]);

            // Save  Image locally
            $request->StoryOneToUpload->move(public_path('images/uploads/'), $filename);
        }

    }

    public function upload_photo_two(Request $request)
    {

        if ($request->hasFile('StoryTwoToUpload')) {
            // Read image
            $image = $request->file('StoryTwoToUpload');

            // Get filename
            $filename = $image->getClientOriginalName();

            // Insert filename in database
            \DB::table('beforeafterstories')
                ->where('BeforeAfterStoryUserId', \Auth::user()->id)
                ->update(['BeforeAfterStoryImageTwo' => $filename]);

            // Save  Image locally
            $request->StoryTwoToUpload->move(public_path('images/uploads/'), $filename);
        }
        return redirect()->to('/beforeafterprofile');
    }






}
