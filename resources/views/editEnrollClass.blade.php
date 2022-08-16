@extends('layouts2')
@section('content2')

<div class="container">
    <br>
    <h1>Edit Class</h1>
    <form action="{{ route('updateCourse')}}" method="POST" enctype="multipart/form-data">
            @CSRF
            @foreach($courses as $course)
            <div class="form-group">
                <label for="courseName">Course Name</label>
                <input type="text" class="form-control" id="courseName" name="courseName" value="{{$course->name}}" readonly> 
                <input type="hidden" name="courseID" id="courseID" value="{{$course->id}}"> 
            </div>

            <div class="form-group">
                <label for="description">Semester Length</label>
                <textarea id="description" name="description" class="form-control">{{$course->description}}</textarea>
            </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
        </form>
</div>

@endsection