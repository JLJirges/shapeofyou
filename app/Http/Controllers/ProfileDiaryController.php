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
        return view('/profile');
    }


    public function store(Request $request)
    {


        $this->validate(request(), [
            'DiaryTitle' => 'required|string|max:20',
            'DiaryContent' => 'required|string|max:5000',
            'DiaryHeroImage' => ''

        ]);


        if ($request->hasFile('DiaryHeroImage')) {
            $request->file('DiaryHeroImage')->move(("images\\uploads_diaries\\"), $request->file('DiaryHeroImage')->getClientOriginalName());

            $filename =$request->file('DiaryHeroImage')->getClientOriginalName();



            Diary::create([
                'DiaryTitle' => request('DiaryTitle'),
                'DiaryContent' => request('DiaryContent'),
                'DiaryHeroImage' => $filename,
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
