<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Elementary English</title>
   <style>
       @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

*{
 margin: 0;
 padding: 0;
 box-sizing: border-box;
 font-family: "Poppins", sans-serif;
}

body{
 background: url(images/a1.jpg)no-repeat;
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
  background-image: url(images/1.png), url(images/2.png), url(images/3.png);
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

.contentbox p, li{
 color: #fff;
 font-size: 1rem;
 font-weight: 500;
}

.contentbox h2, h3, h4{
    color: #00FFFF;
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

     <!--<div class="close-btn">
         <text style="padding-left:-10px">
         E.EDU.Center
         </text>
       <i class="fas fa-times"></i>
     </div>-->
     <div class="menu">
       <div class="item"><a href="material_E_ENGL.html"><i class="fas fa-desktop"></i>Dashboard</a></div>
       <div class="item">
         <a class="sub-btn"><i class="fas fa-table"></i>Material<i class="fas fa-angle-right dropdown"></i></a>
         <div class="sub-menu">
           <a href="#" class="sub-item">Week 01</a>
           <a href="#" class="sub-item">Week 02</a>
           <a href="#" class="sub-item">Week 03</a>
            <a href="#" class="sub-item">Week 04</a>
            <a href="#" class="sub-item">Week 05</a>
            <a href="#" class="sub-item">Week 06</a>
            <a href="#" class="sub-item">Week 07</a>
         </div>
       </div>
       <div class="item"><a href="#"><i class="fas fa-th"></i>Discussion</a></div>
       <div class="item">
         <a class="sub-btn"><i class="fas fa-cogs"></i>Settings<i class="fas fa-angle-right dropdown"></i></a>
         <div class="sub-menu">
           <a href="#" class="sub-item">Sub Item 01</a>
           <a href="#" class="sub-item">Sub Item 02</a>
         </div>
       </div>
       <div class="item"><a href="#"><i class="fas fa-info-circle"></i>About</a></div>
              <div class="item"><a href="E_MATH.html"><i class="fas fa-log-out"></i>Exit</a></div>
     </div>
   </div>
   <!--<section class="main">
     <h1></h1>
   </section>-->
   <div class="contentbox">
    <br>
       <h2 >Welcome to Elementary Mathematics Course provided by E.EDU.Center</h2>
       <br>
       <img src="images/E_MATH.png" width="350px" height="200px">
       <br><br>
       <h2>Description</h2>
       <br>
       <p>7-week course provided by this Elementary Mathematics. This course that aims to help beginners develop basic mathematics skills. Elementary Mathematics covers 25 units. We recommend that students go through the units in order to take advantage of the systematic scope and sequence of the learning materials.</p>
       <br>
       <h3>What topics will you cover?</h3>
       <br>
       <p>25 mathematical concepts in primary levels. Those are: </p>
       <li>Sorting and Inclusion</li>
       <li>Relation-one to one</li>
       <li>Neighborhood and ordering</li>
       <li>Shape and symmetry</li>
       <li>Money</li>
       <li>Length and perimeter</li>
       <li>Weight</li>
       <li>Volume and capacity</li>
       <li>Area</li>
       <li>Time</li>
       <li>Graphs</li>
       <li>Direction and scale Drawing</li>
       <li>Number-Counting and patterns</li>
       <li>Number-Understanding</li>
       <li>Number-Comparison</li>
       <li>Number-ordinal</li>
       <li>Number-Addition</li>
       <li>Subtraction</li>
       <li>Multiplication</li>
       <li>Division</li>
       <li>Problem Solving</li>
       <li>Unitary Method</li>
       <li>Roman Numerals</li>
       <li>General Fractions</li>
       <li>Decimal Fractions</li>
       <br>
       </div>

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