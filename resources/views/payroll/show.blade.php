@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Payroll Details</h2>
    <div class="form-group">
        <label for="employee_name">Employee Name:</label>
        <input type="text" class="form-control" id="employee_name" value="{{ $payroll->employee_name }}" disabled>
    </div>
    <div class="form-group">
        <label for="amount">Amount:</label>
        <input type="number" class="form-control" id="amount" value="{{ $payroll->amount }}" disabled>
    </div>
    <div class="form-group">
        <label for="date">Date:</label>
        <input type="date" class="form-control" id="date" value="{{ $payroll->date }}" disabled>
    </div>
    <a href="{{ route('payroll.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
