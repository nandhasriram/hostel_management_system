@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Certificate List</h2>
    <a href="{{ route('certificate.create') }}" class="btn btn-primary mb-3">Add New Certificate</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Student Name</th>
                <th>Certificate Type</th>
                <th>Date Issued</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($certificates as $certificate)
            <tr>
                <td>{{ $certificate->id }}</td>
                <td>{{ $certificate->student_name }}</td>
                <td>{{ $certificate->certificate_type }}</td>
                <td>{{ $certificate->date_issued }}</td>
                <td>
                    <a href="{{ route('certificate.edit', $certificate->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('certificate.destroy', $certificate->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                    <a href="{{ route('certificate.show', $certificate->id) }}" class="btn btn-info btn-sm">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
