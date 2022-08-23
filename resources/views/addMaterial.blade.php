@extends('layouts2')
@section('content2')
<style>
        label{
            color:white;
        }
    </style>

<div class="container">
    <br>
    <h1>Add Materials</h1>
    <form action="{{ route('addMaterial')}}" method="POST" enctype="multipart/form-data">
        @CSRF
        <div class="form-group">
            <label for="materialName">Material Name: </label>
            <input type="text" backgroundcolor class="form-control" id="materialName" name="materialName">
        </div>

        <div class="form-group">
                <label for="video">Video: </label>
                <input type="file" class="form-control" id="video" name="video">
        </div>

        <div class="form-group">
                <label for="materials">Material: </label>
                <input type="file" class="form-control" id="materials" name="materials">
        </div>

        <div class="form-group">
            <label for="description">Description: </label>
            <br>
            <textarea type="text" id="description" name="description" class="form-control" rows="10" cols="75"></textarea>
        </div>

        <div class="form-group">
                <label for="courseID">Course Name: </label>
                <select name="courseID" id="courseID" class="form-control">
                    @foreach ($courseID as $course)
                        <option value="{{$course->id}}">{{$course->name}}</option>
                    @endforeach
                </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Add New</button>
    </form>
</div>

@endsection