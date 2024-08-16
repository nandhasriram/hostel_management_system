@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Mess Bill List</h2>
    <a href="{{ route('mess-bill.create') }}" class="btn btn-primary mb-3">Add New Mess Bill</a>
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
            @foreach($messBills as $messBill)
            <tr>
                <td>{{ $messBill->id }}</td>
                <td>{{ $messBill->student_name }}</td>
                <td>{{ $messBill->amount }}</td>
                <td>{{ $messBill->date }}</td>
                <td>
                    <a href="{{ route('mess-bill.edit', $messBill->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('mess-bill.destroy', $messBill->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                    <a href="{{ route('mess-bill.show', $messBill->id) }}" class="btn btn-info btn-sm">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
