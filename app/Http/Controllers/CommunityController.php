<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;

class CommunityController extends Controller
{

    public function community_view()
    {

        return view('community');
    }

}
