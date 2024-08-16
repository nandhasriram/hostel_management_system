@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Attendance List</h2>
    <a href="{{ route('attendance.create') }}" class="btn btn-primary mb-3">Add New Attendance</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Student Name</th>
                <th>Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($attendances as $attendance)
            <tr>
                <td>{{ $attendance->id }}</td>
                <td>{{ $attendance->student_name }}</td>
                <td>{{ $attendance->date }}</td>
                <td>{{ $attendance->status }}</td>
                <td>
                    <a href="{{ route('attendance.edit', $attendance->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('attendance.destroy', $attendance->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                    <a href="{{ route('attendance.show', $attendance->id) }}" class="btn btn-info btn-sm">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
