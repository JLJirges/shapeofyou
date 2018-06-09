<?php

namespace App\Http\Controllers;

use App\Diary;
use App\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class EventsController extends Controller
{

    public function create()
    {
        return view('/backend/create');
    }

    public function store()
    {

        $this->validate(request(), [
            'EventTitle' => 'required',
            'TicketsTotal' => 'required',
            'EventWhen' => 'required',
            'EventWhere' => 'required',
            'EventWhat' => 'required',
            'Maps' => 'required',
            'Costs' => 'required'

        ]);
        Events::create([
            'EventTitle' => request('EventTitle'),
            'TicketsTotal' => request('TicketsTotal'),
            'EventWhen' => request('EventWhen'),
            'EventWhere' => request('EventWhere'),
            'EventWhat' => request('EventWhat'),
            'Maps' => request('Maps'),
            'Costs' =>request('Costs')
        ]);

        \Session::flash('event_message', 'Diary upload successful!');
        return redirect()->to('/backend/create');
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

}
