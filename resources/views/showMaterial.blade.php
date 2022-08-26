@extends('layouts2')
@section('content2')

<head>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <style>
        .container{
            display: flex;
            padding-left: 20rem;
        }

        .btn{
            display: inline-block;
            margin-top: 1rem;
            padding:.5rem 1rem;
            border-radius: .5rem;
            background:#333;
            color:#fff;
            cursor: pointer;
            font-size: 2rem;
            }

        .btn:hover{
            color: grey;
            }
    </style>
</head>

<div>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-12">
            <br><br>
            <h1>Show Material</h1>
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <td>ID</td>
                            <td>video</td>
                            <td>Name</td>
                            <td>Document</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody class="table-light">
                        @foreach($materialed as $material)
                        <tr>
                            <td>{{$material->id}}</td>
                            <td>
                                <video width="150" height="100" controls>
                                    <source src="{{ asset('videos/') }}/{{$material->video}}" type="video/mp4">
                                    <source src="{{ asset('videos/') }}/{{$material->video}}" type="video/ogg">
                                </video>
                            </td>
                            <td>{{$material->name}}</td>
                            <td>{{ $material->materials }}</td>
                            <td>
                                <a href="{{ route('editMaterial',['id'=>$material->id]) }}" class="btn btn-xs-danger">edit</a>
                                <a href="{{ route('deleteMaterial',['id' =>$material->id])}}" class="btn btn-xs-danger">delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            <br><br>
            <div class="container">
</div>
        </div>
        <div class="col-sm-1"></div>
    </div>

@endsection