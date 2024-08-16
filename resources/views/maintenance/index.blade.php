@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Maintenance List</h2>
    <a href="{{ route('maintenance.create') }}" class="btn btn-primary mb-3">Add New Maintenance</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Description</th>
                <th>Cost</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($maintenances as $maintenance)
            <tr>
                <td>{{ $maintenance->id }}</td>
                <td>{{ $maintenance->description }}</td>
                <td>{{ $maintenance->cost }}</td>
                <td>{{ $maintenance->date }}</td>
                <td>
                    <a href="{{ route('maintenance.edit', $maintenance->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('maintenance.destroy', $maintenance->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                    <a href="{{ route('maintenance.show', $maintenance->id) }}" class="btn btn-info btn-sm">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
