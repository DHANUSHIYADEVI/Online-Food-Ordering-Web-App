<!Doctype html>
<html lang="en-us">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
<link rel="stylesheet" href="../css/style1.css">
<title> Food Heaven </title>
</head>
<body>
<!--navigation bar-->
<div class="header">
  <a href="admin.php" class="header-left">DASHBOARD</a>
  <div class="header-right">
    <a href="#" class='fas fa-user-circle'></a>
    <?php  
      session_start();
      $username=$_SESSION['username'];
      echo "<a href=''>".strtoupper($username)."</a>"; ?>
    </br>
    <a class="logout" href="login.php"> log out <span class="iconify" data-icon="mdi:logout"></span> </a>
  </div>
</div>
<div class="divider1"> </div>
<div class="list">
  <div class="listitem">
     <div class="icon"> <img  src="..\img\icon1.png"/> </div>
     </br> </br>
     <a href="umenu.php"> MENU <span>&#8680;</span> </a>
  </div>
  <div class="listitem">
     <div class="icon"> <img  src="..\img\icon2.png"/> </div>
     </br> </br>
     <a href="user_orders.php"> ORDERS <span>&#8680;</span> </a>
  </div>
  <div class="listitem">
     <div class="icon"> <img  src="..\img\icon3.png"/> </div>
     </br> </br>
     <a href="user_cart.php"> MY CART <span>&#8680;</span> </a>
  </div>
</div>
</body>
</html>