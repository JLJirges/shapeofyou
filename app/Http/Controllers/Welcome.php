<?php

namespace App\Http\Controllers;

use App\Workouts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;

class Welcome extends Controller
{

    public function view()
    {
        return view('welcome');
    }



}
