@extends('layouts')
@section('content')
<head>
    <title>teacher</title>

</head>

<body>
    
<div class="container">

<h1 class="heading"> experienced instructors </h1>

<!-- teacher section  -->

<section class="teacher">

    <div class="box">
        <img src="images/Jing Xian6.jpeg" alt="">
        <h3>Pang Jing Xian</h3>
        <span>instructor</span>
        <p></p>
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>
    </div>

    <div class="box">
        <img src="images/Sze Jie.jpeg" alt="">
        <h3>Foo Sze Jie</h3>
        <span>instructor</span>
        <p></p>
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>
    </div>

    <div class="box">
        <img src="images/Jian An.jpeg" alt="">
        <h3>Tan Jian An</h3>
        <span>instructor</span>
        <p></p>
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>
    </div>
    

</section>

<section class="teacher">
    <div class="box">
        <span>Welcome to become our instructors</span>
        <br>
        <div class="btn">
        <a href="registerIns.html" style="color:white">Join Us!</a>
        </div>
        </div>
    </section>

<!-- custom js file link -->
<script src="{{ asset('js/script.js')}}"></script>

</body>
@endsection