@extends('layouts.app')

@section('title')
    Create Attendees
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            @yield('title')
        </div>

        <div class="card-body">
            <form action="{{ route('attendees.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input type="text" name="mobile" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="">Movie</label>
                    <select name="movie_id" class="form-control" required>
                        <option value="">Select Movie</option>
                        @foreach ($movies as $movie)
                            <option value="{{ $movie->id }}">{{ $movie->title }}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group">
                    <label for="">Event Day</label>
                    <select name="event_day_id" class="form-control" required>
                        <option value="">Select Event Day</option>
                        @foreach ($eventDays as $eventDay)
                            <option value="{{ $eventDay->id }}">{{ $eventDay->event_date }}</option>
                        @endforeach
                    </select>
                </div>
                

                <div class="form-group">
                    <label for="">Showtime</label>
                    <select name="showtime_id" class="form-control" required>
                        <option value="">Select Showtime</option>
                        @foreach ($showtimes as $showtime)
                            <option value="{{ $showtime->id }}">{{ $showtime->start_time }} - {{ $showtime->end_time }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </form>
        </div>
    </div>
@endsection
