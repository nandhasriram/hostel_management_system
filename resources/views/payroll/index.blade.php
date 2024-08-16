@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Payroll List</h2>
    <a href="{{ route('payroll.create') }}" class="btn btn-primary mb-3">Add New Payroll</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Employee Name</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($payrolls as $payroll)
            <tr>
                <td>{{ $payroll->id }}</td>
                <td>{{ $payroll->employee_name }}</td>
                <td>{{ $payroll->amount }}</td>
                <td>{{ $payroll->date }}</td>
                <td>
                    <a href="{{ route('payroll.edit', $payroll->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('payroll.destroy', $payroll->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                    <a href="{{ route('payroll.show', $payroll->id) }}" class="btn btn-info btn-sm">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
