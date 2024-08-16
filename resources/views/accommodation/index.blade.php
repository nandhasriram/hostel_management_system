@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Accommodation List</h2>
    <a href="{{ route('accommodation.create') }}" class="btn btn-primary mb-3">Add New Accommodation</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Capacity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($accommodations as $accommodation)
            <tr>
                <td>{{ $accommodation->id }}</td>
                <td>{{ $accommodation->name }}</td>
                <td>{{ $accommodation->type }}</td>
                <td>{{ $accommodation->capacity }}</td>
                <td>
                    <a href="{{ route('accommodation.edit', $accommodation->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('accommodation.destroy', $accommodation->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                    <a href="{{ route('accommodation.show', $accommodation->id) }}" class="btn btn-info btn-sm">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
