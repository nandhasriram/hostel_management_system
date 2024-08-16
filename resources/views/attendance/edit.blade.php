@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Attendance</h2>
    <form action="{{ route('attendance.update', $attendance->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="student_name">Student Name:</label>
            <input type="text" class="form-control" id="student_name" name="student_name" value="{{ $attendance->student_name }}" required>
        </div>
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ $attendance->date }}" required>
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <select class="form-control" id="status" name="status" required>
                <option value="Present" {{ $attendance->status == 'Present' ? 'selected' : '' }}>Present</option>
                <option value="Absent" {{ $attendance->status == 'Absent' ? 'selected' : '' }}>Absent</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
