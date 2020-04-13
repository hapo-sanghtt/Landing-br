@extends('base')

@section('main')

<div class="card">
    <div class="card-body">
        <h2>Student</h2>
        <div class="form-group">
            <label for="name">Name:</label>
            <p type="text" class="form-control">{{ $student->name}}</h3>        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <p type="text" class="form-control">{{ $student->email}}</p>
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <p type="text" class="form-control">{{ $student->address}}</b></p>
        </div>
        <td colspan="2" style="text-align: right "><a href="{{ route('students.index') }}" class="btn btn-danger">OK</a>
    </div>
</div>

@endsection
