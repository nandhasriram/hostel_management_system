@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Accommodation</h2>
    <form action="{{ route('accommodation.update', $accommodation->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Accommodation Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $accommodation->name }}" required>
        </div>
        <div class="form-group">
            <label for="type">Type:</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $accommodation->type }}" required>
        </div>
        <div class="form-group">
            <label for="capacity">Capacity:</label>
            <input type="number" class="form-control" id="capacity" name="capacity" value="{{ $accommodation->capacity }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
