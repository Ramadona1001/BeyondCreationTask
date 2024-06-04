@extends('layouts.app')

@section('title')
    All Movies
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
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($movies as $movie)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $movie->title }}</td>
                            <td class="d-flex justify-content-center align-items-center gap-2">
                                <a href="{{ route('movies.edit',['movie'=>$movie]) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('movies.destroy',['movie'=>$movie]) }}" method="post">
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