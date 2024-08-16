@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create New Attendance</h2>
    <form action="{{ route('attendance.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="student_name">Student Name:</label>
            <input type="text" class="form-control" id="student_name" name="student_name" required>
        </div>
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <select class="form-control" id="status" name="status" required>
                <option value="Present">Present</option>
                <option value="Absent">Absent</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
