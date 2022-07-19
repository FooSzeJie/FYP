@extends('layouts')
@section('content')
<head>

    <title>home</title>

    
</head>

<body>

<!-- home section  -->

<div class="container">
    <section class="home" style="background: url('{{ asset('images/c.jpg')}}');">

        <div class="content">
            <h3>Welcome to E-EDU CENTER!</h3>
    <br>
            <p>On the E-EDU website, users can get a complete learning facility, users can choose the courses they want to learn, some of the courses are required to pay for because these courses contain deeper knowledge, users can also choose some free courses to take. </p>
        
        <p>Users can choose a loan when they want to take a course for a fee. If the user gets a very bright performance at school, they can choose "Scholarship". Users are required to send their transcripts to the office for review. </p>
        <p></p>
            <a href="login.html" class="btn">get started</a>
        </div>


            <img src="{{ asset('images/logo.png')}}" width="350" height="300">

        <br><br>

    </section>
</div>

<div class="container">  
    <section class="music">

        <div class="audio">	</div>
            <img src="{{ asset('images/yiruma.jpg')}}">
                <div class="info">
                    <h1>River Flows in You - feat. Yiruma, Jeroen van Veen</h1>
                    <p>Album - First Love</p>
                    <div class="audio">
                    <audio id="player" loop autoplay controls>
                        <source src="song/media/River Flows in You.ogg" type="audio/ogg">
                        <source src="song/media/River Flows in You.mp3" type="audio/mpeg"> 
                    </audio>

                    <!--<iframe src="song/media/River Flows in You.mp3" allow="autoplay" id="player"></iframe>-->
                </div>

        </div>
    </section>
</div>


<!-- custom js file link -->
<script src="{{ asset('js/script.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

</body>
@endsection