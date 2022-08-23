<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>E_MATH_EVENT</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
        <link rel="stylesheet" href="css/game1.css">
    </head>
    <body>
        <div class="container">
            <div id="home" class="flex-column flex-center">
                <h1>Are You Ready?</h1>
                <form action="{{route('EMathEvent')}}" method="POST">
                    @CSRF
                    <div class="form-group">
                        <input type="text" class="form-control" id="playerName" name="playerName" placeholder="Player Name" style="font-size: 2.0rem; padding: 2rem 0; width: 25rem; text-align: center; margin-bottom: 1rem;">            
                        <input type="hidden" class="form-control" id="score" name="score" value = 0>    
                                
                    </div>
                    <button type="submit" class="btn btn-primary">Play </button>
                </form>
                <a href="{{ asset ('EMathScore') }}" id="highscore-btn" class="btn">High Scores<i class="fas fa-crown"></i></a>
            </div>
            
        </div>
    </body>
</html>