@extends('layouts')
@section('content')
<head>
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
              <div class="item"><a href="E_CHINESE.html"><i class="fas fa-log-out"></i>Exit</a></div>
     </div>
   </div>
   <!--<section class="main">
     <h1></h1>
   </section>-->
   <div class="contentbox">
    <br>
       <h2 >Welcome to Elementary Chinese Course provided by E.EDU.Center</h2>
       <br>
       <img src="images/E_CHINESE.png" width="350px" height="200px">
       <br><br>
       <h3>Description</h3>
            <br>
            <p>5-week course provided by this Elementary Chinese, it will help you learn basic Chinese skills. This course that aims to help beginners develop communicative competence in the basic four skills (listening, speaking, reading and writing) and culture of Chinese. The course curriculum is organized around the 5 Cs principles of the National Standards for Foreign Language Education for the 21st Century – Communication, Cultures, Comparisons, Connections and Communities. Elementary Chinese 1 covers 8 units. We recommend that students go through the units in order to take advantage of the systematic scope and sequence of the learning materials. However, the curriculum is also flexible for individuals and institutions to adopt and modify to meet their different needs, schedule and emphasis.</p>
            <br><br>
            <h3>Topics Covered:</h3>
            <br>
            <li>Foundation: pinyin and basic expressions</li>
            <li>Greetings</li>
            <li>Names</li>
            <li>Nationalities and languages</li>
            <li>Talking about studies</li>
            <li>Talking about yourself and your family</li>
            <li>Making phone calls</li>
            <br><br>
            <h3>Course structure</h3>
            <br>
            <p>Elementary Chinese 1 is part of a two-part sequence. The units in both courses have a consistent structure, containing the following main content and activities:</p>
            <br><br>
            <h3>Main Content</h3>
            <br>
            <li>Objective</li>
            <li>Main video (+questions)</li>
            <li>Video preview exercises</li>
            <li>Text of the video</li>
            <li>Text translation and pinyin with slower audio (students are strongly encouraged to listen and repeat after the sound files)</li>
            <li>Text notes</li>
            <li>Vocabulary tables</li>
            <li>Video comprehension exercises</li>
            <br>
            <h3>II. Listening</h3>
            <li>Pinyin recognition exercise</li>
            <li>True and false exercise</li>
            <li>Translation exercise</li>
            <li>Question answering exercise</li>
            <br>
            <h3>III. Grammar</h3>
            <li>Grammar notes</li>
            <li>Sentence jumble exercise</li>
            <li>Dialogue jumble exercise</li>
            <br>
            <h3>IV. Reading Exercises</h3>
            <li>Reading comprehension</li>
            <br>
            <h3>Consolidation Exercises</h3>
            <li>Picture description exercise</li>
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
@endsection