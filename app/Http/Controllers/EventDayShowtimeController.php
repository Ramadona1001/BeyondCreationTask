<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventDayShowtime;
use App\Models\Movie;
use App\Models\Showtime;
use App\Models\EventDay;
use Illuminate\Validation\Rule;

class EventDayShowtimeController extends Controller
{
    public function index()
    {
        $eventDayShowtimes = EventDayShowtime::all();
        return view('event_day_show_times.index', compact('eventDayShowtimes'));
    }

    public function create()
    {
        $movies = Movie::all();
        $showtimes = Showtime::all();
        $eventDays = EventDay::all();
        return view('event_day_show_times.create', compact('movies', 'showtimes', 'eventDays'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'event_day_id' => 'required|exists:event_days,id',
            'movie_id' => 'required|exists:movies,id',
            'showtime_id' => [
                'required',
                'exists:showtimes,id',
                Rule::unique('event_day_showtimes')->where(function ($query) use ($request) {
                    return $query->where([
                        'event_day_id' => $request->event_day_id,
                        'showtime_id' => $request->showtime_id,
                    ]);
                })
            ],
        ]);

        EventDayShowtime::create($request->all());

        return redirect()->route('event-times.index')
            ->with('success', 'Event Day Showtime created successfully.');
    }

    public function show(EventDayShowtime $eventDayShowtime)
    {
        return view('event_day_show_times.show', compact('eventDayShowtime'));
    }

    public function edit($id)
    {
        $eventDayShowtime = EventDayShowtime::find($id);
        $movies = Movie::all();
        $showtimes = Showtime::all();
        $eventDays = EventDay::all();
        return view('event_day_show_times.edit', compact('eventDayShowtime', 'movies', 'showtimes', 'eventDays'));
    }

    public function update(Request $request, $id)
    {
        $eventDayShowtime = EventDayShowtime::find($id);
        $request->validate([
            'event_day_id' => 'required|exists:event_days,id',
            'movie_id' => 'required|exists:movies,id',
            'showtime_id' => 'required|exists:showtimes,id',
        ]);

        $eventDayShowtime->update($request->all());

        return redirect()->route('event-times.index')
            ->with('success', 'Event Day Showtime updated successfully.');
    }

    public function destroy($id)
    {
        $eventDayShowtime = EventDayShowtime::find($id);
        $eventDayShowtime->delete();

        return redirect()->route('event-times.index')
            ->with('success', 'Event Day Showtime deleted successfully.');
    }
}
