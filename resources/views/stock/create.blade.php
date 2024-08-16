@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create New Stock Item</h2>
    <form action="{{ route('stock.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="item_name">Item Name:</label>
            <input type="text" class="form-control" id="item_name" name="item_name" required>
        </div>
        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="number" class="form-control" id="quantity" name="quantity" required>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
