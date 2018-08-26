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
        if (!Auth()->check()) {
            return redirect()->to('login');
        } else {
            return view('/beforeafterprofile');
        }
    }

    public function my_bas_view()
    {if (!Auth()->check()) {
        return redirect()->to('login');
    } else {
        $data = [
            'user' => Auth::user(),
            'bas' => \DB::table('beforeafterstories')->where('BeforeAfterStoryUserId', Auth::user()->id)->orderBy('created_at', 'desc')->get()
        ];
        return view('profile/beforeafterprofile')->with($data);
    }
    }

    public function other_bas_view($username)
    {
        if (!Auth()->check()) {
        return redirect()->to('login');
    } else {
        $user_id = \DB::table('users')->where('username', $username)->first()->id;
        $data = [
            'user' => \DB::table('users')->where('username', $username)->first(),
            'bas' => \DB::table('beforeafterstories')->where('BeforeAfterStoryUserId', $user_id)->orderBy('created_at', 'desc')->get()
        ];
        return view('profile/beforeafterprofile')->with($data);
    }
    }

    public function detail_bas_view($bas_id)
    {

        $bas_exists = \DB::table('beforeafterstories')
                ->where('id', $bas_id)->count() > 0;

        if (!$bas_exists) {
            return redirect()->to('community');
        }

        if (!Auth()->check()) {
        return redirect()->to('register');
    } else {

        $bas_comments = \DB::table('bascomment')
            ->where('BASId', $bas_id);

        $user_ids = $bas_comments->pluck('UserId')->toArray();

        $blogger_id = \DB::table('beforeafterstories')->where('id', $bas_id)->first()->BeforeAfterStoryUserId;

        $data = [
            'bas_id' => $bas_id,
            'bas' => \DB::table('beforeafterstories')->where('id', $bas_id)->first(),

            'bas_author' => \DB::table('users')->where('id', $blogger_id)->first(),
            'bas_comments' => $bas_comments->orderBy('BASDate', 'desc')->get(),

            'users' => \DB::table('users')
                ->whereIn('id', $user_ids)->get(),

            'user_id' => Auth::user()->id,

        ];
        return view('beforeafter')->with($data);
    }
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

            $request->file('BeforeAfterStoryImageOne')->move(("images" . DIRECTORY_SEPARATOR . "uploads_stories" . DIRECTORY_SEPARATOR), $request->file('BeforeAfterStoryImageOne')->getClientOriginalName());
            $filename_one = $request->file('BeforeAfterStoryImageOne')->getClientOriginalName();
            $request->file('BeforeAfterStoryImageTwo')->move(("images" . DIRECTORY_SEPARATOR . "uploads_stories" . DIRECTORY_SEPARATOR), $request->file('BeforeAfterStoryImageTwo')->getClientOriginalName());
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
