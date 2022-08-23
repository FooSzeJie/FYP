<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>E_MATH_Score</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
        <link rel="stylesheet" href="css/game1.css">
        <style>
            h1{
                color: white;
            }

            .border{
                border: 1px solid #ddd;
            }

            .scoreboard{
                display: grid;
                grid-template-columns: 1fr 1fr;
                width: 300px;
                font-family: 'Quicksand', sans-serif;
            }

            .Name, .Score{
                font-weight: bold;
                text-align: center;
                border-bottom: 1px solid #ddd;
                padding-left: 1.5em;
                padding-right: 1.5em;
                color: white;
                font-size: 2.5em;
            }

            .playerName, .playerScore{
                font-size: 2em;
                text-align: center;
                color: white;
            }

        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <br><br>
                <h1 class="NameScore">ScoreBoard</h1>
                <div class="border">
                    <table class="scoreBoard">
                        
                        <thead>
                            <tr>
                                <td class="Name">Name</td>
                                <td class="Score">Score</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($events as $event)
                            <tr>
                                <td class="playerName">{{ $event->name }}</td>
                                <td class="playerScore">{{ $event->score }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>