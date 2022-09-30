@extends('layouts')
@section('content')

<div class="container">
    <br>

    <h1>Create The New Lesson</h1>
    <form action="{{ url('/Lesson/{$CourseID}/addLesson/create') }}" method="post">
    @CSRF
        <label>Name:</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>

        <label for="video">Video: </label></br>
        <input type="file" class="form-control" id="video" name="video"></br>


        <label for="materials">Material: </label></br>
        <input type="file" class="form-control" id="materials" name="materials"></br>

        <label for="Lesson">Lesson: </label><br>
        <textarea type="text" id="lesson" name="lesson" class="form-control" rows="10" cols="75"></textarea></br>

        <label for="courseID">Course Name: </label></br>
        <select name="courseID" id="courseID" class="form-control">
            @foreach ($courseID as $course)
                <option value="{{$course->id}}">{{$course->name}}</option>
            @endforeach
        </select><br> 

        <input type="submit" value="add" class="btn btn-success"><br>
    </form>
</div>

@endsection
