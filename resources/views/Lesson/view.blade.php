@extends('layouts')
@section('content')
<head>
    <title>E-ENGL</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

<!-- home section  -->
<div class="container">
    <section class="home">

        <div class="content">
        <h3>Class Content:</h3><br>

        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">Lesson</th>
                <th scope="col">Lesson Name</th>
                <th scope="col">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach($lessons as $lesson)
                <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{ $lesson->name }}</td>
                <td><a href="{{ url('/Lesson/' . $lesson->courseID. '/' . $lesson->id) }}" class="btn btn-outline-success"> Enter </a></td>
                </tr>  
                @endforeach              
            </tbody>
        </table>
    <br>

    <section class="contact">

    <div class="image">
        <img src="{{ asset('images/') }}/" alt="">
    </div>
    


<section class="">
    

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

</body>
@endsection