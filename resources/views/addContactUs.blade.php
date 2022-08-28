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
    <div class="inputBox">
        <label for="studentName">Your Name: </label>
        <label type="text" class="form-control" id="userID" name="userID" value="{{ Auth::user()->id }}">{{ Auth::user()->name }}</label>
        <input type="hidden" name="courseID" id="courseID">
    </div>

    <textarea placeholder="message" name="message" id="message" cols="30" rows="10"></textarea>

    <button type="submit" class="btn btn-primary">Send</button>

</form>

</section>

</div>

       
@endsection