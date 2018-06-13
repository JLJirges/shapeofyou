<?php

namespace App\Http\Controllers;

use App\Diary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ProfileDiaryController extends Controller
{

    public function create()
    {
        return view('/profile');
    }


    public function store(Request $request)
    {
        if($request->hasFile('DiaryHeroImage')){
             $request->file('DiaryHeroImage')->move("D:\\test\\", $request->file('DiaryHeroImage')->getClientOriginalName());

        }


        $this->validate(request(), [
            'DiaryTitle' => 'required|string|max:20',
            'DiaryContent' => 'required|string|max:5000',
            'DiaryHeroImage' => 'required'

        ]);
        Diary::create([
            'DiaryTitle' => request('DiaryTitle'),
            'DiaryContent' => request('DiaryContent'),
            'DiaryHeroImage' => request('DiaryHeroImage'),
            'DiaryUserId' => Auth::id()
        ]);

        \Session::flash('flash_message', 'Diary upload successful!');
        return redirect()->to('/profile');
    }




    public function deleteDiaryComment($diary_id, $diary_comment_id)
    {

        \DB::table('diaries')->where('id', $diary_id);
        $diary_comment = \DB::table('diarycomment')->where([
            'id'=> $diary_comment_id,
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
