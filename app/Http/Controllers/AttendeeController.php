<?php

namespace App\Http\Controllers;

use App\Models\Attendee;
use App\Models\EventDay;
use App\Models\Movie;
use App\Models\ShowTime;
use Illuminate\Http\Request;

class AttendeeController extends Controller
{
    /**
     * Display a listing of the attendees.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attendees = Attendee::all();
        return view('attendees.index', compact('attendees'));
    }

    /**
     * Show the form for creating a new attendee.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eventDays = EventDay::all();
        $movies = Movie::all();
        $showtimes = ShowTime::all();
        return view('attendees.create', compact('eventDays', 'movies', 'showtimes'));
    }

    /**
     * Store a newly created attendee in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'mobile' => 'required|string|max:20',
            'email' => 'required|string|email|max:255',
            'event_day_id' => 'required|exists:event_days,id',
            'movie_id' => 'required|exists:movies,id',
            'showtime_id' => 'required|exists:showtimes,id',
        ]);

        $attendee = new Attendee();
        $attendee->name = $request->name;
        $attendee->mobile = $request->mobile;
        $attendee->email = $request->email;
        $attendee->event_day_id = $request->event_day_id;
        $attendee->movie_id = $request->movie_id;
        $attendee->showtime_id = $request->showtime_id;
        $attendee->save();

        return redirect()->route('attendees.index')
            ->with('success', 'Attendee created successfully.');
    }
}

