@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create New Certificate</h2>
    <form action="{{ route('certificate.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="student_name">Student Name:</label>
            <input type="text" class="form-control" id="student_name" name="student_name" required>
        </div>
        <div class="form-group">
            <label for="certificate_type">Certificate Type:</label>
            <input type="text" class="form-control" id="certificate_type" name="certificate_type" required>
        </div>
        <div class="form-group">
            <label for="date_issued">Date Issued:</label>
            <input type="date" class="form-control" id="date_issued" name="date_issued" required>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
