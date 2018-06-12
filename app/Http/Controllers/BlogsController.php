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
            'BlogContentOne' => 'required|string|max:3000',
            'BlogContentTwo' => 'required|string|max:3000',
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

    public function edit(Request $request, $id)
    {
        $this->validate(request(), [
            'BlogTitle' => '',
            'BlogCategory' => '',
            'BlogAuthorName' => '',
            'BlogAuthorBio' => '',
            'BlogAuthorBirthdate' => '',
            'BlogAuthorImage' => '',
            'BlogAuthorOrigin' => '',
            'BlogHeroImage' => '',
            'BlogImage' => '',
            'BlogContentOne' => '',
            'BlogContentTwo' => ''
        ]);


        $blog = Blogs::findOrFail($id);
        $blog->update(array_filter($request->all()));
        \Session::flash('blog_message', 'Update successful!');
        return redirect()->to('/backend/blog_edit/' . $blog->id);
    }

    public function deleteBlogComment($blog_id, $blog_comment_id)
    {

        \DB::table('blogs')->where('id', $blog_id);
        $blog_comment = \DB::table('blogcomment')->where([
            'id'=> $blog_comment_id,
            'BlogId' => $blog_id
            ]);

        $blog_comment->delete();

        return redirect()->to('blog/' . $blog_id);
    }



}
