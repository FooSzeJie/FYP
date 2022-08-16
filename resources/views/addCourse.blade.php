@extends('layouts')
@section('content')


<div class="container">
    <br>
    <h1>Add Course</h1>
    <form action="{{ route('addCourse')}}" method="POST" enctype="multipart/form-data">
        @CSRF
        <div class="form-group">
            <label for="courseName">Course Name</label>
            <input type="text" backgroundcolor class="form-control" id="courseName" name="courseName">
            <input type="hidden" class="form-control" id="description" name="description" value = "empty"> 
        </div>

        <div class="form-group">
            <label for="amount">Semester Length</label>
            <input type="text" id="amount" name="amount" class="form-control">
        </div>

        <div class="form-group">
            <label for="courseTime">Time Taken</label>
            <input type="number" min="1" class="form-control" id="courseTime" name="courseTime">
        </div>

        <div class="form-group">
            <label for="courseMonth">Month Taken</label>
            <input type="number" min="1" max="12" class="form-control" id="courseMonth" name="courseMonth">
        </div>

        <div class="form-group">
            <label for="courseModule">Module</label>
            <input type="number" min="1" class="form-control" id="courseModule" name="courseModule">
        </div>

        <div class="form-group">
                <label for="courseImage">Course Image</label>
                <input type="file" class="form-control" id="courseImage" name="courseImage">
        </div>

        <div class="form-group">
                <label for="categoryID">Course Category</label>
                <select name="CategoryID" id="CategoryID" class="form-control">
                    @foreach ($categoryID as $category)
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
        
        <button type="submit" class="btn btn-primary">Add New</button>
    </form>
</div>

@endsection