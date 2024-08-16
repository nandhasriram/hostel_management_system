@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Visitor Details</h2>
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" value="{{ $visitor->name }}" disabled>
    </div>
    <div class="form-group">
        <label for="purpose">Purpose:</label>
        <input type="text" class="form-control" id="purpose" value="{{ $visitor->purpose }}" disabled>
    </div>
    <div class="form-group">
        <label for="visit_date">Visit Date:</label>
        <input type="date" class="form-control" id="visit_date" value="{{ $visitor->visit_date }}" disabled>
    </div>
    <a href="{{ route('visitor.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
