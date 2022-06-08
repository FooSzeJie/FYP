@extends('layouts')
@section('content')
<head>
    <title>Course</title>
    <style>
        .checked{
          color:var(--violet);
          font-size: 1.5rem;
          padding:1rem 0;
        }
        .unchecked{
          font-size: 1.5rem;
          padding:1rem 0;
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
            <img src="{{ asset('images/') }}/{{$course->image}}" alt="">
            <div id="div{{$course->id}}">
              <script>
                star()

                function star() {
                    var numberOfStar = {{$course->star}};
                                  
                    var totalNumberOfStar = 5 - numberOfStar;
                    var span = document.getElementById("div{{$course->id}}");
                    for (numberOfStar; numberOfStar > 0; numberOfStar--) {
                        var spanStar = document.createElement('span');
                        spanStar.classList.add("checked");
                        spanStar.classList.add("fa");
                        spanStar.classList.add("fa-star");
                        span.appendChild(spanStar);
                    }
                    for (totalNumberOfStar; totalNumberOfStar > 0; totalNumberOfStar--) {
                        var spanStar = document.createElement('span');
                        spanStar.classList.add("unchecked");
                        spanStar.classList.add("fa");
                        spanStar.classList.add("fa-star");
                        span.appendChild(spanStar);
                    }
                }
              </script>
            </div>
            <button class="btn btn-info btn-xs">Learn More</button>
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
            <img src="{{ asset('images/') }}/{{$course->image}}" alt="" >
            <div id="div{{$course->id}}">
              <script>
                star()

                function star() {
                    var numberOfStar = {{$course->star}};
                                  
                    var totalNumberOfStar = 5 - numberOfStar;
                    var span = document.getElementById("div{{$course->id}}");
                    for (numberOfStar; numberOfStar > 0; numberOfStar--) {
                        var spanStar = document.createElement('span');
                        spanStar.classList.add("checked");
                        spanStar.classList.add("fa");
                        spanStar.classList.add("fa-star");
                        span.appendChild(spanStar);
                    }
                    for (totalNumberOfStar; totalNumberOfStar > 0; totalNumberOfStar--) {
                        var spanStar = document.createElement('span');
                        spanStar.classList.add("unchecked");
                        spanStar.classList.add("fa");
                        spanStar.classList.add("fa-star");
                        span.appendChild(spanStar);
                    }
                }
              </script>
            </div>
            <button class="btn btn-info btn-xs">Learn More</button>
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
            <img src="{{ asset('images/') }}/{{$course->image}}" alt="" >
            <div id="div{{$course->id}}">
              <script>
                star()

                function star() {
                    var numberOfStar = {{$course->star}};
                                  
                    var totalNumberOfStar = 5 - numberOfStar;
                    var span = document.getElementById("div{{$course->id}}");
                    for (numberOfStar; numberOfStar > 0; numberOfStar--) {
                        var spanStar = document.createElement('span');
                        spanStar.classList.add("checked");
                        spanStar.classList.add("fa");
                        spanStar.classList.add("fa-star");
                        span.appendChild(spanStar);
                    }
                    for (totalNumberOfStar; totalNumberOfStar > 0; totalNumberOfStar--) {
                        var spanStar = document.createElement('span');
                        spanStar.classList.add("unchecked");
                        spanStar.classList.add("fa");
                        spanStar.classList.add("fa-star");
                        span.appendChild(spanStar);
                    }
                }
              </script>
            </div>
            <button class="btn btn-info btn-xs">Learn More</button>
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
</div>




@endsection
