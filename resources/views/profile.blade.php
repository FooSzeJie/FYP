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

#toggleButton
{
  color: #fff;
  background-color: #323232 ;
  border-color: #323232;
}

#toggleButton:hover
{
  color: #fff;
  background-color: #c82333;
  border-color: #323232; 
}

#toggleButton:focus
{
  -webkit-box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5);
  box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5);
}

#toggleButton:disabled
{
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545;
}

</style>
<div class="container">
  <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
      <h3>Profile</h3>
      @foreach($users as $user)
          <label for="profileName">Profile Name: </label>
          <input type="text" id="profileName" name="profileName" value="{{$user->name}}" readonly>
          <br>
          <label for="profileImage">Profile Image: </label>
          <img src="{{ asset('profileImage/') }}/{{$user->profileImage}}" alt="" class="rounded" width="70" height="70">
          <br>
          <label for="profileAddress">Address: </label>
          <input type="text" id="profileAddress" name="profileAddress" value="{{$user->address}}" readonly>
          <br>
          <label for="age">Age: </label>
          <input type="number" id="age" name="age" value="{{$user->age}}" readonly>

          <div id="outer">
            @if(Auth::check() && Auth::user()->role=='admin' || Auth::user()->email === "abc@gmail.com")
              <div class="inner">
                <a class="dropdown-toggle, btn btn-xs-danger" id="toggleButton"  data-toggle="dropdown" aria-expanded="false">Admin Control</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a href="{{ route('viewUser')}}" class="dropdown-item">Change Role</a>
                  <a href="{{ asset('addCategory')}}" class="dropdown-item">Create Category</a>
                  <a href="{{ route('showCategory')}}" class="dropdown-item">Show Category</a>
                  <a href="{{ route('showHrdf')}}" class="dropdown-item">HRDF</a>                  
                  <a href="{{ route('showContactUs')}}" class="dropdown-item">Show Contact us</a>
                  <a href="{{ route('plans.create')}}" class="dropdown-item">Create Plans</a>
                </div>
              </div>
            @endif

            @if(Auth::check() && Auth::user()->role=='admin' || Auth::user()->role=='teacher')
              <div class="inner">
                <a class="dropdown-toggle, btn btn-xs-danger" id="toggleButton"  data-toggle="dropdown" aria-expanded="false">Course Management</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a href="{{ asset('addCourse')}}" class="dropdown-item">Create Course</a>
                  <a href="{{ route('showCourse')}}" class="dropdown-item">Show Course</a>
                </div>
              </div>
            @endif

            @if(Auth::check() && Auth::user()->role=='teacher')
            <div class="inner"><a href="{{ asset('uploadHrdf')}}" class="btn btn-xs-danger">Apply HRDF</a></div>
            @endif

            <div class="inner"><a href="{{ route('editProfile',['id'=>$user->id]) }}" class="btn btn-xs-danger">Edit Profile</a></div>
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
      <br><br>
    </div>
    <div class="col-sm-1"></div>
  </div>
</div>

@endsection