<?php

namespace App\Http\Controllers;

use App\Blogs;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;


class BlogsController extends Controller
{

    public function create()
    {
        return view('/backend/create');
    }

    public function store(Request $request)
    {

        $this->validate(request(), [
            'BlogTitle' => 'required|string|max:50',
            'BlogCategory' => 'required',
            'BloggerId' => '',
            'BlogContentOne' => 'required|string|max:3000',
            'BlogContentTwo' => 'required|string|max:3000',
            'BlogHeroImage' => 'required',
            'BlogImage' => '',
            'created_at' => '',
            'updated_at' => ''
        ]);

        if (($request->hasFile('BlogHeroImage')) && ($request->hasFile('BlogImage'))) {

            $request->file('BlogHeroImage')->move(("images\\blogs\\"), $request->file('BlogHeroImage')->getClientOriginalName());
            $filename_bloghero = $request->file('BlogHeroImage')->getClientOriginalName();
            $request->file('BlogImage')->move(("images\\blogs\\"), $request->file('BlogImage')->getClientOriginalName());
            $filename_blogimage = $request->file('BlogImage')->getClientOriginalName();


            Blogs::create([
                'BlogTitle' => request('BlogTitle'),
                'BlogCategory' => request('BlogCategory'),
                'BloggerId' => request('BloggerId'),
                'BlogContentOne' => request('BlogContentOne'),
                'BlogContentTwo' => request('BlogContentTwo'),
                'BlogBoxImage' => $filename_bloghero,
                'BlogHeroImage' => $filename_bloghero,
                'BlogImage' => $filename_blogimage,
                'created_at' => '',
                'updated_at' => ''
            ]);

        }
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
        $toUpdate = array_filter($request->all());

        if ($request->hasFile('BlogHeroImage')) {

            $request->file('BlogHeroImage')->move(("images\\blogs\\"), $request->file('BlogsHeroImage')->getClientOriginalName());

            $filename = $request->file('BlogHeroImage')->getClientOriginalName();
            $toUpdate['BlogHeroImage']=$filename;
        }
        if ($request->hasFile('BlogImage')) {

            $request->file('BlogImage')->move(("images\\blogs\\"), $request->file('BlogImage')->getClientOriginalName());

            $filename = $request->file('WorkoutImage')->getClientOriginalName();
            $toUpdate['BlogImage']=$filename;
        }

        $blog = Blogs::findOrFail($id);

        $blog->update($toUpdate);

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

    public function deleteBlog($blog_id)
    {

        $blog = \DB::table('blogs')->where('id', $blog_id);

        $blog->delete();

        return redirect()->to('/backend/blogoverview');
    }



}
