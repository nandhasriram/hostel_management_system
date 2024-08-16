@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create New Visitor</h2>
    <form action="{{ route('visitor.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="purpose">Purpose:</label>
            <input type="text" class="form-control" id="purpose" name="purpose" required>
        </div>
        <div class="form-group">
            <label for="visit_date">Visit Date:</label>
            <input type="date" class="form-control" id="visit_date" name="visit_date" required>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
