@extends('base')

@section('main')

<div class="'row">
    <div class="col-lg-12" style="text-align: center">
        <h2>Student</h2>
    </div>
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a style="margin: 19px;" href="{{ route('students.create')}}" class="btn btn-primary">New student</a>
        </div>
    </div>
    <br />
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p id="msg">{{ $message }}</p>
    </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
                <td>Address</td>
                <td colspan=2>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->address}}</td>
                <td>
                    <a href="{{route('students.edit',$student->id)}}" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    <form action="{{route('students.destroy',$student->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection