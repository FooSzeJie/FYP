@extends('layouts')
@section('content')
<head>
    <title>Login</title>

</head>

<body>
    
<div class="container">


<h1 class="heading"> SignUp Page </h1>

<!-- price section  -->

<section class="price">

  <div class="login-wrapper">
    <form action="php/connect.php" method="post" class="form">
      <img src="images/loginicon.png" alt="">
      <h2>Sign Up</h2>
      <div class="input-group">
        <input type="text" name="Username" id="Username" required>
        <label for="loginUser">Username</label>
      </div>
      <div class="input-group">
        <input type="password" name="Password" id="Password" required>
        <label for="loginPassword">Password</label>
      </div>
     <div class="input-group">
        <input type="email" name="Email" id="Email" required>
        <label for="loginEmail">Email</label>
      </div>
     <div class="input-group">
        <input type="text" name="Occupation" id="Occupation" required>
        <label for="loginOcu">Occupation</label>
      </div>
     <div class="input-group">
        <input type="number" name="Salary" id="Salary" required>
        <label for="loginSa">Salary</label>
      </div>

	<label for="Educationlvl">Education Level:</label>
	<select name="Educationlvl" id="Educationlvl">
  <option value="no">no any education level</option>
  <option value="primary">primary</option>
  <option value="secondary">secondary</option>
  <option value="university">university</option>
	</select>
	<br><br>
      <input type="submit" value="Done" class="submit-btn">
    </form>

    </div>


</section>

<!-- custom js file link -->
<script src="{{ asset('js/script.js')}}"></script>

</body>
@endsection