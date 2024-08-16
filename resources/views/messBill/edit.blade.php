@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Mess Bill</h2>
    <form action="{{ route('mess-bill.update', $messBill->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="student_name">Student Name:</label>
            <input type="text" class="form-control" id="student_name" name="student_name" value="{{ $messBill->student_name }}" required>
        </div>
        <div class="form-group">
            <label for="amount">Amount:</label>
            <input type="number" class="form-control" id="amount" name="amount" value="{{ $messBill->amount }}" required>
        </div>
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ $messBill->date }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
