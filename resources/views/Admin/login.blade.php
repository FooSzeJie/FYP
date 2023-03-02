<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device.width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Admin Login</title>
        <!-- Boostrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> 
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
        <link rel="stylesheet" href="{{ asset('css/adminCSS/LoginCSS/adminLoginStyle.css') }}">
    </head>

    <body style="background-image: url('{{ asset('images/admin/book5.jpg')}}'); ">

        @if(Session::has('success'))
        <center><div class="alert alert-success">{{ Session::get('success') }}</div></center>
        @endif
        @if(Session::has('fail'))
        <center><div class="alert alert-danger">{{ Session::get('fail') }}</div></center>
        @endif

        <div class="login-box" >
            <h1>Admin Log In</h1>

            <form method="POST" action="{{ route('loginAdmin') }}">
                

                @csrf
                <div class="textbox">
                    <!-- <label for="name">UserName</label>
                    <br> -->
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" placeholder="User Name" name="adminName"><br>                    
                </div>
                <span class="text-danger">@error('adminName') {{$message}} @enderror</span><br>

                <div class="textbox">
                    <!-- <label for="password">Password</label>
                    <br> -->
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input type="password" placeholder="Password" name="password">
                   
                </div>
                 <span class="text-danger">@error('password') {{$message}} @enderror</span>
                    <br>
                
                <button type="submit" class="btn">Login</button>

                <!-- 
                Username = admin
                password = admin123 
                -->
                
            </form>
        </div>
    </body>

    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
</html>