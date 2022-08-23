@extends('layouts')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <br><br>
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <td>ID</td>
                            <td>Name</td>
                            <td>Hrdf File</td>
                            <td>status</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody class="table-light">
                        @foreach($hrdfs as $hrdf)
                        <tr>
                            <td>{{$hrdf->id}}</td> 
                            <td>{{$hrdf->userName}}</td>
                            <td>{{$hrdf->hrdfForm}}</td>
                            <td>{{$hrdf->status}}</td>
                            <td>
                                @if (Auth::check() && Auth::user()->email === "abc@gmail.com")
                                    <a href="{{ route('editHrdf',['id' =>$hrdf->id])}}" class="btn btn-xs-danger">Approve</a>
                                    <a href="{{ route('rejectHrdf',['id' =>$hrdf->id])}}" class="btn btn-xs-danger">Reject</a>
                                @endif
                                <a href="{{ asset('files/') }}/{{$hrdf->hrdfForm}}" class="btn btn-xs-danger">Open</a>
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