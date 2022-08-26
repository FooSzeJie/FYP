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

    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <br><br>
            <h1>Comment</h1>
            <form action="{{route('addComment')}}" method="POST">
                @CSRF
                @foreach ($userID as $user)

                <div class="form-group">
                    <label for="studentName">Your Name: </label>
                    <label type="text" class="form-control" id="userID" name="userID" value="{{$user->id}}" readonly>{{$user->name}}</label>
                    <input type="hidden" class="form-control" id="userID" name="userID" value="{{$user->id}}">
                </div>

                <div class="form-group">
                    <label for="comment">Comment</label>
                    <br>
                    <textarea id="comment" name="comment" class="form-control" rows="10" cols="75"></textarea>
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
            <br>
        </div>
        <div class="col-sm-2"></div>
    </div>

@endsection