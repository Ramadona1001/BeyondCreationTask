@extends('layouts.app')

@section('title')
    Create Event Show Time
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            @yield('title')
        </div>

        <div class="card-body">
            <form action="{{ route('event-times.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="event_day_id">Event Day</label>
                    <select name="event_day_id" class="form-control" required>
                        <option value="">Select Event Day</option>
                        @foreach($eventDays as $eventDay)
                            <option value="{{ $eventDay->id }}">{{ $eventDay->event_date }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="movie_id">Movie</label>
                    <select name="movie_id" class="form-control" required>
                        <option value="">Select Movie</option>
                        @foreach($movies as $movie)
                            <option value="{{ $movie->id }}">{{ $movie->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="showtime_id">Showtime</label>
                    <select name="showtime_id" class="form-control" required>
                        <option value="">Select Showtime</option>
                        @foreach($showtimes as $showtime)
                            <option value="{{ $showtime->id }}">{{ $showtime->start_time }} - {{ $showtime->end_time }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Add Event Day Showtime</button>
            </form>
        </div>
    </div>
@endsection
