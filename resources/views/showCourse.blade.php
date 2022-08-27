@extends('layouts')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <br><br>
            <h1>Show Course</h1>
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <td>No.</td>
                            <td>Image</td>
                            <td>Name</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody class="table-light">
                        @foreach($courses as $course)
                        @if(Auth::check() && Auth::user()->id == $course->teacher)
                        <tr>
                            <td>{{$loop->iteration}}</td> 
                            <td><img src="{{ asset('images/') }}/{{$course->image}}" alt="" width="100" class="img-fluid"></td>
                            <td>{{$course->name}}</td>
                            <td>
                                    <a href="{{ route('editCourse',['id'=>$course->id]) }}" class="btn btn-xs-danger">edit</a>
                                    <a href="{{ route('deleteCourse',['id' =>$course->id])}}" class="btn btn-xs-danger">delete</a>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            <br><br>
            <div class="container">
</div>
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>

@endsection