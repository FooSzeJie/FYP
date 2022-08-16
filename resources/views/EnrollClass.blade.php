@extends('layouts2')
@section('content2')

@foreach($courses as $course)
<div class="contentbox">
    <br>
       <h2 >Welcome to {{$course->name}} Course provided by E.EDU.Center</h2>
       <br>
       <img src="{{ asset('images/') }}/{{ $course ->image }}" width="350px" height="200px">
       <br><br>
       <h3>Description</h3>
            <p>{{ $course->description }}</p>
       </div>
       <button><a href="{{ route('edit.enrollClass', ['id' => $course -> id]) }}" class="btn">ENROLL</a></button>
@endforeach