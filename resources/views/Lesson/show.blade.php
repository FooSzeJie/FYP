<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/LessonCss/Style.css')}}">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
        </style>


    </head>

    <body>

        <div class="sidebar">
            
            <h3><span><a href="{{url()->previous()}}"><i class="fa-sharp fa-solid fa-rotate-left"></i></a></span>Lesson Name</h3>
            @foreach($courses as $course)
            
            <a class="active" href="{{ url('/Lesson/' . $course->courseID . '/' .$course->id) }}">Lesson {{$loop->iteration}}: {{ $course->name }}</a>
            @endforeach
        </div>

        <div class="content">
            @foreach($Lessons as $lesson)
            <h1>{{$lesson->name}}</h1>
            <div class="video">
                <video width="1020" height="560" controls>
                    <source src="{{ asset('videos/') }}/{{$lesson->video}}" type="video/mp4">
                    <source src="{{ asset('videos/') }}/{{$lesson->video}}" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
            </div>
            

            @endforeach
        </div>

        </body>
</html>