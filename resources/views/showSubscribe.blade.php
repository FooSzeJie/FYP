@extends('layouts')
@section('content')

<h1 class="heading"> Select Subscribe </h1>
<form action="{{route('paymentPage')}}" method="post">
<div class="row">
@foreach($subscribes as $subscribe)
  <div class="col-sm-auto">
    <div class="box">
            <h3>{{$subscribe -> name}}</h3>
            <p>{{$subscribe -> date}}days</p>
            <p>RM{{$subscribe -> cost}}
              <input type="hidden" value="{{$subscribe -> cost}}" name="cost">
            </p>
            <p>{{$subscribe -> description}}</p>
            <button class="btn btn-primary" type="submit">Purchase</button>
    </div>
  </div>
  @endforeach
</div>
</form>

@endsection