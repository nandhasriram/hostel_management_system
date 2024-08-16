@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Accommodation Details</h2>
    <div class="form-group">
        <label for="name">Accommodation Name:</label>
        <input type="text" class="form-control" id="name" value="{{ $accommodation->name }}" disabled>
    </div>
    <div class="form-group">
        <label for="type">Type:</label>
        <input type="text" class="form-control" id="type" value="{{ $accommodation->type }}" disabled>
    </div>
    <div class="form-group">
        <label for="capacity">Capacity:</label>
        <input type="number" class="form-control" id="capacity" value="{{ $accommodation->capacity }}" disabled>
    </div>
    <a href="{{ route('accommodation.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
