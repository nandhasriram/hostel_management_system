@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Hostel Bill List</h2>
    <a href="{{ route('hostel-bill.create') }}" class="btn btn-primary mb-3">Add New Hostel Bill</a>
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
            @foreach($hostelBills as $hostelBill)
            <tr>
                <td>{{ $hostelBill->id }}</td>
                <td>{{ $hostelBill->student_name }}</td>
                <td>{{ $hostelBill->amount }}</td>
                <td>{{ $hostelBill->date }}</td>
                <td>
                    <a href="{{ route('hostel-bill.edit', $hostelBill->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('hostel-bill.destroy', $hostelBill->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                    <a href="{{ route('hostel-bill.show', $hostelBill->id) }}" class="btn btn-info btn-sm">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
