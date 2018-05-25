<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function handlelogin(Request $request){

        $credentials = array('username' => $request->username, 'password' => $request->password);
        if (\Auth::attempt($credentials, true)) {
            return redirect()->to('/profile');
        }else{
            return back()->withErrors([
                'message' => 'Username/Password do not match'
            ]);
        }
    }

    public function logout(){
        \Auth::logout();
        return redirect()->route('login');
    }


}
