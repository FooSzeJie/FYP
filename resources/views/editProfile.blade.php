@extends('layouts')
@section('content')

<div class="container">
    <br>
    <h1>Edit Class</h1>
    <form action="{{ route('updateProfile')}}" method="POST" enctype="multipart/form-data">
            @CSRF
            @foreach($users as $user)
            <div class="form-group">
                <label for="userName">Course Name: </label>
                <input type="text" class="form-control" id="userName" name="userName" value="{{$user->name}}"> 
                <input type="hidden" name="userID" id="userID" value="{{$user->id}}"> 
            </div>

            <div class="form-group">
                <label for="userAge">Age: </label>
                <input type="text" id="userAge" name="userAge" class="form-control" value="{{$user->age}}">
            </div>

            <div class="form-group">
                <label for="userAddress">Address: </label>
                <input type="text" class="form-control" id="userAddress" name="userAddress" value="{{$user->address}}">
            </div>

            <div class="form-group">
                    <label for="ProfileImage">Profile Image: </label>
                    <img src="{{ asset('images')}}/{{$user->image}}" alt="" class="img-fluid" width="100">
                    <input type="file" class="form-control" id="ProfileImage" name="ProfileImage" value="">
            </div>

           
            @endforeach
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
        </form>
</div>

@endsection