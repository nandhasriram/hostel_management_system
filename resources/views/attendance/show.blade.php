@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Attendance Details</h2>
    <div class="form-group">
        <label for="student_name">Student Name:</label>
        <input type="text" class="form-control" id="student_name" value="{{ $attendance->student_name }}" disabled>
    </div>
    <div class="form-group">
        <label for="date">Date:</label>
        <input type="date" class="form-control" id="date" value="{{ $attendance->date }}" disabled>
    </div>
    <div class="form-group">
        <label for="status">Status:</label>
        <input type="text" class="form-control" id="status" value="{{ $attendance->status }}" disabled>
    </div>
    <a href="{{ route('attendance.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
