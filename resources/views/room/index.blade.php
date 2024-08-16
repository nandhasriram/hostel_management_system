@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Room List</h2>
    <a href="{{ route('room.create') }}" class="btn btn-primary mb-3">Add New Room</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Room Number</th>
                <th>Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rooms as $room)
            <tr>
                <td>{{ $room->id }}</td>
                <td>{{ $room->room_number }}</td>
                <td>{{ $room->type }}</td>
                <td>
                    <a href="{{ route('room.edit', $room->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('room.destroy', $room->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                    <a href="{{ route('room.show', $room->id) }}" class="btn btn-info btn-sm">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
