<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/LessonCss/Style.css')}}">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


    </head>

    <body>

        <div class="sidebar">
            <h3>Lesson Name</h3>
            @foreach($courses as $course)
            
            <a class="active" href="{{ url('/Lesson/' . $Lessons->courseID . '/' .$course->id) }}">Lesson {{$loop->iteration}}: {{ $course->name }}</a>
            @endforeach
        </div>

        @yield('content')

    </body>
</html>