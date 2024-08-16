@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Mess Details</h2>
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" value="{{ $mess->name }}" disabled>
    </div>
    <div class="form-group">
        <label for="description">Description:</label>
        <textarea class="form-control" id="description" disabled>{{ $mess->description }}</textarea>
    </div>
    <a href="{{ route('mess.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
