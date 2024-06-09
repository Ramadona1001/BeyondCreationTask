<?php

namespace App\Http\Controllers;

use App\Models\Attendee;
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
        return view('attendees.create');
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
            // Add validation rules for other fields
        ]);

        // Create a new attendee instance
        $attendee = new Attendee([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            // Assign other request data to attendee attributes
        ]);

        // Save the attendee to the database
        $attendee->save();

        return redirect()->route('attendees.index')
            ->with('success', 'Attendee created successfully.');
    }

    // Implement other methods like show(), edit(), update(), destroy() as needed
}

