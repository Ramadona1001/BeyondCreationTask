<?php

namespace App\Http\Controllers;

use App\Models\Attendee;
use App\Models\EventDay;
use App\Models\Movie;
use App\Models\ShowTime;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    
    public function index()
    {
        $eventDays = EventDay::all();
        $movies = Movie::all();
        $showtimes = ShowTime::all();
        return view('welcome',compact(
            'eventDays',
            'movies',
            'showtimes',
        ));
    }
}
