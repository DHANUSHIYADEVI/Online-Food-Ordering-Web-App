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
<div class="cart">
 <div class="cart items">
  <center>
  <table border="1">
    <tr> <td> ITEMS </td> <td> COUNT </td> <td> PRICE </td> </tr>
    <?php
       require_once "db_connect.php";
       $username=$_SESSION['username'];
       $username=strtoupper($username);
       $result=mysqli_query($connect,"SELECT * FROM $username");
       if($result && mysqli_num_rows($result)>0)
       {
          $amount=0;
          if(mysqli_num_rows($result)>0){
          while($row=mysqli_fetch_array($result))
          {    
              $itemprice=$row["PRICE"];
              $price=substr($itemprice,3,strpos($itemprice, "/-"));
              $amount=$amount+(int)$price;
              echo "<tr> <td>". $row["ITEMS"]."</td> <td>".$row["COUNT"]."</td> <td>".$row["PRICE"]."</td>  <td> <form id=\"deleteform\" method=\"post\" action=\"removefromcart.php\">   <input style=\"display:none;\" name =\"itemname\" value=\"".$row["ITEMS"]."\"/> <input type=\"submit\" value=\"X\"> </td> </form></tr>";;
          }
           echo "<tr> <td colspan=\"2\"> TOTAL </td> <td>"."Rs. ".$amount."/-</td> </tr>";
           echo "<tr> <td colspan=\"3\"> <button> <a style=\"text-decoration:none; font-weight:bold; color:white;\" href=\"place_order.php\"> PLACE ORDER </a> </button> </td> </tr>";
          }
       }
       else{
         echo "<tr> <td> - </td> <td> - </td> <td> - </td> </tr>";
         echo "<tr> <td colspan=\"3\"> No items. </br> CARD IS EMPTY </td> </tr>";
       }
    ?>
  </table>
  </center>
  </br> </br> </br>
 </div>
</div>
</body>
</html>