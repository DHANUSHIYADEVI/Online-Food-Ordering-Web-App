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
<div class="orders">
 <div class="order items">
  <center>
  <table border="1">
    <tr> <td> DATE </td> <td> ITEMS </td> <td> COUNT </td> <td> PRICE </td> <td> DELIVERY STATUS </td> </tr>
    <?php
       require_once "db_connect.php";
       $username=$_SESSION['username'];
       $username=strtoupper($username)."_ORDER";
       $result=mysqli_query($connect,"SELECT * FROM $username");
       if($result && mysqli_num_rows($result)>0)
       {
          $status="NOT DELIVERED";
          if(mysqli_num_rows($result)>0){
          while($row=mysqli_fetch_array($result))
          {    
              if($row["DELIVERED"]=='1'){ $status="DELIVERED"; }
              echo "<tr> <td>".$row["DATE"]."</td> <td>". $row["ITEMS"]."</td> <td>".$row["COUNT"]."</td> <td>".$row["PRICE"]."</td> <td>".$status."</td> </tr>";;
          }
         }
       }
       else{
         echo "<tr> <td> - </td> <td> - </td> <td> - </td> <td> - </td> <td> - </td> </tr>";
         echo "<tr> <td colspan=\"5\"> No items. </br> NO ORDERS YET </td> </tr>";
       }
    ?>
  </table>
  </center>
  </br> </br> </br>
 </div>
</div>
</body>
</html>