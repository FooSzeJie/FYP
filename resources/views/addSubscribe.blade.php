@extends('layouts')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <br><br>
            <h1>Add Subscribe</h1>
            <form action="{{route('addSubscribe')}}" method="POST" enctype="multipart/form-data">
            @CSRF
                <div class="form-group">
                    <label for="subscribeName">Subscribe Name</label>
                    <input type="text" class="form-control" id="subscribeName" name="subscribeName">
                </div>
                <div class="form-group">
                    <label for="subscribeDate">Subscribe Day</label>
                    <input type="number" class="form-control" id="subscribeDate" name="subscribeDate">
                </div>
                <div class="form-group">
                    <label for="subscribeCost">Subscribe Cost</label>
                    <input type="number" class="form-control" id="subscribeCost" name="subscribeCost">
                </div>
                <div class="form-group">
                    <label for="subscribeDescription">Subscribe Description</label>
                    <input type="text" class="form-control" id="subscribeDescription" name="subscribeDescription">
                </div>
                <button type="submit" class="btn btn-primary">ADD</button>
            </form>
            <br>
        </div>
        <div class="col-sm-2"></div>
    </div>
</div>

@endsection