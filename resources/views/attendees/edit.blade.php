@extends('layouts.app')

@section('title')
    Update Attendees
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            @yield('title')
        </div>

        <div class="card-body">
            <form action="{{ route('attendees.update', $attendee->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $attendee->name }}" required>
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input type="text" name="mobile" class="form-control" value="{{ $attendee->mobile }}" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $attendee->email }}" required>
                </div>
                <button type="submit" class="btn btn-primary mt-2">Update</button>
            </form>
        </div>
    </div>
@endsection
