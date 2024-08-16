@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Fee Details</h2>
    <div class="form-group">
        <label for="student_name">Student Name:</label>
        <input type="text" class="form-control" id="student_name" value="{{ $fee->student_name }}" disabled>
    </div>
    <div class="form-group">
        <label for="amount">Amount:</label>
        <input type="number" class="form-control" id="amount" value="{{ $fee->amount }}" disabled>
    </div>
    <div class="form-group">
        <label for="date">Date:</label>
        <input type="date" class="form-control" id="date" value="{{ $fee->date }}" disabled>
    </div>
    <a href="{{ route('fee.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
