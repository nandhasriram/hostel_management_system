@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Visitor List</h2>
    <a href="{{ route('visitor.create') }}" class="btn btn-primary mb-3">Add New Visitor</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Purpose</th>
                <th>Visit Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($visitors as $visitor)
            <tr>
                <td>{{ $visitor->id }}</td>
                <td>{{ $visitor->name }}</td>
                <td>{{ $visitor->purpose }}</td>
                <td>{{ $visitor->visit_date }}</td>
                <td>
                    <a href="{{ route('visitor.edit', $visitor->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('visitor.destroy', $visitor->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                    <a href="{{ route('visitor.show', $visitor->id) }}" class="btn btn-info btn-sm">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
