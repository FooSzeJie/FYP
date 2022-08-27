<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>E_MATH_EVENT</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/game1.css') }}">
        <style>
            .btn-back{
                font-size: 2.4rem;
                padding: 2rem 0;
                width: 30rem;
                text-align: center;
                margin-bottom: 1rem;
                text-decoration: none;
                color: rgb(28,26,26);
                background: #A9A9A9;
                border-radius: 4px;
            }

            .btn-back:hover{
                cursor: pointer;
                box-shadow: 0 0.4rem 1.4rem 0 white;
                transition: transform 150ms;
                transform: scale(1.03);
            }
        </style>

    </head>
    <body>
        <div class="container">
            <div id="home" class="flex-column flex-center">
                <h1>Are You Ready?</h1>
                <form action="{{route('EMathEvent')}}" method="POST">
                    @CSRF
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Player Name" style="font-size: 2.0rem; padding: 2rem 0; width: 25rem; text-align: center; margin-bottom: 1rem;">            
                        <input type="hidden" class="form-control" id="score" name="score">    
                                
                    </div>
                    <button type="submit" class="btn btn-primary">Play </button>
                </form>
                <a href="{{ asset ('EMathScore') }}" id="highscore-btn" class="btn">High Scores<i class="fas fa-crown"></i></a>
                <a href="{{ asset ('/event') }}" class="btn-back">Back<i class="fas fa-crown"></i></a>
            </div>
            
        </div>
    </body>
</html>