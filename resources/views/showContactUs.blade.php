@extends('layouts')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <br><br>
            <h1>Contact Us</h1>
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <td>No.</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Messsage</td>
                        </tr>
                    </thead>
                    <tbody class="table-light">
                        @foreach($contacts as $contact)
                        <tr>
                            <td>{{$loop->iteration}}</td> 
                            <td>{{$contact->userName}}</td>
                            <td>{{$contact->userEmail}}</td>
                            <td>{{$contact->message}}</td>
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