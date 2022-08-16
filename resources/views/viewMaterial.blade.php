@extends('layouts2')
@section('content2')
<head>
    <title>Material Page</title>

</head>

<body>
    @foreach($materials as $material)
    <video width="520" height="360" controls>
        <source src="{{ asset('videos/') }}/{{$material->video}}" type="video/mp4">
        <source src="{{ asset('videos/') }}/{{$material->video}}" type="video/ogg">
        Your browser does not support the video tag.
    </video>
    <h3>{{ $material->name}}</h3>
    <p style="color:white">{{ $material->description}}</p>

    @endforeach
</body>

@endsection