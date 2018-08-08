<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;

class RegisterController extends Controller
{

    public function create()
    {
        if (Auth()->check()) {
            return redirect()->to('profile');
        } else {
            return view('register');
        }
    }

    public function store()
    {
        $this->validate(request(), [
            'firstname' => 'required|string|max:50',
            'lastname' => 'required|string|max:50',
            'username' => 'unique:users|required|string|max:50',
            'email' => 'unique:users|required|email',
            'password' => 'required|min:4|confirmed',
            'isAdmin' => '',
            'BloggerBio' => 'max: 1000',
            'AdminText' => 'max: 1000'
        ]);
        User::create([
            'firstname' => request('firstname'),
            'lastname' => request('lastname'),
            'username' => request('username'),
            'email' => request('email'),
            'password' => request('password'),
        ]);
        \Session::flash('flash_message', 'User registration successful!');

        // Authenticate/Login right away
        $credentials = array('username' => request('username'), 'password' => request('password'));
        if (\Auth::attempt($credentials, true)) {
            return redirect()->to('/helpprofile');
        } else {
            return back()->withErrors([
                'message' => 'Username/Password do not match'
            ]);
        }
    }

    public function store_new_user()
    {

        $this->validate(request(), [
            'firstname' => 'required|string|max:50',
            'lastname' => 'required|string|max:50',
            'username' => 'unique:users|required|string|max:50',
            'email' => 'unique:users|required|email',
            'password' => 'required',
            'isAdmin' => ''
        ]);
        User::create([
            'firstname' => request('firstname'),
            'lastname' => request('lastname'),
            'username' => request('username'),
            'email' => request('email'),
            'password' => request('password'),
            'isAdmin' => request('isAdmin')
        ]);
        \Session::flash('newuser_error_message', 'User registration successful!');

        $data = [
            'admin_users' => \DB::table('users')->where('isAdmin', 1)->get()
        ];

        return view('backend/create')->with($data);

    }

    public function settings_view()
    {
        if (!Auth()->check()) {
            return redirect()->to('/');
        } else {

            return view('profile/settingsprofile');
        }
    }

    public function edit(Request $request)
    {

        $this->validate(request(), [
            'firstname' => 'string|max:50',
            'lastname' => 'string|max:50',
            'username' => 'unique:users|string|max:50',
            'email' => 'unique:users|email',
            'password' => 'min:4|confirmed',
            'mq' => 'string',
            'profilepic' => '',
            'birthdate' => 'date',
            'origin' => 'string|max:50',
            'UserDiet' => '',
            'UserGoal' => '',
            'UserShape' => '',
            'BloggerBio' => 'max: 1000',
            'AdminText' => 'max: 1000'
        ]);

        $toUpdate = array_filter($request->all());

        if ($request->hasFile('profilepic')) {

            $request->file('profilepic')->move(("images" . DIRECTORY_SEPARATOR .  "uploads" . DIRECTORY_SEPARATOR), $request->file('profilepic')->getClientOriginalName());

            $filename = $request->file('profilepic')->getClientOriginalName();
            $toUpdate['profilepic'] = $filename;
        }


        $user = User::findOrFail(\Auth::user()->id);
        $user->update($toUpdate);


        return redirect()->to('/settingsprofile');
    }

    public function edit_user(Request $request, $id)
    {


        $toUpdate = array_filter($request->all());


        $this->validate(request(), [

            'firstname' => 'string|max:50|nullable',
            'lastname' => 'string|max:50|nullable',
            'username' => 'unique:users|string|max:50|nullable',
            'email' => 'unique:users|email|nullable',
            'password' => 'min:4|confirmed|nullable',
            'mq' => 'string|nullable',
            'profilepic' => 'nullable',
            'birthdate' => 'date|nullable',
            'origin' => 'string|max:50|nullable',
            'UserDiet' => '',
            'UserGoal' => '',
            'UserShape' => '',
            'isAdmin' => '',
            'BloggerBio' => 'max: 1000|nullable',
            'AdminText' => 'max: 1000|nullable'
        ]);



        if ($request->hasFile('profilepic')) {

            $request->file('profilepic')->move(("images" . DIRECTORY_SEPARATOR .  "uploads" . DIRECTORY_SEPARATOR), $request->file('profilepic')->getClientOriginalName());

            $filename = $request->file('profilepic')->getClientOriginalName();
            $toUpdate['profilepic'] = $filename;
        }

        $user = User::findOrFail($id);
        $user->update($toUpdate);
     //   $user->update(array_filter($request->all()));
       // return redirect()->to('/backend/user_edit/' . $user->id);
        return redirect()->to('/backend/useroverview');
    }

    public function deleteCommunitymember($id)
    {
        $user = \DB::table('users')->where('id', $id);

        $user->delete();
        \DB::table('beforeafterstories')->where('BeforeAfterStoryUserId', $id)->delete();
        \DB::table('diaries')->where('DiaryUserId', $id)->delete();
        \DB::table('bascomment')->where('UserId', $id)->delete();
        \DB::table('blogcomment')->where('UserId', $id)->delete();
        \DB::table('diarycomment')->where('UserId', $id)->delete();
        \DB::table('workoutcomment')->where('UserId', $id)->delete();
        \DB::table('user_favorites')->where('UserId', $id)->delete();
        \DB::table('workouts')->where('BloggerId', $id)->delete();
        \DB::table('blogs')->where('BloggerId', $id)->delete();


        return redirect()->to('/backend/useroverview')->with('global', 'Community member deleted...');

    }


}
