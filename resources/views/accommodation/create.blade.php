@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create New Accommodation</h2>
    <form action="{{ route('accommodation.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Accommodation Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="type">Type:</label>
            <input type="text" class="form-control" id="type" name="type" required>
        </div>
        <div class="form-group">
            <label for="capacity">Capacity:</label>
            <input type="number" class="form-control" id="capacity" name="capacity" required>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
