<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{

    public function create()
    {
        return view('register');
    }

    public function store()
    {
        $this->validate(request(), [
            'firstname' => 'required|string|max:50',
            'lastname' => 'required|string|max:50',
            'username' => 'unique:users|required|string|max:50',
            'email' => 'unique:users|required|email',
            'password' => 'required',
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
            return redirect()->to('/profile');
        }else{
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
        ]);
        User::create([
            'firstname' => request('firstname'),
            'lastname' => request('lastname'),
            'username' => request('username'),
            'email' => request('email'),
            'password' => request('password'),
        ]);
        \Session::flash('newuser_error_message', 'User registration successful!');

        return view('backend/create');
    }

    public function edit(Request $request)
    {
        $this->validate(request(), [
            'firstname' => 'string|max:50',
            'lastname' => 'string|max:50',
            'username' => 'string|max:50',
            'email' => 'email',
            'password' => 'min:4|confirmed',
            'mq' => 'string',
            'profilepic' => '',
            'birthdate' => 'date',
            'origin' => 'string|max:50',
            'UserDiet' => '',
            'UserGoal' => '',
            'UserShape' => ''
        ]);

        $user = User::findOrFail(\Auth::user()->id);
        $user->update($request->all());
        return redirect()->to('/settingsprofile');
    }

    public function upload_photo(Request $request)
    {

        if ($request->hasFile('ProfileToUpload')) {
            // Read image
            $image = $request->file('ProfileToUpload');

            // Get filename
            $filename = $image->getClientOriginalName();

            // Insert filename in database
            \DB::table('users')
                ->where('id', \Auth::user()->id)
                ->update(['profilepic' => $filename]);

            // Save  Image locally
            $request->ProfileToUpload->move(public_path('images/uploads/'), $filename);
        }
        return redirect()->to('/settingsprofile');
    }




}
