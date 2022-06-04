@extends('layouts')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>course</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">

</head>
<body>
    
<div class="container">
<h1 class="heading"> elementary courses </h1>

<!-- course section  -->

<section class="course">

    <div class="box">
        <span class="amount">short</span>
        <img src="images/E_ENGL.png" alt="">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <h3>Elementary English</h3>
        <p></p>
        <a href="E_ENGL.html" class="btn">learn more</a>
        <div class="icons">
            <p> <i class="far fa-clock"></i> 2 hours </p>
            <p> <i class="far fa-calendar"></i> 6 months </p>
            <p> <i class="fas fa-book"></i> 12 modules </p>
        </div>
    </div>

    <div class="box">
        <span class="amount">short</span>
        <img src="images/E_CHINESE.png" alt="">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <h3>Elementary Chinese</h3>
        <p></p>
        <a href="E_CHINESE.html" class="btn">learn more</a>
        <div class="icons">
            <p> <i class="far fa-clock"></i> 2 hours </p>
            <p> <i class="far fa-calendar"></i> 6 months </p>
            <p> <i class="fas fa-book"></i> 12 modules </p>
        </div>
    </div>

    <div class="box">
        <span class="amount">short</span>
        <img src="images/E_MATH.png" alt="">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <h3>Elementary Mathematics</h3>
        <p></p>
        <a href="E_MATH.html" class="btn">learn more</a>
        <div class="icons">
            <p> <i class="far fa-clock"></i> 2 hours </p>
            <p> <i class="far fa-calendar"></i> 6 months </p>
            <p> <i class="fas fa-book"></i> 12 modules </p>
        </div>
    </div>

    <div class="box">
        <span class="amount">short</span>
        <img src="images/E_SCIENCE.png" alt="">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <h3>Elementary Science</h3>
        <p></p>
        <a href="E_SCIENCE.html" class="btn">learn more</a>
        <div class="icons">
            <p> <i class="far fa-clock"></i> 2 hours </p>
            <p> <i class="far fa-calendar"></i> 6 months </p>
            <p> <i class="fas fa-book"></i> 12 modules </p>
        </div>
    </div>

    <div class="box">
        <span class="amount">short</span>
        <img src="images/E_BM.png" alt="">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <h3>Elementary Bahasa Melayu</h3>
        <p></p>
        <a href="E_BM.html" class="btn">learn more</a>
        <div class="icons">
            <p> <i class="far fa-clock"></i> 2 hours </p>
            <p> <i class="far fa-calendar"></i> 6 months </p>
            <p> <i class="fas fa-book"></i> 12 modules </p>
        </div>
    </div>

    <div class="box">
        <span class="amount">-</span>
        <img src="images/E_CS.png" alt="">
        <div class="stars">
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <h3>-</h3>
        <p></p>
        <a href="#" class="btn">learn more</a>
        <div class="icons">
            <p> <i class="far fa-clock"></i> - </p>
            <p> <i class="far fa-calendar"></i> - </p>
            <p> <i class="fas fa-book"></i> - </p>
        </div>
    </div>

</section>

<h1 class="heading"> secondary courses </h1>

<!-- course section  -->

