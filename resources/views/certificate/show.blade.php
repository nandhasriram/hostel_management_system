@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Certificate Details</h2>
    <div class="form-group">
        <label for="student_name">Student Name:</label>
        <input type="text" class="form-control" id="student_name" value="{{ $certificate->student_name }}" disabled>
    </div>
    <div class="form-group">
        <label for="certificate_type">Certificate Type:</label>
        <input type="text" class="form-control" id="certificate_type" value="{{ $certificate->certificate_type }}" disabled>
    </div>
    <div class="form-group">
        <label for="date_issued">Date Issued:</label>
        <input type="date" class="form-control" id="date_issued" value="{{ $certificate->date_issued }}" disabled>
    </div>
    <a href="{{ route('certificate.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
