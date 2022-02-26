<!Doctype html>
<html lang="en-us">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
<link rel="stylesheet" href="../css/style2.css">
<title> Food Heaven </title>
</head>
<body>
<!--navigation bar-->
<div class="header">
  <a href="user_page.php" class="header-left">DASHBOARD</br> </br> <span style="color:violet; font-size:20px;">&#8678; back </span></a>
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
<div class="menu">
  <div class="category">
    <div class="veg">
     <a href="#veg"> VEG </a>
    </div>
    <div class="nonveg">
     <a href="#nonveg"> NON VEG </a>
    </div>
    </br> </br>
  </div> 
</div>
<div class="menu-items">
  <center> 
  <div class="items" id="veg">
  <table class="table" border="2">
  <tr id="th" style="background:green;"> <td  colspan="2"> VEG </td> </tr>
  <tr id="th"> <td> ITEMS  </td> <td> PRICE </td> <td> COUNT </td> </tr>
  <?php 
    require_once "db_connect.php";
    $result=mysqli_query($connect,"SELECT * FROM VEG");
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
        { 

           echo "<tr> <td>".$row["ITEM"]."</td> <td>".$row["PRICE"]."</td> <td> <form id=\"deleteform\" method=\"post\" action=\"addtocart.php\">  <input type=\"number\" style=\"color:black;\" min=\"0\" name=\"count\" required/> </td> <td>  <input style=\"display:none;\" name =\"itemname\" value=\"".$row["ITEM"]."\"/> <input style=\"display:none;\" name =\"itemprice\" value=\"".$row["PRICE"]."\"/> <input style=\"font-size:10px;\" type=\"submit\" value=\"ADD TO CART\"/> </td> </form></tr>";
        }
    }
  ?>
  </table>
 </div>
  <div class="items" id="nonveg">
  <table class="table" border="2">
  <tr id="th" style="background:red;"> <td  colspan="2"> NONVEG </td> </tr>
  <tr id="th"> <td> ITEMS  </td> <td> PRICE </td> <td> COUNT </td> </tr>
  <?php 
    require_once "db_connect.php";
    $result=mysqli_query($connect,"SELECT * FROM NONVEG");
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
        { 
           echo "<tr> <td>".$row["ITEM"]."</td> <td>".$row["PRICE"]."</td> <td> <form id=\"deleteform\" method=\"post\" action=\"addtocart.php\">  <input type=\"number\" style=\"color:black;\" min=\"0\" name=\"count\" required/> </td> <td>  <input style=\"display:none;\" name =\"itemname\" value=\"".$row["ITEM"]."\"/> <input style=\"display:none;\" name =\"itemprice\" value=\"".$row["PRICE"]."\"/> <input style=\"font-size:10px;\" type=\"submit\" value=\"ADD TO CART\"/> </td> </form></tr>";
        }
    }
  ?>
  </table>
  </div>  
  </center>
</div>

</body>
</html>