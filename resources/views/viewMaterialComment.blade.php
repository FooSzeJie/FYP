@extends('layouts2')
@section('content2')

<head>
    <style>
        .review{
            display: flex;
            flex-wrap: wrap;
            gap:1.5rem;
        }

        .review .box{
        border-radius: .5rem;
        border:.1rem solid rgba(0,0,0,.1);
        padding:1rem;
        flex:1 1 30rem;
        }

        .review .box .student{
        display: flex;
        align-items: center;
        justify-content: space-between;
        }

        .review .box .student .student-info{
        display: flex;
        align-items: center;
        }

        .review .box .student i{
        font-size: 6rem;
        color:var(--pink);
        opacity: .5;
        }

        .review .box .student .student-info img{
        border-radius: 50%;
        object-fit: cover;
        height: 7rem;
        width:7rem;
        margin-right: 1.5rem;
        }

        .review .box .student .student-info h3{
        font-size: 2rem;
        color:#333;
        }

        .review .box .student .student-info span{
        font-size: 1.5rem;
        color:var(--pink);
        }

        .review .box .text{
        padding:1rem 0;
        font-size: 1.6rem;
        color:#666;
        }
    </style>
</head>

<div class="container">
        <h1 class="heading"> Disscussion </h1>

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