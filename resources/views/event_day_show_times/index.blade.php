@extends('layouts.app')

@section('title')
    Event Show Time
@endsection

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            @yield('title')
            <a target="_blank" href="{{ route('event-times.create') }}" class="btn btn-primary">Add New</a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Movie</th>
                            <th>Event Day</th>
                            <th>Showtime</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($eventDayShowtimes as $eventDayShowtime)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $eventDayShowtime->movie->title }}</td>
                                <td>{{ $eventDayShowtime->eventDay->event_date }}</td>
                                <td>{{ $eventDayShowtime->showtime->start_time }} -
                                    {{ $eventDayShowtime->showtime->end_time }}</td>
                                <td>
                                    <a href="{{ route('event-times.edit', $eventDayShowtime) }}"
                                        class="btn btn-primary">Edit</a>
                                    <form action="{{ route('event-times.destroy', $eventDayShowtime) }}"
                                        method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Are You Sure?')" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
