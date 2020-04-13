@extends('base')

@section('main')

<div class="'row">
    <div class="col-lg-12" style="text-align: center">
        <h1>Student</h1>
    </div>
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('students.create')}}">New student</a>
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
                <td class="text-center"><strong>ID</strong></td>
                <td class="text-center"><strong>Name</strong></td>
                <td class="text-center"><strong>Mail</strong></td>
                <td class="text-center"><strong>Address</strong></td>
                <td colspan=3 class="text-center"><strong>Action</strong></td>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td class="text-center">{{$student->id}}</td>
                <td class="text-center">{{$student->name}}</td>
                <td class="text-center">{{$student->email}}</td>
                <td class="text-center">{{$student->address}}</td>
                <td>
                    <a class="btn btn-info" href="{{route('students.show',$student->id)}}">Show</a>
                </td>
                <td>
                    <a class="btn btn-primary" href="{{route('students.edit',$student->id)}}">Edit</a>
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
