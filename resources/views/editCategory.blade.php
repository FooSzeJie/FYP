@extends('layouts')
@section('content')

<div class="container">
    <br>
    <h1>Edit Category</h1>
    <form action="{{ route('updateCategory')}}" method="POST" enctype="multipart/form-data">
            @CSRF
            @foreach($categories as $category)

            <div class="form-group">
                    <label for="categoryName">Categoty Name</label>
                    <input type="text" class="form-control" id="categoryName" name="categoryName" value="{{$category->name}}">
                    <input type="hidden" name="categoryID" id="categoryID" value="{{$category->id}}"> 
            </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
        </form>
</div>

@endsection