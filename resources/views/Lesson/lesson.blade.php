@extends('layouts')
@section('content')
<head>
@foreach($courses as $course)
    <title>{{ $course->name }}</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .bttn
        {
            display: inline-block;
            margin-top: 1rem;
            padding:.8rem 3rem;
            border-radius: .5rem;
            background:#333;
            color:#fff;
            font-size: 1.7rem;
        }
    </style>
</head>

<body>

<!-- home section  -->
<div class="container">
    <section class="home">

        <div class="content">
            <h3>{{$course->name}}</h3>
    <br>

    <section class="contact">

    <div class="image">
        <img src="{{ asset('images/') }}/{{$course->image}}" alt="">
    </div>
    <div class="box">
                <p style = "font-family:georgia,garamond,serif;font-size:30px;font-style:italic;color:#6099b5">Provided</p>
                    <p style = "font-family:georgia,garamond,serif;font-size:30px;font-style:italic;color:#6099b5">By</p>
                            <p style = "font-family:georgia,garamond,serif;font-size:30px;font-style:italic;color:#6099b5">E-EDU Center</p>
                                <br>

                                @guest
                                <P>Please Login Account First. <a href="{{ url('/login') }}">Login</a></P>
                                @endguest

                                @auth
                                @if(Auth::user()->paymentStatus == 'approve' || Auth::user()->role=='teacher' || Auth::user()->role=='admin')
                                
                                    <a href="{{ url('/Lesson/' . $course->id. '/view') }}" class="btn">ENROLL</a>
                                    
                                    
                                @endif

                                @if(Auth::user()->paymentStatus == null || Auth::user()->paymentStatus == 'notApprove')
                                <a href="{{ route('plans.all') }}" class="btn" >Go to Paid First</a>
                                @endif

                                @if(Auth::check() && Auth::user()->role=='admin' || Auth::check() && Auth::user()->id == $course->teacher)
                                <a href="{{ url('/Lesson/' . $course->id. '/addLesson') }}" class="btn" >Create Lesson</a>
                                @endif
                                @endauth
                        
                        </div>
    </section>
    @endforeach

        


<section class="contact">

<div class="image">
    <img src="images/ExampleCert.png" alt="">
</div>

</section>

    </div>

	<br>

	</section>



<section class="teacher">

    <div class="box">
        <img src="{{ asset('images/F.jpg') }}" alt="">
        <h3></h3>
        <span>Is this course really 100% online? Do I need to attend any classes in person?</span>
        <p>This course is completely online, so there’s no need to show up to a classroom in person. You can access your lectures, readings and assignments anytime and anywhere via the web or your mobile device.</p>
        <!--<div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>-->
    </div>

    <div class="box">
        <img src="{{ asset('images/A.jpg') }}" alt="">
        <h3></h3>
        <span>Will I earn university credit for completing the Course?</span>
        <br><br>
        <p>No.</p>
        <!--<div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>-->
    </div>

    <div class="box">
        <img src="{{ asset('images/Q.jpg') }}" alt="">
        <h3></h3>
        <span>Is financial aid available?</span>
        <br><br><br>
        <p>Our system only provides HRDF to our instructors, so we very encourage college students to become our lecturers.</p>
        <!--<div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>-->
    </div>
    

</section>



<!-- custom js file link -->
<script src="js/script.js"></script>
<script type="text/javascript" src="{{ asset('js/global.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/lesson.js') }}"></script>

</body>
@endsection