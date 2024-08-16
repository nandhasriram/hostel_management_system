@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Mess List</h2>
    <a href="{{ route('mess.create') }}" class="btn btn-primary mb-3">Add New Mess</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($messes as $mess)
            <tr>
                <td>{{ $mess->id }}</td>
                <td>{{ $mess->name }}</td>
                <td>{{ $mess->description }}</td>
                <td>
                    <a href="{{ route('mess.edit', $mess->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('mess.destroy', $mess->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                    <a href="{{ route('mess.show', $mess->id) }}" class="btn btn-info btn-sm">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
