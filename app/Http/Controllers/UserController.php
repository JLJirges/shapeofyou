<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;

class UserController extends Controller
{

    public function edit (Request $request, $id)
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
            'isAdmin' => '',
            'AdminText' => 'max: 1000'
        ]);

        $toUpdate = array_filter($request->all());

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



}
