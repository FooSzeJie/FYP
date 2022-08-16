@extends('layouts')
@section('content')
<head>
    <title>review</title>
</head>
<body>
    
    <div class="container">
        <h1 class="heading"> student's review </h1>

        <!-- review section  -->

        <section class="review">
        @foreach($comments as $comment)
            <div class="box">
                <div class="student">
                    <div class="student-info">
                        <img src="{{ asset('profileImage/') }}/{{ $comment->profileImage }}" alt="">
                        <div class="info">
                            <h3>{{ $comment->userName }}</h3>
                            <span>{{ $comment->courseName }}</span>
                        </div>
                    </div>
                    <i class="fas fa-quote-right"></i>
                </div>
                <p class="text">{{ $comment->comment }}</p>
            </div>
            @endforeach
        </section>
    </div>

    <!-- custom js file link -->
    <script src="js/script.js"></script>

</body>
@endsection