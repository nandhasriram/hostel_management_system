@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Payroll</h2>
    <form action="{{ route('payroll.update', $payroll->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="employee_name">Employee Name:</label>
            <input type="text" class="form-control" id="employee_name" name="employee_name" value="{{ $payroll->employee_name }}" required>
        </div>
        <div class="form-group">
            <label for="amount">Amount:</label>
            <input type="number" class="form-control" id="amount" name="amount" value="{{ $payroll->amount }}" required>
        </div>
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ $payroll->date }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
