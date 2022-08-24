@extends('layouts')
@section('content')
<style>
  #outer
{
    width:100%;
    text-align: center;
}
.inner
{
    display: inline-block;
}
</style>
<div class="container">
  <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
      <h3>Profile</h3>
      @foreach($users as $user)
          <label for="profileName">Profile Name</label>
          <input type="text" id="profileName" name="profileName" value="{{$user->name}}" disabled>
          <br>
          <label for="profileImage">Profile Image</label>
          <img src="{{ asset('profileImage/') }}/{{$user->profileImage}}" alt="" class="rounded" width="70" height="70">
          <br>
          <label for="profileAddress">Address</label>
          <input type="text" id="profileAddress" name="profileAddress" value="{{$user->address}}" disabled>
          <br>
          <label for="age">Age</label>
          <input type="number" id="age" name="age" value="{{$user->age}}" disabled>

          <div id="outer">
            <div class="inner"><a href="#" class="btn btn-xs-primary">Edit Profile</a></div>
            <div class="inner"><a class="btn btn-xs-primary" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form></div>
          </div>
      @endforeach
    </div>
    <div class="col-sm-1"></div>
  </div>
</div>

@endsection