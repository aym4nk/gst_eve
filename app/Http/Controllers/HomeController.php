<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\User;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        /* =========================================
           UPDATE ROLES
        ========================================= */

        $users = User::where(
            'role',
            'organisateur'
        )->get();

        foreach ($users as $user) {

            $activeEvents = Event::where(
                'organizer_id',
                $user->id
            )

            ->whereDate(
                'date_end',
                '>=',
                now()
            )

            ->exists();

            // no active events

            if (!$activeEvents) {

                $user->update([

                    'role' => 'participant'

                ]);
            }
        }

        /* =========================================
           SEARCH
        ========================================= */

        $search = $request->search;

        $events = Event::with('organizer')

            ->when($search, function ($query) use ($search) {

                $query->where('title', 'LIKE', "%{$search}%")

                      ->orWhere(
                          'location',
                          'LIKE',
                          "%{$search}%"
                      )

                      ->orWhereHas(
                          'organizer',
                          function ($q) use ($search) {

                              $q->where(
                                  'name',
                                  'LIKE',
                                  "%{$search}%"
                              );

                          }
                      );

            })

            ->latest()

            ->get();

        return view('home', compact(
            'events',
            'search'
        ));
    }
}