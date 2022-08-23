@extends('layouts')
@section('content')
   
<div class="container">


<h1 class="heading">contact us</h1>

<!-- contact section  -->

<section class="contact">

<div class="image">
    <img src="{{ asset('images/contact.png') }}" alt="">
</div>

<form action="{{route('addContact')}}" method="POST">
    @CSRF
    @foreach ($userID as $user)
    <div class="inputBox">
        <label for="studentName">Your Name: </label>
        <label type="text" class="form-control" id="userID" name="userID" value="{{$user->id}}" readonly>{{$user->name}}</label>
        <input type="hidden" backgroundcolor class="form-control" id="courseName" name="userID" value="{{$user->id}}">
    </div>
    @endforeach
    <div class="form-group">
                        <label for="courseID">Course Name</label>
                        <select name="courseID" id="courseID" class="form-control">
                            @foreach ($courseID as $course)
                                <option value="{{$course->id}}">{{$course->name}}</option>
                            @endforeach
                        </select>
                </div>

    <textarea placeholder="message" name="message" id="message" cols="30" rows="10"></textarea>

    <button type="submit" class="btn btn-primary">Send</button>

</form>

</section>

</div>

       
@endsection