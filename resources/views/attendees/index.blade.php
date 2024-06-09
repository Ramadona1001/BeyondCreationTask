@extends('layouts.app')

@section('title')
    All Attendees
@endsection

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            @yield('title')
            {{-- <a target="_blank" href="{{ route('attendees.create') }}" class="btn btn-primary">Add New</a> --}}
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Movie</th>
                            <th>Event Day</th>
                            <th>Showtime</th>
                            <th>Reserved At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($attendees as $attendee)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $attendee->name }}</td>
                                <td>{{ $attendee->mobile }}</td>
                                <td>{{ $attendee->email }}</td>
                                <td>{{ $attendee->movie->title }}</td>
                                <td>{{ $attendee->eventDay->event_date }}</td>
                                <td>{{ $attendee->showtime->start_time.' : '.$attendee->showtime->end_time }}</td>
                                <td>{{ $attendee->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
