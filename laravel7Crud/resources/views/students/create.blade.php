@extends('base')

@section('main')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h4 class="display-3">Add a student</h4>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>
                {{$error}}
            </li>
            @endforeach
        </ul>
    </div>
    </br>
    @endif
    <div class="col-xs-6 col-sm-6 col-md-6 text-center">
        <form method="post" action="{{ route('students.store') }}">
            @csrf
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" id="name" class="form-control" placeholder="Name" onchange="validate()">
            </div>
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="email" id="email" class="form-control" placeholder="Email" onchange="validate()">
            </div>
            <div class="form-group">
                <strong>Address:</strong>
                <input type="text" name="address" id="address" class="form-control" placeholder="Address" onchange="validate()" onkeypress="validate()">
            </div>
            <button type="submit" class="btn btn-primary-outline">Add student</button>
            <a href="{{ route('students.index') }}" class="btn btn-danger">Cancel</a>
        </form>
    </div>
</div>

@endsection