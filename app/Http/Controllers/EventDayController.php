<?php

namespace App\Http\Controllers;

use App\Models\EventDay;
use Illuminate\Http\Request;

class EventDayController extends Controller
{
    public function index()
    {
        $eventDays = EventDay::with('showtimes')->get();

        return view('event-days.index', compact('eventDays'));
    }

    public function create()
    {
        return view('event-days.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
        ]);

        $eventDay = EventDay::create($request->all());

        return redirect()->route('event-days.index');
    }

    public function edit(EventDay $eventDay)
    {
        return view('event-days.edit', compact('eventDay'));
    }

    public function update(Request $request, EventDay $eventDay)
    {
        $request->validate([
            'date' => 'required|date',
        ]);

        $eventDay->update($request->all());

        return redirect()->route('event-days.index');
    }

    public function destroy(EventDay $eventDay)
    {
        $eventDay->delete();
        $eventDay->showtimes()->delete();

        return redirect()->route('event_days.index');
    }
}
