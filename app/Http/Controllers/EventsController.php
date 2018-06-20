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

    public function meetups_view()
    {

        $data = [
            'upcoming_events' => \DB::table('events')->where('Upcoming', 0)->get(),
            'former_events' => \DB::table('events')->where('Upcoming', 1)->get(),
            'event_images' =>\DB::table('galleries')->get()
        ];

        return view('meetups')->with($data);
    }

    public function gallery_view($former_event_id)
    {
        $data = [
            'former_event_id' => $former_event_id,
            'former_events' => \DB::table('events')->where('id', $former_event_id)->get(),
            'event_images' =>\DB::table('galleries')->where('EventId', $former_event_id)->get()
        ];
        return view('gallery')->with($data);
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
