@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Stock List</h2>
    <a href="{{ route('stock.create') }}" class="btn btn-primary mb-3">Add New Stock</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Item Name</th>
                <th>Quantity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stocks as $stock)
            <tr>
                <td>{{ $stock->id }}</td>
                <td>{{ $stock->item_name }}</td>
                <td>{{ $stock->quantity }}</td>
                <td>
                    <a href="{{ route('stock.edit', $stock->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('stock.destroy', $stock->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                    <a href="{{ route('stock.show', $stock->id) }}" class="btn btn-info btn-sm">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
