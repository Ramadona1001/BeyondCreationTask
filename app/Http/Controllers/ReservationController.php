<?php

namespace App\Http\Controllers;

use App\Models\Attendee;
use App\Models\EventDay;
use App\Models\EventDayShowtime;
use App\Models\Movie;
use App\Models\ShowTime;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function getEventDays($movie_id)
    {
        $eventDays = EventDay::whereHas('eventDayShowtimes', function ($query) use ($movie_id) {
            $query->where('movie_id', $movie_id);
        })->pluck('event_date', 'id');

        return response()->json($eventDays);
    }

    public function getShowtimes($movie_id, $event_day_id)
    {
        $showtimes = Showtime::whereHas('eventDayShowtimes', function($query) use ($movie_id, $event_day_id) {
            $query->where('movie_id', $movie_id)
                ->where('event_day_id', $event_day_id);
        })->pluck('start_time', 'id');

        return response()->json($showtimes);
    }

    public function store(Request $request)
    {
        $request->validate([
            'movie_id' => 'required|exists:movies,id',
            'event_day_id' => 'required|exists:event_days,id',
            'showtime_id' => 'required|exists:showtimes,id',
        ]);

        
        $check = Attendee::where('movie_id', $request->movie_id)
        ->where('event_day_id', $request->event_day_id)
        ->where('showtime_id', $request->showtime_id)
        ->first();

        
        if ($check) {
            return back()->with('error', 'This showtime is already reserved before.');
        }

        Attendee::create($request->all());

        return back()->with('success', 'Attendee created successfully.');
    }
}
