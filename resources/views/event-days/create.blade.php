@extends('layouts.app')

@section('title')
    Create Event Day
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            @yield('title')
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('movies.store') }}">
                @csrf
                <div class="form-group col-12 mb-2">
                    <label for="title">Name</label>
                    <input type="text" id="title" name="title" required class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
@endsection
