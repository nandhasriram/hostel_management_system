@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Room Details</h2>
    <div class="form-group">
        <label for="room_number">Room Number:</label>
        <input type="text" class="form-control" id="room_number" value="{{ $room->room_number }}" disabled>
    </div>
    <div class="form-group">
        <label for="type">Type:</label>
        <input type="text" class="form-control" id="type" value="{{ $room->type }}" disabled>
    </div>
    <a href="{{ route('room.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