<section class="course">

    <div class="box">
        <span class="amount">short</span>
        <img src="images/S_CHINESE.png" alt="">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <h3>Secondary Chinese</h3>
        <p></p>
        <a href="S_CHINESE.html" class="btn">learn more</a>
        <div class="icons">
            <p> <i class="far fa-clock"></i> 2 hours </p>
            <p> <i class="far fa-calendar"></i> 6 months </p>
            <p> <i class="fas fa-book"></i> 12 modules </p>
        </div>
    </div>

    <div class="box">
        <span class="amount">short</span>
        <img src="images/S_ENGL.png" alt="">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <h3>Secondary English</h3>
        <p></p>
        <a href="S_ENGL.html" class="btn">learn more</a>
        <div class="icons">
            <p> <i class="far fa-clock"></i> 2 hours </p>
            <p> <i class="far fa-calendar"></i> 6 months </p>
            <p> <i class="fas fa-book"></i> 12 modules </p>
        </div>
    </div>

    <div class="box">
        <span class="amount">short</span>
        <img src="images/S_SCIENCE.png" alt="">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <h3>Secondary Science</h3>
        <p></p>
        <a href="S_SCIENCE.html" class="btn">learn more</a>
        <div class="icons">
            <p> <i class="far fa-clock"></i> 2 hours </p>
            <p> <i class="far fa-calendar"></i> 6 months </p>
            <p> <i class="fas fa-book"></i> 12 modules </p>
        </div>
    </div>

    <div class="box">
        <span class="amount">short</span>
        <img src="images/S_ACC.png" alt="">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <h3>Basic Accounting</h3>
        <p></p>
        <a href="S_ACC.html" class="btn">learn more</a>
        <div class="icons">
            <p> <i class="far fa-clock"></i> 2 hours </p>
            <p> <i class="far fa-calendar"></i> 6 months </p>
            <p> <i class="fas fa-book"></i> 12 modules </p>
        </div>
    </div>

    <div class="box">
        <span class="amount">-</span>
        <img src="images/E_CS.png" alt="">
        <div class="stars">
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <h3>-</h3>
        <p></p>
        <a href="course.html" class="btn">learn more</a>
        <div class="icons">
            <p> <i class="far fa-clock"></i> - </p>
            <p> <i class="far fa-calendar"></i> - </p>
            <p> <i class="fas fa-book"></i> - </p>
        </div>
    </div>

    <div class="box">
        <span class="amount">-</span>
        <img src="images/E_CS.png" alt="">
        <div class="stars">
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <h3>-</h3>
        <p></p>
        <a href="course.html" class="btn">learn more</a>
        <div class="icons">
            <p> <i class="far fa-clock"></i> - </p>
            <p> <i class="far fa-calendar"></i> - </p>
            <p> <i class="fas fa-book"></i> - </p>
        </div>
    </div>

</section>

<h1 class="heading"> advanced courses </h1>

<!-- course section  -->

<section class="course">

    <div class="box">
        <span class="amount">long</span>
        <img src="images/A_WEB.jpg" alt="">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <h3>Web Programming</h3>
        <p></p>
        <a href="#" class="btn">learn more</a>
        <div class="icons">
            <p> <i class="far fa-clock"></i> 2 hours </p>
            <p> <i class="far fa-calendar"></i> 6 months </p>
            <p> <i class="fas fa-book"></i> 12 modules </p>
        </div>
    </div>

    <div class="box">
        <span class="amount">short</span>
        <img src="images/A_HTMLCSS.jpg" alt="">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <h3>Basic HTML & CSS</h3>
        <p></p>
        <a href="#" class="btn">learn more</a>
        <div class="icons">
            <p> <i class="far fa-clock"></i> 2 hours </p>
            <p> <i class="far fa-calendar"></i> 6 months </p>
            <p> <i class="fas fa-book"></i> 12 modules </p>
        </div>
    </div>

    <div class="box">
        <span class="amount">long</span>
        <img src="images/A_CYBERSECURITY.png" alt="">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <h3>cybersecurity</h3>
        <p></p>
        <a href="#" class="btn">learn more</a>
        <div class="icons">
            <p> <i class="far fa-clock"></i> 2 hours </p>
            <p> <i class="far fa-calendar"></i> 6 months </p>
            <p> <i class="fas fa-book"></i> 12 modules </p>
        </div>
    </div>

    <div class="box">
        <span class="amount">short</span>
        <img src="images/A_HACKING.png" alt="">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <h3>ethical hacking</h3>
        <p></p>
        <a href="#" class="btn">learn more</a>
        <div class="icons">
            <p> <i class="far fa-clock"></i> 2 hours </p>
            <p> <i class="far fa-calendar"></i> 6 months </p>
            <p> <i class="fas fa-book"></i> 12 modules </p>
        </div>
    </div>

    <div class="box">
        <span class="amount">-</span>
        <img src="images/E_CS.png" alt="">
        <div class="stars">
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <h3>-</h3>
        <p></p>
        <a href="course.html" class="btn">learn more</a>
        <div class="icons">
            <p> <i class="far fa-clock"></i> - </p>
            <p> <i class="far fa-calendar"></i> - </p>
            <p> <i class="fas fa-book"></i> - </p>
        </div>
    </div>

    <div class="box">
        <span class="amount">-</span>
        <img src="images/E_CS.png" alt="">
        <div class="stars">
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <h3>-</h3>
        <p></p>
        <a href="course.html" class="btn">learn more</a>
        <div class="icons">
            <p> <i class="far fa-clock"></i> - </p>
            <p> <i class="far fa-calendar"></i> - </p>
            <p> <i class="fas fa-book"></i> - </p>
        </div>
    </div>

</section>

<!-- custom js file link -->
<script src="{{ asset('js/script.js')}}"></script>

</body>
@endsection