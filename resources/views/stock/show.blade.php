@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Stock Item Details</h2>
    <div class="form-group">
        <label for="item_name">Item Name:</label>
        <input type="text" class="form-control" id="item_name" value="{{ $stock->item_name }}" disabled>
    </div>
    <div class="form-group">
        <label for="quantity">Quantity:</label>
        <input type="number" class="form-control" id="quantity" value="{{ $stock->quantity }}" disabled>
    </div>
    <a href="{{ route('stock.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
