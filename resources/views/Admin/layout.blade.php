<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device.width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @yield('title')
        <link rel="stylesheet" href="{{ asset('css/adminCSS/LayoutCSS/layoutStyle.css') }}">
        <!-- Google Font Style -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
    </head>

    <body>
        <section id="menu">
            <div class="logo">
                <h2>E-EDU</h2>
            </div>

            <div class="items">
                <li onclick="nav('dashboard')" id="items-btn"><i class="fa-solid fa-chart-line"></i><a>Dashboard</a></li>
                <li onclick="nav('userInfo')" id="items-btn"><i class="fa-solid fa-user"></i><a>User</a></li>
                <li onclick="nav('categoryInfo')"><i class="fa-solid fa-list-check"></i><a>Category</a></li>
                <li onclick="nav('lessonInfo')"><i class="fa-solid fa-person-chalkboard"></i><a>Lesson</a></li>
                <li onclick="nav('priceInfo')"><i class="fa-regular fa-money-bill-1"></i></i><a>Price</a></li>
                <li onclick="nav('commentInfo')"><i class="fa-regular fa-comments"></i><a>Comment</a></li>
                <li onclick="nav('adminLogout')"><i class="fa-solid fa-right-from-bracket"></i><a href="{{ route('adminLogout') }}">Logout</a></li>
            </div>
        </section>

        <section id="interface">
            <div class="navigation">
                <div class="n1">
                    <div>
                        <i id="menu-btn" class="fas fa-bars"></i>
                    </div>
                    <div class="search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" placeholder="Search">
                    </div>
                </div>

                <div class="profile">
                    <i class="fa-regular fa-bell"></i>
                    <p>Profile</p>
                    <!-- <img src=" {{ asset('images/admin/book5.jpg')}}"> -->
                </div>                
            </div>
            @yield('content')
        </section>
        
    </body>
    <!-- JQuery Minified -->
    <script src="{{ asset('js/JQuery/jquery-3.6.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/admin/navbar.js') }}"></script>
    @yield('js')
    
</html>