@extends('layouts')
@section('content')

<div class="container">
            <br>
            <h1>upload hrdf</h1>
            <form action="{{ route('uploadHrdf')}}" method="POST" enctype="multipart/form-data">
            @CSRF
            @foreach($userID as $user)
            <div class="form-group">
                <label for="courseName">Teacher Name: </label>
                <label for="courseName" value="{{$user->id}}">{{$user->name}}</label>
                <input type="hidden" class="form-control" id="userID" name="userID" value="{{$user->id}}"> 
                <input type="hidden" name="status" id="status" value="Pending"> 
            </div>

            <div class="form-group">
                <label for="HRDFForm">HRDF Form</label>
                <input type="file" class="form-control" id="HRDFForm" name="HRDFForm">
                <span>#Please rename the file name to hrdf_email. Example: hrdf_abc@gmail.com</span>
            </div>

            @endforeach
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
        </form>
</div>



@endsection