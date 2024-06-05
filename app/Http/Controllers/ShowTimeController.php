<?php

namespace App\Http\Controllers;

use App\Models\ShowTime;
use Illuminate\Http\Request;

class ShowTimeController extends Controller
{
    public function index()
    {
        $showtimes = ShowTime::all();

        return view('showtimes.index', compact('showtimes'));
    }

    public function create()
    {
        return view('showtimes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'start_time' => 'required|',
            'end_time' => 'required|after:start_time',
        ]);

        ShowTime::create($request->all());

        return redirect()->route('showtimes.index')->with('success','Show Time is created successfully');;
    }

    public function edit(Showtime $showtime)
    {
        return view('showtimes.edit', compact('showtime'));
    }

    public function update(Request $request, Showtime $showtime)
    {
        $request->validate([
            'start_time' => 'required|',
            'end_time' => 'required|after:start_time',
        ]);

        $showtime->update($request->all());

        return redirect()->route('showtimes.index')->with('success','Show Time is updated successfully');;
    }

    public function destroy(Showtime $showtime)
    {
        $showtime->delete();

        return redirect()->route('showtimes.index')->with('success','Show Time is deleted successfully');;
    }
}
