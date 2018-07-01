<?php

namespace App\Http\Controllers;

use App\Diary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;

class ProfileHelpController extends Controller
{

    public function help_view()
    {
        if (!Auth()->check()) {
            return redirect()->to('/');
        } else {
            $data = [
                'user' => Auth::user()
            ];

            return view('profile/helpprofile')->with($data);
        }
    }
}
