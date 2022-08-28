@extends('layouts')
@section('content')

<div class="container">
<h1 class="heading"> Experienced Instructors </h1>

<!-- teacher section  -->

<section class="teacher">
    @foreach($teachers as $teacher)
    @if($teacher->role == 'teacher')

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
    @endif
    @endforeach     
</section>

</div> 

@endsection