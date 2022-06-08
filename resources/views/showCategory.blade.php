@extends('layouts')
@section('content')

<style>
    .course{
        display: flex;
        justify-content: center;
        text-align: center;
    }
</style>
<div class="container">
    <div class="row">
        <div class="course">
            <table class="">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($courses as $course)
                    <tr>
                        <td>{{$course->id}}</td>
                        <td>{{$course->name}}</td>
                        <td><a href="{{ route('editCourse',['id'=>$course->id]) }}" class="btn">Edit</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection