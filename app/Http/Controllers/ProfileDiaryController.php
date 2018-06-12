<?php

namespace App\Http\Controllers;

use App\Diary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class ProfileDiaryController extends Controller
{

    public function create()
    {
        return view('/profile');
    }

    public function store()
    {

        $this->validate(request(), [
            'DiaryTitle' => 'required|string|max:20',
            'DiaryContent' => 'required|string|max:5000',
            'DiaryHeroImage' => ''

        ]);
        Diary::create([
            'DiaryTitle' => request('DiaryTitle'),
            'DiaryContent' => request('DiaryContent'),
            'DiaryHeroImage' => '',
            'DiaryUserId' => Auth::id()
        ]);

        \Session::flash('flash_message', 'Diary upload successful!');
        return redirect()->to('/profile');
    }


    public function upload_photo(Request $request)
    {

        if ($request->hasFile('DiaryToUpload')) {
            // Read image
            $image = $request->file('DiaryToUpload');

            // Get filename
            $filename = $image->getClientOriginalName();

            // Insert filename in database
            \DB::table('diaries')
                ->where('DiaryUserId', \Auth::user()->id)
                ->update(['DiaryHeroImage' => $filename]);

            // Save  Image locally
            $request->DiaryToUpload->move(public_path('images/uploads/'), $filename);
        }
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

}
