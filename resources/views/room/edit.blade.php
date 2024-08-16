@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Room</h2>
    <form action="{{ route('room.update', $room->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="room_number">Room Number:</label>
            <input type="text" class="form-control" id="room_number" name="room_number" value="{{ $room->room_number }}" required>
        </div>
        <div class="form-group">
            <label for="type">Type:</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $room->type }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
