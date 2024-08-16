@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Student Details</h2>
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" value="{{ $student->name }}" disabled>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" value="{{ $student->email }}" disabled>
    </div>
    <a href="{{ route('student.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
