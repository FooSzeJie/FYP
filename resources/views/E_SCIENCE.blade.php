@extends('layouts')
@section('content')
<head>
    <title>E-SCIENCE</title>

</head>
<body>

<!-- home section  -->
<div class="container">
<section class="home">

    <div class="content">
        <h3>Elementary Science</h3>
<br>

<section class="contact">

<div class="image">
    <img src="images/E_SCIENCE.png" alt="">
</div>
<div class="box">
            <p style = "font-family:georgia,garamond,serif;font-size:30px;font-style:italic;color:#6099b5">Provided</p>
                <p style = "font-family:georgia,garamond,serif;font-size:30px;font-style:italic;color:#6099b5">By</p>
                        <p style = "font-family:georgia,garamond,serif;font-size:30px;font-style:italic;color:#6099b5">E-EDU Center</p>

                            <a href="" class="btn">HRDF</a>
                            <br>
                            <a href="material_E_SCIENCE.html" class="btn">ENROLL</a>
                            </div>
</section>

        <h3>Class Content:</h3>

<section class="container">
    <div class="home">
    <button class="btn contentbtn1"></button>
    <button class="btn contentbtn2"></button>
    <button class="btn contentbtn3"></button>
    <button class="btn contentbtn4"></button>
    <button class="btn contentbtn4"></button>
    </div>

</section>






    </div>
  </section>  

<section class="">

    <div class="content">
        <h4>You will receive the certificate when you complete this subject</h4>
        <!--<h4 style="color:red">! free account didn't provide any certificate</h4>-->


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
        <img src="images/F.jpg" alt="">
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
        <img src="images/A.jpg" alt="">
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
        <img src="images/Q.jpg" alt="">
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
<script src="{{ asset('js/script.js')}}"></script>

</body>
@endsection