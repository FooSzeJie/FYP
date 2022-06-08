@extends('layouts')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <br><br>
            <h1>Add Category</h1>
            <form action="{{route('addCategory')}}" method="POST">
            @CSRF
                <div class="form-group">
                    <label for="categoryName">Categoty Name</label>
                    <input type="text" class="form-control" id="categoryName" name="categoryName">
                </div>
                <button type="submit" class="btn btn-primary">ADD</button>
            </form>
            <br>
        </div>
        <div class="col-sm-2"></div>
    </div>
</div>

@endsection