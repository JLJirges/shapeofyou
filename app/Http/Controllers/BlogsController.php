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
            'blogtitle' => 'required|string|max:50',
            'blog-category' => 'required',
            'blog-author-name' => 'required|string|max:50',
            'blog-author-bio' => 'required|string|max:200',
            'blog-author-birthdate' => 'required',
            'blog-author-image' => 'required',
            'blog-author-origin' => 'required|string|max:50',
            'blog-hero-image' => 'required',
            'blog-image' => 'required',
            'blog-content-one' => 'required|string|max:300',
            'blog-content-two' => 'required|string|max:300'

        ]);
        Blogs::create([
            'blogtitle' => request('blogtitle'),
            'blog-category' => request('blog-category'),
            'blog-author-name' => request('blog-author-name'),
            'blog-author-bio' => request('blog-author-bio'),
            'blog-author-birthdate' => request('blog-author-birthdate'),
            'blog-author-image' => request('blog-author-image'),
            'blog-author-origin' => request('blog-author-origin'),
            'blog-hero-image' => request('blog-hero-image'),
            'blog-image' => request('blog-image'),
            'blog-content-one' => request('blog-content-one'),
            'blog-content-two' => request('blog-content-two')
        ]);
        \Session::flash('flash_message', 'Blog upload successful!');

        return redirect()->to('/backend/dashboard');

    }

    public function edit(Request $request)
    {
        $this->validate(request(), [
            'blogtitle' => 'string|max:50',
            'blog-category' => 'required',
            'blog-author-name' => 'string|max:50',
            'blog-author-bio' => 'string|max:200',
            'blog-author-birthdate' => '',
            'blog-author-image' => '',
            'blog-author-origin' => 'string|max:50',
            'blog-hero-image' => '',
            'blog-image' => '',
            'blog-content-one' => 'string|max:300',
            'blog-content-two' => 'string|max:300'
        ]);



        $blogs = Blogs::findOrFail(\Auth::blogs() -> id);
        $blogs->update($request->all());
        return redirect()->to('/backend/dashboard');
    }

}
