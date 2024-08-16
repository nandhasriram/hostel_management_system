@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Staff Details</h2>
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" value="{{ $staff->name }}" disabled>
    </div>
    <div class="form-group">
        <label for="position">Position:</label>
        <input type="text" class="form-control" id="position" value="{{ $staff->position }}" disabled>
    </div>
    <a href="{{ route('staff.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
