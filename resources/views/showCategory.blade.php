@extends('layouts')
@section('content')

<div class="container">
    
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <br><br>
            <h1>Show Category</h1>
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <td>NO.</td>
                            <td>Name</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody class="table-light">
                        @foreach($categories as $category)
                        <tr>
                            <td>{{$loop->iteration}}</td> 
                            <td>{{$category->name}}</td>
                            <td>
                                    <a href="{{ route('editCategory',['id'=>$category->id]) }}" class="btn btn-xs-danger">edit</a>
                                    <a href="{{ route('deleteCategory',['id' =>$category->id])}}" class="btn btn-xs-danger">delete</a>
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
</div>

@endsection