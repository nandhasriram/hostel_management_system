@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Maintenance</h2>
    <form action="{{ route('maintenance.update', $maintenance->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ $maintenance->description }}" required>
        </div>
        <div class="form-group">
            <label for="cost">Cost:</label>
            <input type="number" class="form-control" id="cost" name="cost" value="{{ $maintenance->cost }}" required>
        </div>
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ $maintenance->date }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
