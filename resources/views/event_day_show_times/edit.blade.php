@extends('layouts.app')

@section('title')
    Update Event Show Time
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            @yield('title')
        </div>

        <div class="card-body">
            <form action="{{ route('event-times.update', ['event_time'=>$eventDayShowtime]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="event_day_id">Event Day</label>
                    <select name="event_day_id" class="form-control" required>
                        @foreach($eventDays as $eventDay)
                            <option value="{{ $eventDay->id }}" {{ $eventDay->id == $eventDayShowtime->event_day_id ? 'selected' : '' }}>{{ $eventDay->event_date }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="movie_id">Movie</label>
                    <select name="movie_id" class="form-control" required>
                        @foreach($movies as $movie)
                            <option value="{{ $movie->id }}" {{ $movie->id == $eventDayShowtime->movie_id ? 'selected' : '' }}>{{ $movie->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="showtime_id">Showtime</label>
                    <select name="showtime_id" class="form-control" required>
                        @foreach($showtimes as $showtime)
                            <option value="{{ $showtime->id }}" {{ $showtime->id == $eventDayShowtime->showtime_id ? 'selected' : '' }}>{{ $showtime->start_time }} - {{ $showtime->end_time }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update Event Day Showtime</button>
            </form>
        </div>
    </div>
@endsection
