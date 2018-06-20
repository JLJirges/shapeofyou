<?php

namespace App\Http\Controllers;

use App\Diary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;

class ProfileBlogsController extends Controller
{

    public function my_blogs_view()
    {
        if (!Auth()->check()) {
            return redirect()->to('/');
        } else {
            $data = [
                'user' => Auth::user(),
                'blogs' => \DB::table('blogs')->get(),
                'fave_blog_ids' => \DB::table('user_favorites')->where('UserId', Auth::user()->id)->pluck('type_id')->toArray()
            ];

            return view('profile/blogoverviewprofile')->with($data);
        }
    }

    public function other_blogs_view($username)
    {
        if (!Auth()->check()) {
            return redirect()->to('/');
        } else {
            $user_id = \DB::table('users')->where('username', $username)->first()->id;
            $data = [
                'user' => \DB::table('users')->where('username', $username)->first(),
                'users' => \DB::table('users')->get(),
                'blogs' => \DB::table('blogs')->get(),
                'fave_blog_ids' => \DB::table('user_favorites')->where('UserId', $user_id)->pluck('type_id')->toArray()
            ];
            return view('profile/blogoverviewprofile')->with($data);
        }
    }

}
