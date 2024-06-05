@extends('layouts.app')

@section('title')
    Create Show Times
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            @yield('title')
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('showtimes.store') }}">
                @csrf
                <div class="form-group col-12 mb-2">
                    <label for="start_time">Start Date</label>
                    <input type="time" id="start_time" name="start_time" required class="form-control">
                </div>
                <div class="form-group col-12 mb-2">
                    <label for="end_time">End Date</label>
                    <input type="time" id="end_time" name="end_time" required class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
@endsection
