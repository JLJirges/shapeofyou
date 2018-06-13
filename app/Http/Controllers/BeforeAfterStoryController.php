<?php

namespace App\Http\Controllers;

use App\BeforeAfterStory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;

class BeforeAfterStoryController extends Controller
{

    public function create()
    {

        return view('/beforeafterprofile');
    }

    public function store(request $request)
    {

        $this->validate(request(), [
            'BeforeAfterStoryTitle' => 'required|string|max:20',
            'BeforeAfterStoryContent' => 'required|string|max:2000',
            'BeforeAfterStoryImageOne' => 'required',
            'BeforeAfterStoryImageTwo' => 'required'

        ]);

        if (($request->hasFile('BeforeAfterStoryImageOne')) && ($request->hasFile('BeforeAfterStoryImageTwo'))) {

            $request->file('BeforeAfterStoryImageOne')->move(("images\\uploads_stories\\"), $request->file('BeforeAfterStoryImageOne')->getClientOriginalName());
            $filename_one = $request->file('BeforeAfterStoryImageOne')->getClientOriginalName();
            $request->file('BeforeAfterStoryImageTwo')->move(("images\\uploads_stories\\"), $request->file('BeforeAfterStoryImageTwo')->getClientOriginalName());
            $filename_two = $request->file('BeforeAfterStoryImageTwo')->getClientOriginalName();

            BeforeAfterStory::create([
                'BeforeAfterStoryTitle' => request('BeforeAfterStoryTitle'),
                'BeforeAfterStoryContent' => request('BeforeAfterStoryContent'),
                'BeforeAfterStoryImageOne' => $filename_one,
                'BeforeAfterStoryImageTwo' => $filename_two,
                'BeforeAfterStoryUserId' => Auth::id()
            ]);

        }

        \Session::flash('flash_message', 'Story upload successful!');
        return redirect()->to('/beforeafterprofile');
    }




    public function deleteBasComment($bas_id, $bas_comment_id)
    {

        \DB::table('beforeafterestories')->where('id', $bas_id);
        $bas_comment = \DB::table('bascomment')->where([
            'id'=> $bas_comment_id,
            'BASId' => $bas_id
        ]);

        $bas_comment->delete();

        return redirect()->to('beforeafter/' . $bas_id);
    }

    public function deleteBasEntry($bas_id)
    {

        $bas_entry = \DB::table('beforeafterstories')->where('id', $bas_id);
        $bas_comments = \DB::table('bascomment')->where('BASId', $bas_id);

        $bas_entry->delete();

        return redirect()->to('beforeafteroverview/beforeafterstories/');
    }

    public function deleteBasFromBackend($bas_id)
    {

        $bas_entry = \DB::table('beforeafterstories')->where('id', $bas_id);
        $bas_comments = \DB::table('bascomment')->where('BASId', $bas_id);

        $bas_entry->delete();

        return redirect()->to('backend/storyoverview');
    }



}
