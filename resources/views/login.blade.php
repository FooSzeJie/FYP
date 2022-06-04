@extends('layouts')
@section('content')
<head>
    <title>Login</title>
</head>
<body>
    
<div class="container">
<h1 class="heading"> Login Page </h1>

<!-- price section  -->

<section class="price">

  <div class="login-wrapper">
    <form action="" method="post" class="form">
      <img src="images/loginicon.png" alt="">
      <h2>Login</h2>
      <div class="input-group">
        <input type="text" name="loginUser" id="loginUser" required>
        <label for="loginUser">Username</label>
      </div>
      <div class="input-group">
        <input type="password" name="loginPassword" id="loginPassword" required>
        <label for="loginPassword">Password</label>
      </div>
      <input type="submit" value="Login" class="submit-btn">
      <a href="#forgot-pw" class="forgot-pw">Forgot Password?</a>
	<br><br>
      <a href="signup.html" class="forgot-pw">SignUp</a>
    </form>

    <div id="forgot-pw">
      <form action="" class="form">
        <a href="#" class="close">&times;</a>
        <h2>Reset Password</h2>
        <div class="input-group">
          <input type="email" name="email" id="email" required>
          <label for="email">Email</label>
        </div>
        <input type="submit" value="Submit" class="submit-btn">
      </form>
    </div>


  </div>

</section>


<!-- custom js file link -->
<script src="{{ asset('js/script.js')}}"></script>

</body>
@endsection