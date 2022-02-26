<!Doctype html>
<html lang="en-us">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/homestyle.css">
<title> Food Heaven </title>
</head>
<body>
<!--navigation bar-->
<div class="header">
  <a href="#" class="logo">Food Heaven</a>
  <div class="header-right">
    <a class="active" href="home.php">Home</a>
    <a href="#contact">Contact</a>
    <a href="#specials"> Specials</a>
    <a href="umenu.php">Menu </a>
    <a href="#about_us"> About us </a>
    <a href="php/login.php">Login/Register </a>
  </div>
</div>
<div class="divider1"> </div>
<!--main slides-->
<div id="main-slides">
   <div class="image-container">
          <h1> WELCOME TO FOOD HEAVEN RESTURANT </h1>
           <center>  <a href="php/user_login.php"> <button> ORDER NOW </button> </a> </center>
   </div>
</div>  
<script>
  var bg=document.getElementById("main-slides");
  var j=1;
  setTimeout(change,2000);
  function change(){
     j=j+1;
     if(j>5){j=1;}
     bg.style.backgroundImage="url('img/main"+j+".jpg')";
     setTimeout(change, 2000);
   }
</script>
<!--SPECIALS-->
<div class="specials">
 <div class="special-items">
  <p> Discover our tasty menu Food </br> tailored to meet your expectation. </p>
  <button> MENU </button>
   <h1> OUR SPECIALS </br>   ~~~~~~ &#9884; &#9884; &#9884; &#9884; &#9884; &#9884; ~~~~~~ </h1>
 </div>
</div>
<div id="contact">
<p> Address:xyx,zzz,pin; </p>
</div>
</body>
</html>
                  