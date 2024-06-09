@extends('layouts.app')

@section('title')
    All Event Day
@endsection

@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        @yield('title')
        <a target="_blank" href="{{ route('movies.create') }}" class="btn btn-primary">Add New</a>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($eventDays as $eventDay)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $eventDay->event_date }}</td>
                            <td>
                                @foreach ($eventDay->showtimes as $showtime)
                                    <h6 class="bg-light p-2">{{ $showtime->movie->title }}</h6>
                                    Start : {{ $showtime->showtime->start_time }} - End : {{ $showtime->showtime->end_time }}
                                @endforeach
                            </td>
                            <td class="d-flex justify-content-center align-items-center gap-2">
                                <a href="{{ route('eventdays.edit',['eventday'=>$eventDay]) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('eventdays.destroy',['eventday'=>$eventDay]) }}" method="post">
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