@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Maintenance Details</h2>
    <div class="form-group">
        <label for="description">Description:</label>
        <input type="text" class="form-control" id="description" value="{{ $maintenance->description }}" disabled>
    </div>
    <div class="form-group">
        <label for="cost">Cost:</label>
        <input type="number" class="form-control" id="cost" value="{{ $maintenance->cost }}" disabled>
    </div>
    <div class="form-group">
        <label for="date">Date:</label>
        <input type="date" class="form-control" id="date" value="{{ $maintenance->date }}" disabled>
    </div>
    <a href="{{ route('maintenance.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
