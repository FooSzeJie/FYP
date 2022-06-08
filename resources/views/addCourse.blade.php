@extends('layouts')
@section('content')

<title>Adding Course</title>

<link rel="stylesheet" href="css/bootstrap.min.css">

<div class="container">
            <br>
            <h1>Add Course</h1>
            <form action="{{ route('addCourse')}}" method="POST" enctype="multipart/form-data">
            @CSRF
            <div class="form-group">
                <label for="courseName">Course Name</label>
                <input type="text" backgroundcolor class="form-control" id="courseName" name="courseName">
            </div>
            <div class="form-group">
                <label for="amount">Semester Length</label>
                <input type="text" id="amount" name="amount" class="form-control">
            </div>
            <div class="form-group">
                <label for="star">Star Rating</label>
                <input type="number" min="1" max="5" class="form-control" id="star" name="star">
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
            <button type="submit" class="btn btn-primary">Add New</button>
        </div>
        </form>
</div>

@endsection