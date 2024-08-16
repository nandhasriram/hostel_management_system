@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create New Room</h2>
    <form action="{{ route('room.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="room_number">Room Number:</label>
            <input type="text" class="form-control" id="room_number" name="room_number" required>
        </div>
        <div class="form-group">
            <label for="type">Type:</label>
            <input type="text" class="form-control" id="type" name="type" required>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
