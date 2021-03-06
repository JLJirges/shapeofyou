<?php

namespace App\Http\Controllers;

use App\Diary;
use App\FutureLetter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;

class MotivationController extends Controller
{

    public function view()
    {
        if (!Auth()->check()) {
            return redirect()->to('login');
        } else {
            $data =[
                'user' => Auth::user()
            ];
            return view('profile/motivationprofile')->with($data);
        }
    }

    public function FutureLetter() {


        $this->validate(request(), [
            'LetterTitle' => 'required|max:50',
            'LetterContent' => 'required|string',
            'created_at' => '',
            'received_at' => 'required'
        ]);
        FutureLetter::create([
            'LetterTitle' => request ('LetterTitle'),
            'LetterContent' => request ('LetterContent'),
            'created_at' => '',
            'received_at' => request ('received_at'),
            'UserId' => Auth::id()
        ]);


       \Session::flash('letter_message', 'Motivation sent!');


        return redirect()->to('/motivationprofile')->with('global', 'Motivation Letter sent!');

    }



}
