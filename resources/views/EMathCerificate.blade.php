<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>E_MATH_EVENT</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/game1.css') }}">
    </head>
    <body>
        <div class="container">
            <div id="home" class="flex-column flex-center">
                @foreach($events as $event)
                <h1>You get the {{ $event-> score }}</h1>
                <form action="" method="POST" enctype="multipart/form-data">                    
                    <div class="form-group">
                        <label for="NameID">Name: {{$event->name}}</label>
                    </div>

                    <div class="form-group">
                        <label for="eventScore">Score: {{$event->score}}</label>
                    </div>

                    @endforeach

                    @if($event->score >= 300)
                    <button><a href="{{ asset ('files/cert.pdf') }}" id="highscore-btn" class="btn">Print Cerificate<i class="fas fa-crown"></i></a></button>
                    @endif
                    <button><a href="{{ asset ('EMathScore') }}" id="highscore-btn" class="btn">High Scores<i class="fas fa-crown"></i></a></button>
                </form>
                
            </div>
            
        </div>
    </body>
</html>