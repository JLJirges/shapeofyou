<?php

namespace App\Http\Controllers;

use App\Blogs;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;

class BlogsController extends Controller
{

    public function create()
    {
        return view('/backend/create');
    }

    public function store()
    {

        $this->validate(request(), [
            'BlogTitle' => 'required|string|max:50',
            'BlogCategory' => 'required',
            'BloggerId' => '',
            'BlogContentOne' => 'required|string|max:300',
            'BlogContentTwo' => 'required|string|max:300',
            'created_at' => '',
            'updated_at' => ''

        ]);
        Blogs::create([
            'BlogTitle' => request('BlogTitle'),
            'BlogCategory' => request('BlogCategory'),
            'BloggerId' => request('BloggerId'),
            'BlogContentOne' => request('BlogContentOne'),
            'BlogContentTwo' => request('BlogContentTwo'),
            'created_at' => '',
            'updated_at' => ''
        ]);
        \Session::flash('newblog_error_message', 'Blog upload successful!');

        return redirect()->to('/backend/create');

    }

    /*  public function edit(Request $request)
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
      }*/

}
