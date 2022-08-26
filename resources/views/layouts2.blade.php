<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet" href="{{ asset('css/style.css')}}">
   <title>E.EDU.Center</title>
   <style>
       @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

*{
 margin: 0;
 padding: 0;
 box-sizing: border-box;
 font-family: "Poppins", sans-serif;
}

body{
 background: url({{asset ('images/a1.jpg')}})no-repeat;
  -webkit-background-size: cover;
  background-size: cover;
  background-position: center center;
  min-height: 100vh;
}

.side-bar{
 background: rgba(255, 255, 255, 0.1);
 backdrop-filter: blur(15px);
 width: 290px;
 height: 150vh;
 position: fixed;
 top: 0;
 left: 0%;
 overflow-y: auto;
 display: block;
 transition: 0.6s ease;
 transition-property: left;
}

.side-bar.active{
 left: 0;
}

.side-bar .menu{
 width: 100%;
 margin-top: 80px;
}

.side-bar .menu .item{
 position: relative;
 cursor: pointer;
}

.side-bar .menu .item a{
 color: #fff;
 font-size: 16px;
 text-decoration: none;
 display: block;
 padding: 5px 30px;
 line-height: 60px;
}

.side-bar .menu .item a:hover{
 background: #8621F8;
 transition: 0.3s ease;
}

.side-bar .menu .item i{
 margin-right: 15px;
}

.side-bar .menu .item a .dropdown{
 position: absolute;
 right: 0;
 margin: 20px;
 transition: 0.3s ease;
}

.side-bar .menu .item .sub-menu{
 background: rgba(255, 255, 255, 0.1);
 display: none;
}

.side-bar .menu .item .sub-menu a{
 padding-left: 80px;
}

.rotate{
 transform: rotate(90deg);
}

.close-btn{
 position: relative;
 color: #fff;
 font-size: 20px;
 right: 0;
 margin: 25px;
 cursor: pointer;
}

.menu-btn{
 position: relative;
 color: #fff;
 font-size: 20px;
 margin: 25px;
 cursor: pointer;
 padding-right: 170vh;
  padding-bottom: 700px;
}

.main{
 height: 100vh;
 display: flex;
 justify-content: center;
 align-items: center;
 padding: 50px;
}

.main h1{
 color: rgba(255, 255, 255, 0.8);
 font-size: 60px;
 text-align: center;
 line-height: 80px;
}

.box{
  display: grid;
  place-items: center;
  width: 100%;
  height: 100%;
  position: absolute;
  background-image: url({{ asset ('images/1.png') }}), url({{ asset ('images/2.png') }}), url({{ asset ('images/2.png') }});
  animation: animate 20s linear infinite;
}

.contentbox{
 background: rgba(255, 255, 255, 0);
 backdrop-filter: blur(1px);
 top: 0;
 bottom: 0;
 left: 50px;
 position: absolute;
 overflow-y: auto;
 transition: 0.6s ease;
 margin-left: 280px;
}

text{
    font-weight: 50px;
    font-size: 30px;
    position: absolute;
    color: #8A2BE2;
}


@keyframes animate{
  0%{
  background-position: 0 0, 0 0, 0 0;
  }
  100%{
  background-position: 500px 1000px, 400px 400px, 600px 600px;
  }
}

@media (max-width: 900px){
 .main h1{
   font-size: 40px;
   line-height: 60px;
 }
}
      
   </style>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
 </head>

 <body>
    <div class="box">
   <!--<div class="menu-btn">
     <i class="fas fa-bars">  E.EDU.Center</i>
   </div>-->
   <div class="side-bar">
    <br>
     <text style="left: 20px"><strong>E.EDU.Center</strong></text>
     
     <div class="menu">


       <div class="item"><a href="{{ asset('showMaterial')}}"><i class="fas fa-desktop"></i>Material</a></div>

       <div class="item">
         <a class="sub-btn"><i class="fas fa-table"></i>Discussion<i class="fas fa-angle-right dropdown"></i></a>
        
         <div class="sub-menu">
           <a href="{{ asset('addComment') }}" class="sub-item">Add Comment</a>
           <a href="{{ asset('Discussion') }}" class="sub-item">Comment</a>
           
         </div>
       </div>

       @if(Auth::check() && Auth::user()->role=='admin' || Auth::check() && Auth::user()->role=='teacher')
       <div class="item">
         <a class="sub-btn"><i class="fas fa-cogs"></i>Settings<i class="fas fa-angle-right dropdown"></i></a>
         <div class="sub-menu">        
          <a href="{{ asset('addMaterial') }}" class="sub-item">Add Material</a>
          <a href="{{ asset('showMaterial') }}" class="sub-item">Show Material</a>
         </div>
       </div>
      @endif

        <div class="item"><a href="{{ asset('/') }}"><i class="fas fa-log-out"></i>Exit</a></div>
     </div>
   </div>

    @yield('content2')


   <script type="text/javascript">
   $(document).ready(function(){
     //jquery for toggle sub menus
     $('.sub-btn').click(function(){
       $(this).next('.sub-menu').slideToggle();
       $(this).find('.dropdown').toggleClass('rotate');
     });

     //jquery for expand and collapse the sidebar
     $('.menu-btn').click(function(){
       $('.side-bar').addClass('active');
       $('.menu-btn').css("visibility", "hidden");
     });

     $('.close-btn').click(function(){
       $('.side-bar').removeClass('active');
       $('.menu-btn').css("visibility", "visible");
     });
   });
   </script>
    </div>
 </body>
</html>