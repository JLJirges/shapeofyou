<?php

namespace App\Http\Controllers;

use App\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventsController extends Controller
{

    public function create()
    {
        return view('/backend/eventoverview');
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

        \Session::flash('event_message', 'Event upload successful!');
        return redirect()->to('/backend/create');
    }


    public function edit(Request $request, $id)
    {

        $this->validate(request(), [
            'EventTitle' => '',
            'TicketsTotal' => '',
            'EventWhen' => '',
            'EventWhere' => '',
            'EventWhat' => '',
            'Maps' => '',
            'Costs' => '',
            'Upcoming' => ''
        ]);


        $event = Events::findOrFail($id);

        $event->update(array_filter($request->all()));

        \Session::flash('event_message', 'Update successful!');
        return redirect()->to('/backend/admin_edit/' . $id);
    }

}
