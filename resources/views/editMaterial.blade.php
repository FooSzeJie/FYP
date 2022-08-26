@extends('layouts2')
@section('content2')
<head>
    <style>
        h1{
            color: #DCDCDC;
            font-size: 5rem;
        }

        label{
            color:white;
        }
    </style>
</head>

<div>
    <br>
    <h1>Edit Material</h1>
    <form action="{{ route('updateMaterial')}}" method="POST" enctype="multipart/form-data">
            @CSRF
            @foreach($material as $material)
            <div class="form-group">
                <label for="courseName">Course Name</label>
                <input type="text" class="form-control" id="materialName" name="materialName" value="{{$material->name}}"> 
                <input type="hidden" name="courseID" id="courseID" value="{{$material->id}}"> 
            </div>

            <div class="form-group">
                <label for="video">Video: </label>
                <video width="150" height="100" controls>
                    <source src="{{ asset('videos/') }}/{{$material->video}}" type="video/mp4">
                    <source src="{{ asset('videos/') }}/{{$material->video}}" type="video/ogg">
                </video>
                <input type="file" class="form-control" id="video" name="video">
        </div>

        <div class="form-group">
                <label for="materials">Material: </label>
                <input type="file" class="form-control" id="materials" name="materials">
        </div>

        <div class="form-group">
            <label for="description">Description: </label>
            <br>
            <textarea type="text" id="description" name="description" class="form-control" rows="10" cols="75" value="{{$material->description}}"></textarea>
        </div>

        <div class="form-group">
                <label for="courseID">Course Name: </label>
                <select name="courseID" id="courseID" class="form-control">
                    @foreach ($CourseID as $course)
                        <option value="{{$course->id}}">{{$course->name}}</option>
                    @endforeach
                </select>
        </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
        </form>
</div>

@endsection