@extends('layouts.app')

@section('title')
    Update Movie
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            @yield('title')
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('showtimes.update',['showtime'=>$showtime]) }}">
                @csrf
                @method('PUT')
                <div class="form-group col-12 mb-2">
                    <label for="start_time">Start Date</label>
                    <input type="time" id="start_time" value="{{ $showtime->start_time }}" name="start_time" required class="form-control">
                </div>
                <div class="form-group col-12 mb-2">
                    <label for="end_time">End Date</label>
                    <input type="time" id="end_time" value="{{ $showtime->end_time }}" name="end_time" required class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('showtimes.index') }}" class="btn btn-secondary">All Data</a>
            </form>
        </div>
    </div>
@endsection
