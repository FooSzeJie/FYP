<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
@yield('styles')


</head>
<body>
@if(Session::has('success'))
      <div class="alert alert-success" role="alert">
        {{ Session::get('success')}}
      </div>
    @endif
<div class="container">
<header>

    <a href="{{ asset('/') }}" class="logo">E-<span>EDU</span></a>

    <div id="menu" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="{{ asset('/') }}">home</a>
        <a href="{{ asset('viewCourse') }}">course</a>
        <a href="{{ asset('viewTeacher') }}">teacher</a>
        <a href="{{ asset('plans') }}">Plan</a>
        <a href= "{{ asset('event') }}">event</a>
        <!--<a href="price.html">price</a>-->
        <a href="{{ asset('viewComment') }}">review</a>
        <a href="{{ asset('addContactUs') }}">contact</a>
        
        @auth
            <a href="{{route('profile',['id'=>Auth::user()->id])}}"><img src="{{ asset('profileImage/') }}/{{Auth::user()->profileImage}}" alt="" width="30px" height="30px" class="rounded-circle" id ="profileImage"></a>
        @endauth
            @guest
            <a href="login">Login</a>
            @endguest
    </nav>

</header>

</div>

@yield('content')

<div class="container">
<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>about us</h3>
            <p>Our website offers the most comprehensive materials to help 
users learn more easily.</p>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="{{ asset('/') }}">home</a>
            <a href="{{ asset('viewCourse') }}">course</a>
            <a href="{{ asset('viewCourse') }}">teacher</a>
            <a href="{{ asset('plans') }}">Plan</a>
            <a href= "{{ asset('event') }}">event</a>
            <!--<a href="price.html">price</a>-->
            <a href="{{ asset('viewComment') }}">review</a>
            <a href="{{ asset('addContactUs') }}">contact</a>
            @auth
            <a href="{{route('profile',['id'=>Auth::user()->id])}}">{{ Auth::user()->name }}</a>
            @endauth
            @guest
            <a href="{{ url('/login') }}">Login</a>
            @endguest
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">twitter</a>
            <a href="#">instagram</a>
            <a href="#">linkedin</a>
        </div>

        <div class="box">
            <h3>contact us</h3>
           <p> <i class="fas fa-phone"></i> +601137386964 </p>
           <p> <i class="fas fa-envelope"></i> eeducenter96@gmail.com </p>
           <p> <i class="fas fa-map-marker-alt"></i> pasir gudang, malaysia - 81700 </p>
        </div>

    </div>

    <div class="credit"> created by <span> E-EDU.Center </span> | all rights reserved </div>

</section>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@yield('scripts')
</body>