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
                            <td>Payment Status</td>
                            <td>Role</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody class="table-light">
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td> 
                            <td>{{$user->name}}</td>
                            <td>{{$user->paymentStatus}}</td>
                            <td>{{$user->role}}</td>
                            <td>
                                @if (Auth::check() && Auth::user()->email === "abc@gmail.com")
                                    <a href="{{route('editRole',['id'=>$user->id])}}" class="btn btn-xs-danger">Edit Role</a>
                                @endif
                                <a href="{{ asset('files/hrdfForm.pdf') }}" class="btn btn-xs-danger">Open</a>
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