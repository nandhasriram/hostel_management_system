@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Visitor</h2>
    <form action="{{ route('visitor.update', $visitor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $visitor->name }}" required>
        </div>
        <div class="form-group">
            <label for="purpose">Purpose:</label>
            <input type="text" class="form-control" id="purpose" name="purpose" value="{{ $visitor->purpose }}" required>
        </div>
        <div class="form-group">
            <label for="visit_date">Visit Date:</label>
            <input type="date" class="form-control" id="visit_date" name="visit_date" value="{{ $visitor->visit_date }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
