@extends('layouts')
@section('content')

<div class="container">
    <br>
    <h1>Edit Class</h1>
    <form action="{{ route('updateCourse')}}" method="POST" enctype="multipart/form-data">
            @CSRF
            @foreach($courses as $course)
            <div class="form-group">
                <label for="courseName">Course Name</label>
                <input type="text" class="form-control" id="courseName" name="courseName" value="{{$course->name}}"> 
                <input type="hidden" name="courseID" id="courseID" value="{{$course->id}}"> 
            </div>

            <div class="form-group">
                <label for="amount">Semester Length</label>
                <input type="text" id="amount" name="amount" class="form-control" value="{{$course->amount}}">
            </div>
            <div class="form-group">
                <label for="courseTime">Time Taken</label>
                <input type="number" min="1" class="form-control" id="courseTime" name="courseTime" value="{{$course->time}}">
            </div>
            <div class="form-group">
                <label for="courseMonth">Month Taken</label>
                <input type="number" min="1" max="12" class="form-control" id="courseMonth" name="courseMonth" value="{{$course->month}}">
            </div>
            <div class="form-group">
                <label for="courseModule">Module</label>
                <input type="number" min="1" class="form-control" id="courseModule" name="courseModule" value="{{$course->module}}">
            </div>
            <div class="form-group">
                    <label for="courseImage">Course Image</label>
                    <img src="{{ asset('images')}}/{{$course->image}}" alt="" class="img-fluid" width="100">
                    <input type="file" class="form-control" id="courseImage" name="courseImage" value="">
            </div>

            <div class="form-group">
                    <label for="description">Description</label>
                    <br>
                    <textarea id="description" name="description" class="form-control" rows="10" cols="75" value="{{$course->description}}"></textarea>
                </div>

            <div class="form-group">
                    <label for="categoryID">Course Category</label>
                    <select name="CategoryID" id="CategoryID" class="form-control">
                        @foreach ($CategoryID as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
            </div>
            <div class="form-group">
                <label for="teacher">Teacher</label>
                <select name="teacher" id="teacher" class="form-control">
                    @foreach($teachers as $teacher)
                    <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                    @endforeach
                </select>
            </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
        </form>
</div>

@endsection