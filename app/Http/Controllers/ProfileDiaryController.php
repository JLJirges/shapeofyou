<?php

namespace App\Http\Controllers;

use App\Diary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;

class ProfileDiaryController extends Controller
{

    public function create()
    {
        if (!Auth()->check()) {
            return redirect()->to('/');
        } else {
            return view('/profile');
        }
    }

    public function my_profile_view()
    {
        if (!Auth()->check()) {
            return redirect()->to('/');
        } else {
            $data = [
                'user' => Auth::user(),
                'diary' => \DB::table('diaries')->where('DiaryUserId', Auth::user()->id)->orderBy('created_at', 'desc')->get()
            ];
            return view('profile/profile')->with($data);
        }
    }

    public function other_profile_view($username)
    {
        $user_exists = \DB::table('users')
                ->where('username', $username)->count() > 0;

        if (!$user_exists) {
            return redirect()->to('community');
        }

        if (!Auth()->check()) {
            return redirect()->to('/');
        } else {
            $user_id = \DB::table('users')->where('username', $username)->first()->id;
            $data = [
                'user' => \DB::table('users')->where('username', $username)->first(),
                'diary' => \DB::table('diaries')->where('DiaryUserId', $user_id)->orderBy('created_at', 'desc')->get()
            ];
            return view('profile/profile')->with($data);
        }
    }

    public function detail_diary_view($diary_id)
    {
        $diary_exists = \DB::table('diaries')
                ->where('id', $diary_id)->count() > 0;

        if (!$diary_exists) {
            return redirect()->to('community');
        }

        if (!Auth()->check()) {
            return redirect()->to('/');
        } else {
            // Get blog comments of blog with the BlogId=$id
            // blog_comments is an array of entries of the table 'blogcomment'
            $diary_comments = \DB::table('diarycomment')
                ->where('DiaryId', $diary_id);

            // Get UserIds that are in the blog_comments
            // user_ids is an array of UserIds (e.g., [1,2,3])
            $user_ids = $diary_comments->pluck('UserId')->toArray();

            // Get BloggerId
            $blogger_id = \DB::table('diaries')->where('id', $diary_id)->first()->DiaryUserId;

            // Get all the data needed to pass to the blade view
            $data = [
                // blog_id is in the url
                'diary_id' => $diary_id,

                // I need the blog entry from the 'blogs' table.
                // Go to the Blogs and find the entry where 'id'=$id
                'diary' => \DB::table('diaries')->where('id', $diary_id)->first(),

                'diary_author' => \DB::table('users')->where('id', $blogger_id)->first(),

                // get blog comments ordered by their date
                'diary_comments' => $diary_comments->orderBy('DiaryCommentDate', 'desc')->get(),

                // get users associated with blog comments
                'users' => \DB::table('users')
                    ->whereIn('id', $user_ids)->get(),

                // get authenticated user
                'user_id' => Auth::user()->id,

            ];
            return view('diary')->with($data);
        }
    }


    public function store(Request $request)
    {


        $this->validate(request(), [
            'DiaryTitle' => 'required|string|max:20',
            'DiaryContent' => 'required|string|max:5000',
            'DiaryHeroImage' => ''

        ]);


        if ($request->hasFile('DiaryHeroImage')) {
            $request->file('DiaryHeroImage')->move(("images" . DIRECTORY_SEPARATOR . "uploads_diaries" . DIRECTORY_SEPARATOR), $request->file('DiaryHeroImage')->getClientOriginalName());

            $filename = $request->file('DiaryHeroImage')->getClientOriginalName();
            $toUpdate['DiaryHeroImage'] = $filename;



        Diary::create([
                'DiaryTitle' => request('DiaryTitle'),
                'DiaryContent' => request('DiaryContent'),
                'DiaryHeroImage' => $filename,
                'DiaryUserId' => Auth::id()
            ]);
        }else{
            Diary::create([
                'DiaryTitle' => request('DiaryTitle'),
                'DiaryContent' => request('DiaryContent'),
                'DiaryUserId' => Auth::id()
            ]);
        }

        \Session::flash('flash_message', 'Diary upload successful!');
        return redirect()->to('/profile');

    }


    public function deleteDiaryComment($diary_id, $diary_comment_id)
    {

        \DB::table('diaries')->where('id', $diary_id);
        $diary_comment = \DB::table('diarycomment')->where([
            'id' => $diary_comment_id,
            'DiaryId' => $diary_id
        ]);

        $diary_comment->delete();

        return redirect()->to('diary/' . $diary_id);
    }

    public function deleteDiaryEntry($diary_id)
    {

        $diary_entry = \DB::table('diaries')->where('id', $diary_id);
        $diary_comments = \DB::table('diarycomment')->where('DiaryId', $diary_id);

        $diary_entry->delete();

        return redirect()->to('usertalkoverview/diaries/');
    }

    public function deleteDiaryFromBackend($diary_id)
    {

        $diary_entry = \DB::table('diaries')->where('id', $diary_id);
        $diary_comments = \DB::table('diarycomment')->where('DiaryId', $diary_id);

        $diary_entry->delete();

        return redirect()->to('backend/diaryoverview');
    }

}
