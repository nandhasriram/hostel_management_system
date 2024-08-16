@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Stock Item</h2>
    <form action="{{ route('stock.update', $stock->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="item_name">Item Name:</label>
            <input type="text" class="form-control" id="item_name" name="item_name" value="{{ $stock->item_name }}" required>
        </div>
        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $stock->quantity }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
