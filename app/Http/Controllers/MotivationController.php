<?php

namespace App\Http\Controllers;

use App\Diary;
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
            return view('profile/motivationprofile');
        }
    }

    public function FutureLetter() {


        $this->validate(request(), [
            'LetterTitle' => 'required|max:50',
            'LetterContent' => 'required|string',
            'created_at' => '',
            'ReceiveLetter' => ''
        ]);
        futureletters::create([
            'LetterTitle' => request ('LetterTitle'),
            'LetterContent' => request ('LetterContent'),
            'created_at' => '',
            'ReceiveLetter' => ('received_at'),
            'UserId' => Auth::id()
        ]);
        \Session::flash('flash_message', 'Motivation sent!');

    }

}
