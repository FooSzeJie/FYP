@extends('layouts2')
@section('content2')
<head>
    <title>Material Page</title>
    <style>
        .content{
            border: 1px solid white;
            padding-bottom: 5px;
            padding-left: 25px; 
            padding-right: 25px; 
            background-color: white;
        }

        .videoName
        {
            font-size: 70px;
            color: black;
            font-family: "Times New Roman", Times, serif;
            border-bottom: 1px groove grey;
        }

        .videoDescription
        {
            font-size: 20px; 
            color: #A9A9A9;
            font-family: "Times New Roman", Times, serif;
            margin-top: 5px;
            margin-bottom: 5px;
            padding-right: 50px;            
        }

        .fileName
        {
            color: blue;
            font-size: 30px; 
            font-family: "Times New Roman", Times, serif;
            margin-bottom: 20px;
        }

        .videoDescriptionContent
        {
            font-size: 20px; 
            color: black;
            font-family: "Times New Roman", Times, serif;
            margin-top: 25px;
            margin-bottom: 25px;
        }
    </style>
</head>


    @foreach($materialed as $material)
        <div class="video">
            <video width="520" height="360" controls>
                <source src="{{ asset('videos/') }}/{{$material->video}}" type="video/mp4">
                <source src="{{ asset('videos/') }}/{{$material->video}}" type="video/ogg">
                Your browser does not support the video tag.
            </video>
        </div>

        <div class="content">
            <h1 class="videoName">{{ $material->name}}</h3>
            <h3 class="videoDescription">Description</h6>
            <P style="color:black; font-size:20px">
                Our Website Documentation: 
                <a href="{{ asset('files/') }}/{{$material->materials}}" class="fileName">{{ $material->materials}}</a>
            </P>
            <p class="videoDescriptionContent">{{ $material->description}}</p>
        </div>
        @endforeach


@endsection