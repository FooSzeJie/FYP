@extends('layouts')
@section('content')


<div class="container">
    <br>
    <h1>Add Course</h1>
    <form action="{{route('addComment')}}" method="POST">
                @CSRF
                @foreach ($hrdfs as $hrdf)

                <div class="form-group">
                    <label for="studentName">Name: </label>
                    <label type="text" class="form-control" id="userID" name="userID" value="{{$user->id}}" readonly>{{$user->name}}</label>
                    <input type="hidden" class="form-control" id="userID" name="userID" value="{{$user->id}}">
                </div>

                <div class="form-group">
                    <label for="studentName">Name: </label>
                    <label type="text" class="form-control" id="userID" name="userID" value="{{$user->id}}" readonly>{{$user->name}}</label>
                    <input type="hidden" class="form-control" id="userID" name="userID" value="{{$user->id}}">
                </div>

                <div class="form-group">
                    <input type="hidden" class="form-control" id="status" name="status" value="{{$hrdf->status}}">
                </div>

                <div class="form-group">
                        <label for="courseID">Course Name</label>
                        <select name="courseID" id="courseID" class="form-control">
                            @foreach ($courseID as $course)
                                <option value="{{$course->id}}">{{$course->name}}</option>
                            @endforeach
                        </select>
                </div>
                @endforeach
                <button type="submit" class="btn btn-primary">ADD</button>
            </form>
</div>

@endsection