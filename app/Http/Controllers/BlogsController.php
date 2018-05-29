<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class BlogsController extends Controller
{

    public function create()
    {
        return view('');
    }

    public function store()
    {
        $this->validate(request(), [
            'BlogTitle' => 'required|string|max:50',
            'BlogCategory' => 'required',
            'BlogAuthorName' => 'required|string|max:50',
            'BlogAuthorBio' => 'required|string|max:200',
            'BlogAuthorBirthdate' => 'required',
            'BlogAuthorImage' => 'required',
            'BlogAuthorOrigin' => 'required|string|max:50',
            'BlogHeroImage' => 'required',
            'BlogImage' => 'required',
            'BlogContentOne' => 'required|string|max:300',
            'BlogContentTwo' => 'required|string|max:300'

        ]);
        Blogs::create([
            'BlogTitle' => request('BlogTitle'),
            'BlogCategory' => request('BlogCategory'),
            'BlogAuthorName' => request('BlogAuthorName'),
            'BlogAuthorBio' => request('BlogAuthorBio'),
            'BlogAuthorBirthdate' => request('BlogAuthorBirthdate'),
            'BlogAuthorImage' => request('BlogAuthorImage'),
            'BlogAuthorOrigin' => request('BlogAuthorOrigin'),
            'BlogHeroImage' => request('BlogHeroImage'),
            'BlogImage' => request('BlogImage'),
            'BlogContentOne' => request('BlogContentOne'),
            'BlogContentTwo' => request('BlogContentTwo')
        ]);
        \Session::flash('flash_message', 'Blog upload successful!');

        return redirect()->to('/backend/dashboard');

    }

    public function edit(Request $request)
    {
        $this->validate(request(), [
            'BlogTitle' => 'string|max:50',
            'BlogCategory' => 'required',
            'BlogAuthorName' => 'string|max:50',
            'BlogAuthorBio' => 'string|max:200',
            'BlogAuthorBirthdate' => '',
            'BlogAuthorImage' => '',
            'BlogAuthorOrigin' => 'string|max:50',
            'BlogHeroImage' => '',
            'BlogImage' => '',
            'BlogContentOne' => 'string|max:300',
            'BlogContentTwo' => 'string|max:300'
        ]);



        $blogs = Blogs::findOrFail(\Auth::blogs() -> id);
        $blogs->update($request->all());
        return redirect()->to('/backend/dashboard');
    }

}
