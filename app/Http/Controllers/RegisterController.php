<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
            'username' => 'required|string|max:50',
            'email' => 'required|email',
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

        return redirect()->to('/profile');

    }

    public function edit(Request $request)
    {
        $this->validate(request(), [
            'firstname' => 'string|max:50',
            'lastname' => 'string|max:50',
            'username' => 'string|max:50',
            'email' => 'email',
            'password' => '',
            'mq' => 'string',
            'profilepic' => '',
            'birthdate' => 'date',
            'origin' => 'string|max:50',
            'User-Diet' => '',
            'User-Goal' => '',
            'User-Shape' => ''
        ]);

        $user = User::findOrFail(\Auth::user() -> id);
        $user->update($request->all());
        return redirect()->to('/settingsprofile');
    }

}
