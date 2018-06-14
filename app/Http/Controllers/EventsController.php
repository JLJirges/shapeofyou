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
            'Costs' => request('Costs')
        ]);

        \Session::flash('event_message', 'Event upload successful!');
        return redirect()->to('/backend/create');
    }

    public function buy_ticket(Request $request, $id)
    {

        $this->validate(request(), [
            'TicketsSold' => \request('SoldTickets')
        ]);


        ;

        $event = Events::findOrFail($id);
        $event->increment('TicketsSold');

        \Session::flash('event_message', 'Successfully bought! Please check your Emails!');
        return redirect()->to('meetups');
    }

    public function edit(Request $request, $id)
    {

        $this->validate(request(), [
            'EventTitle' => '',
            'TicketsTotal' => '',
            'TicketsSold' => '',
            'EventWhen' => '',
            'EventWhere' => '',
            'EventWhat' => '',
            'Maps' => '',
            'Costs' => '',
            'Upcoming' => ''
        ]);


        $event = Events::findOrFail($id);
       /* $event->update('SoldTickets')->addClick();*/
        $event->update(array_filter($request->all()));

        \Session::flash('event_message', 'Update successful!');
        return redirect()->to('/backend/event_edit/' . $id);
    }


    public function deleteEvent($id)
    {
        $event = \DB::table('events')->where('id', $id);

        $event->delete();

        return redirect()->to('/backend/eventoverview');


    }

}
