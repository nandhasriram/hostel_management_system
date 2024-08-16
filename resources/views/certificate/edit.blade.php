@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Certificate</h2>
    <form action="{{ route('certificate.update', $certificate->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="student_name">Student Name:</label>
            <input type="text" class="form-control" id="student_name" name="student_name" value="{{ $certificate->student_name }}" required>
        </div>
        <div class="form-group">
            <label for="certificate_type">Certificate Type:</label>
            <input type="text" class="form-control" id="certificate_type" name="certificate_type" value="{{ $certificate->certificate_type }}" required>
        </div>
        <div class="form-group">
            <label for="date_issued">Date Issued:</label>
            <input type="date" class="form-control" id="date_issued" name="date_issued" value="{{ $certificate->date_issued }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
