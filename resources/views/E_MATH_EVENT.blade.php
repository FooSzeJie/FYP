@extends('layouts')
@section('content')
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>E_MATH_EVENT</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/game1.css')}}">
    </head>

    <body>
        <div class="container">
            <div id="home" class="flex-column flex-center">
                <h1>Are You Ready?</h1>
                <a href="E_MATH_GAME.html" class="btn">Play</a>
                <a href="highscores.html" id="highscore-btn" class="btn">High Scores<i class="fas fa-crown"></i></a>
            </div>
            
        </div>
    </body>
@endsection