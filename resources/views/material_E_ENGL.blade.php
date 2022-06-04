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
              <div class="item"><a href="E_ENGL.html"><i class="fas fa-log-out"></i>Exit</a></div>
     </div>
   </div>
   <!--<section class="main">
     <h1></h1>
   </section>-->
   <div class="contentbox">
    <br>
       <h2 >Welcome to Elementary English Course provided by E.EDU.Center</h2>
       <br>
       <img src="images/E_ENGL.png" width="350px" height="200px">
       <br><br>
       <h3>Learn everyday English for work or studying</h3>
            <br>
            <p>Have you always wanted to learn English, or need to know the language for your work or studies? This free online 7-week course will help you learn basic English skills. It will give you confidence in everyday situations and help you improve your listening skills. After taking this course you can progress to Basic English: Pre-Intermediate.</p>
            <br><br>
            <h3>Improve your English vocabulary</h3>
            <br>
            <p>At the beginning of the course, you’ll learn what to say when you meet new people, learn to introduce yourself, and practice joining in with conversations.</p>
            <br><br>
            <h3>Learn basic English grammar and common English phrases</h3>
            <br>
            <p>By the end of the course, you’ll be comfortable with asking simple questions, talking about friends and family, and discussing work and hobbies. Learn to express your likes and dislikes, chat about hobbies such as music and sport, and read emails from a new pen pal. All of these activities will improve your confidence in elementary English. You’ll have a good understanding of basic grammar including subject pronouns, different tenses, and the verb ‘to be’. Your pronunciation skills will also be put to the test.</p>
            <br><br>
            <h3>What topics will you cover?</h3>
            <br>
            <li>Language to introduce yourself</li>
            <li>Describing how you are feeling</li>
            <li>Asking simple questions</li>
            <li>Talking about your friends and family, and describing their personalities</li>
            <li>Talking about work and jobs</li>
            <li>Saying what you do and don’t like</li>
            <li>Talking about your hobbies</li>
            <br><br>
            <h3>What will you achieve?</h3>
            <br>
            <p>! Identify language used in everyday situations, such as studying, communicating with classmates, and talking about work</p>
            <p>! Apply language skills for everyday conversations</p>
            <p>! Develop confidence in key language items useful in a range of different scenarios</p>
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