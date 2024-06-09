<?php

namespace App\Http\Controllers;

use App\Models\Attendee;
use App\Models\EventDay;
use App\Models\Movie;
use App\Models\ShowTime;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $movies_count = Movie::count();
        $show_times_count = ShowTime::count();
        $event_days_count = EventDay::count();
        $attendees_count = Attendee::count();
        return view('home',compact(
            'movies_count',
            'show_times_count',
            'event_days_count',
            'attendees_count',
        ));
    }
}
