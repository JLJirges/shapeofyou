<?php

namespace App\Http\Controllers;

use App\Blogs;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;



class BlogsController extends Controller
{

    public function create()
    {if (!Auth()->check()) {
        return redirect()->to('/');
    } elseif (Auth::user()->isAdmin !== 1) {
        Auth::logout();
        Session:
        flush();
        return redirect()->to('/');
    } else {
        return view('/backend/create');
    }
    }

    public function superfood_view()
    {
        $data = [
            'blogs' => \DB::table('blogs')->get(),
        ];

        return view('superfood')->with($data);
    }

    public function blogdetail_view($blog_id)
    {
        if (!Auth()->check()) {
            return redirect()->to('register');
        } else {
            // Get blog comments of blog with the BlogId=$id
            // blog_comments is an array of entries of the table 'blogcomment'
            $blog_comments = \DB::table('blogcomment')
                ->where('BlogId', $blog_id);

            // Get UserIds that are in the blog_comments
            // user_ids is an array of UserIds (e.g., [1,2,3])
            $user_ids = $blog_comments->pluck('UserId')->toArray();

            // Get BloggerId
            $blogger_id = \DB::table('blogs')->where('id', $blog_id)->first()->BloggerId;

            // Get all the data needed to pass to the blade view
            $data = [
                // blog_id is in the url
                'blog_id' => $blog_id,

                // I need the blog entry from the 'blogs' table.
                // Go to the Blogs and find the entry where 'id'=$id
                'blog' => \DB::table('blogs')->where('id', $blog_id)->first(),

                'blog_author' => \DB::table('users')->where('id', $blogger_id)->first(),

                // get blog comments ordered by their date
                'blog_comments' => $blog_comments->orderBy('BlogCommentDate', 'desc')->get(),

                // get users associated with blog comments
                'users' => \DB::table('users')
                    ->whereIn('id', $user_ids)->get(),

                // get authenticated user
                'user_id' => Auth::user()->id,

                // Boolean variable: true if user likes blog, false otherwise
                'user_likes_blog' => \DB::table('user_favorites')
                        ->where(['UserId' => Auth::user()->id, 'type' => 'blog', 'type_id' => $blog_id])->count() > 0
            ];
            return view('blog')->with($data);
        }
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
