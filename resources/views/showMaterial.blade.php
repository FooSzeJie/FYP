@extends('layouts2')
@section('content2')

<style>
    .material{
        display: flex;
        justify-content: center;
        text-align: center;
    }
</style>
<div class="container">
    <div class="row">
        <div class="material">
            <table class="">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>video</td>
                        <td>Name</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($materials as $material)
                    <tr>
                        <td>{{$material->id}}</td>
                        <td>
                            <video width="150" height="100" controls>
                                <source src="{{ asset('videos/') }}/{{$material->video}}" type="video/mp4">
                                <source src="{{ asset('videos/') }}/{{$material->video}}" type="video/ogg">
                            </video>
                        </td>
                        <td>{{$material->name}}</td>
                        <td>
                            <a href="#" class="btn">Edit</a>
                            <a href="#" class="btn">delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection