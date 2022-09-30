@extends('layouts')
@section('content')
<head>
    <title>Course</title>
    <style>
      .image{
        display: flex; 
        max-width:100%;
        width:100px;  
      }
    </style>
</head>

<div class="container">


<h1 class="heading"> elementary courses </h1>


<section class="course">
@foreach($courses as $course)
@if($course -> CategoryID == 1 )
<div class="row">
  <div class="col-sm-auto">
    <div class="box">
    <span class="amount">{{$course->amount}}</span>
            <img src="{{ asset('images/') }}/{{$course->image}}" alt="image" class="image">
            <!-- <a href="{{ route('CourseDetails', ['id' => $course -> id])}}" class="btn">learn more</a> -->
            <a href="{{ url('/Lesson/' . $course->id) }}" class="btn">learn more</a>
            @if(Auth::check() && Auth::user()->role=='admin' || Auth::check() && Auth::user()->id == $course->teacher)
            
    <a href="{{ route('editCourse',['id'=>$course->id])}}" class="btn btn-primary btn-xs">Edit</a>
    <a href="{{ route('deleteCourse',['id'=>$course->id])}}" class="btn btn-primary btn-xs">Delete</a>
@endif
            <h3>{{$course->name}}</h3>
            <p></p>
            <div class="icons">
                <p> <i class="far fa-clock"></i>{{$course->time}} &nbsp Hours</p>
                <p> <i class="far fa-calendar"></i> {{$course->month}} &nbsp Months</p>
                <p> <i class="fas fa-book"></i> {{$course->module}} &nbsp Modules</p>
            </div>
    </div>
  </div>
</div>
@endif
@endforeach


</section>


<h1 class="heading"> secondary courses </h1>
<section class="course">
@foreach($courses as $course)
@if($course -> CategoryID == 2 )
<div class="row">
  <div class="col-sm-auto">
    <div class="box">
    <span class="amount">{{$course->amount}}</span>
            <img src="{{ asset('images/') }}/{{$course->image}}" alt="image" class="image">
            <!-- <a href="{{ route('CourseDetails', ['id' => $course -> id])}}" class="btn">learn more</a> -->
            <a href="{{ url('/Lesson/' . $course->id) }}" class="btn">learn more</a>
            
            @if(Auth::check() && Auth::user()->role=='admin' || Auth::check() && Auth::user()->id == $course->teacher)
            
    <a href="{{ route('editCourse',['id'=>$course->id])}}" class="btn btn-primary btn-xs">Edit</a>
    <a href="{{ route('deleteCourse',['id'=>$course->id])}}" class="btn btn-primary btn-xs">Delete</a>
@endif
            <h3>{{$course->name}}</h3>
            <p></p>
            <div class="icons">
                <p> <i class="far fa-clock"></i>{{$course->time}} &nbsp Hours</p>
                <p> <i class="far fa-calendar"></i> {{$course->month}} &nbsp Months</p>
                <p> <i class="fas fa-book"></i> {{$course->module}} &nbsp Modules</p>
            </div>
    </div>
  </div>
</div>
@endif
@endforeach
</section>

<h1 class="heading"> advance courses </h1>
<section class="course">
@foreach($courses as $course)
@if($course -> CategoryID == 3 )
<div class="row">
  <div class="col-sm-auto">
    <div class="box">
    <span class="amount">{{$course->amount}}</span>
            <img src="{{ asset('images/') }}/{{$course->image}}" alt="image" class="image">
            <!-- <a href="{{ route('CourseDetails', ['id' => $course -> id])}}" class="btn">learn more</a> -->
            <a href="{{ route('lesson', ['CourseID' => $course -> id]) }}" class="btn">learn more</a>

            @if(Auth::check() && Auth::user()->role=='admin' || Auth::check() && Auth::user()->id == $course->teacher)
            
    <a href="{{ route('editCourse',['id'=>$course->id])}}" class="btn btn-primary btn-xs">Edit</a>
    <a href="{{ route('deleteCourse',['id'=>$course->id])}}" class="btn btn-primary btn-xs">Delete</a>
@endif
            <h3>{{$course->name}}</h3>
            <p></p>
            <div class="icons">
                <p> <i class="far fa-clock"></i>{{$course->time}} &nbsp Hours</p>
                <p> <i class="far fa-calendar"></i> {{$course->month}} &nbsp Months</p>
                <p> <i class="fas fa-book"></i> {{$course->module}} &nbsp Modules</p>
            </div>
    </div>
  </div>
</div>
@endif
@endforeach
</section>
@if(Auth::check() && Auth::user()->role=='admin' || Auth::check() && Auth::user()->role=='teacher')

@endif
</div>




@endsection
