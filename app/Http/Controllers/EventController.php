<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /* =========================================
       ADD EVENT PAGE
    ========================================= */

    public function create()
    {
        return view('add_eve');
    }

    /* =========================================
       STORE EVENT
    ========================================= */

    public function store(Request $request)
    {
        $request->validate([

            'title' => 'required',

            'date_start' => 'required',

            'date_end' => 'required',

            'location' => 'required'

        ]);

        Event::create([

            'title' => $request->title,

            'date_start' => $request->date_start,

            'date_end' => $request->date_end,

            'location' => $request->location,

            'organizer_id' => Auth::id()

        ]);

        // CHANGE ROLE

        Auth::user()->update([

            'role' => 'organisateur'

        ]);

        return redirect()
            ->route('home')
            ->with('success', 'Event added successfully');
    }
    /* =========================================
    DELETE EVENT
    ========================================= */

    public function destroy($id)
    {
        // ONLY ADMIN

        if (auth()->user()->role !== 'admin') {

            return redirect('/');

        }

        $event = Event::findOrFail($id);

        $event->delete();

        return back();
    }
    /* =========================================
    EVENT DETAILS
    ========================================= */

    public function show($id)
    {
        $event = Event::with('organizer')
            ->findOrFail($id);

        return view(
            'event_details',
            compact('event')
        );
    }
}
