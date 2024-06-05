@extends('layouts.app')

@section('title')
    All Show Times
@endsection

@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        @yield('title')
        <a target="_blank" href="{{ route('showtimes.create') }}" class="btn btn-primary">Add New</a>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($showtimes as $showtime)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ \Carbon\Carbon::parse($showtime->start_time)->format('h:i A') }}</td>
                            <td>{{ \Carbon\Carbon::parse($showtime->end_time)->format('h:i A') }}</td>
                            <td class="d-flex justify-content-center align-items-center gap-2">
                                <a href="{{ route('showtimes.edit',['showtime'=>$showtime]) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('showtimes.destroy',['showtime'=>$showtime]) }}" method="post">
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