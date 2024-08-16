@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Fee List</h2>
    <a href="{{ route('fee.create') }}" class="btn btn-primary mb-3">Add New Fee</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Student Name</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($fees as $fee)
            <tr>
                <td>{{ $fee->id }}</td>
                <td>{{ $fee->student_name }}</td>
                <td>{{ $fee->amount }}</td>
                <td>{{ $fee->date }}</td>
                <td>
                    <a href="{{ route('fee.edit', $fee->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('fee.destroy', $fee->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                    <a href="{{ route('fee.show', $fee->id) }}" class="btn btn-info btn-sm">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
