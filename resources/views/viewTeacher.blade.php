@extends('layouts')
@section('content')

<div class="container">
<h1 class="heading"> experienced instructors </h1>

<!-- teacher section  -->
@foreach($teachers as $teacher)
@if($teacher -> role == 'teacher')
<section class="teacher">

    <div class="row">
        <div class="col-sm-auto">
                    <div class="box">
                        <img src="{{ asset('profileImage/') }}/{{ $teacher->profileImage }}" alt="">
                        <h3>{{$teacher->name}}</h3>
                        <span>instructor</span>
                        <p></p>
                        <div class="share">
                            <a href="#" class="fab fa-facebook-f"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-instagram"></a>
                            <a href="#" class="fab fa-linkedin"></a>
                        </div>
                    </div>
                </div>
        </div>        
   </div> 

</section>
 @endif
@endforeach  
@endsection