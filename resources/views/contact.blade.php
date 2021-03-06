@extends('layouts')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">

</head>

<body>

    <h1 class="heading">contact us</h1>

    <!-- contact section  -->
    <section class="contact">
        <div class="image">
            <img src="{{ asset('images/contact.png')}}" alt="">
        </div>

        <form action="">

            <div class="inputBox">
                <input type="text" placeholder="name">
                <input type="email" placeholder="email">
            </div>

            <input type="text" placeholder="subject" class="box">

            <textarea placeholder="message" name="" id="" cols="30" rows="10"></textarea>

            <input type="submit" class="btn" value="send">

        </form>

    </section>

    <!-- custom js file link -->
    <script src="{{ asset('js/script.js')}}"></script>

</body>
@endsection