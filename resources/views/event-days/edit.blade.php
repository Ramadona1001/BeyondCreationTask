@extends('layouts.app')

@section('title')
    Update Event Day
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            @yield('title')
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('movies.update',['movie'=>$movie]) }}">
                @csrf
                @method('PUT')
                <div class="form-group col-12 mb-2">
                    <label for="title">Name</label>
                    <input type="text" id="title" name="title" value="{{ $movie->title }}" required class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('movies.index') }}" class="btn btn-secondary">All Data</a>
            </form>
        </div>
    </div>
@endsection
