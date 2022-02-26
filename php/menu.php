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
  <a href="admin_page.php" class="header-left">ADMIN </br> </br> <span style="color:violet; font-size:20px;">&#8678; back </span></a>
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
  <tr id="th"> <td> ITEMS  </td> <td> PRICE </td> </tr>
  <?php 
    require_once "db_connect.php";
    $result=mysqli_query($connect,"SELECT * FROM VEG");
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
        { 
           echo "<tr> <td>".$row["ITEM"]."</td> <td>".$row["PRICE"]."</td> <td> <form id=\"deleteform\" method=\"post\" action=\"delete.php\"> <input style=\"display:none;\" name=\"type\" value=\"veg\"/>  <input style=\"display:none;\" name =\"itemname\" value=\"".$row["ITEM"]."\"/> <input type=\"submit\" value=\"X\"> </td> </form></tr>";
        }
    }
  ?>
  <tr id="button1"> <td colspan="2"> <button onclick="show('vegupdate')"> Add New Item </button> </td> </tr>  
  <form action="update.php" class="vegupdate" method="post">
  <tr class="vegupdate">
    <input name="category" style="display:none;" value="veg"/>
    <td> <input type="text" name="item" placeholder="Type item name here" autofocus required/> </td>
    <td> <input type="text" name="itemprice" placeholder="Enter price here" required/> </td>
  </tr>
  <tr class="vegupdate">  
  <td colspan="2"> <input type="submit" value="update menu"/> </td>
  </tr>
  </form>
  </table>
 </div>
  <div class="items" id="nonveg">
  <table class="table" border="2">
  <tr id="th" style="background:red;"> <td  colspan="2"> NONVEG </td> </tr>
  <tr id="th"> <td> ITEMS  </td> <td> PRICE </td> </tr>
  <?php 
    require_once "db_connect.php";
    $result=mysqli_query($connect,"SELECT * FROM NONVEG");
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
        { 
           echo "<tr> <td>".$row["ITEM"]."</td> <td>".$row["PRICE"]."</td> <td> <form id=\"deleteform\" method=\"post\" action=\"delete.php\"> <input style=\"display:none;\" name=\"type\" value=\"nonveg\"/>  <input style=\"display:none;\" name =\"itemname\" value=\"".$row["ITEM"]."\"/> <input type=\"submit\" value=\"X\"> </td> </form></tr>";
        }
    }
  ?>
  <tr id="button2"> <td colspan="2"> <button onclick="show('nonvegupdate')"> Add New Item </button> </td> </tr>
  <form action="update.php" class="nonvegupdate" method="post">
  <tr class="nonvegupdate">
    <input name="category" style="display:none;" value="nonveg"/>
    <td> <input type="text" name="item" placeholder="Type item name here" autofocus required/> </td>
    <td> <input type="text" name="itemprice" placeholder="Enter price here" required/> </td>
  </tr>
  <tr class="nonvegupdate">  
  <td colspan="2"> <input type="submit" value="update menu"/> </td>
  </tr>
  </form>
  </table>
  </div>  
  </center>
</div>
<script>
  function show(type)
  {
      var i=0;
      if(type=='nonvegupdate')
      {
         document.getElementById("button2").style.visibility="hidden";
         var show=document.getElementsByClassName("nonvegupdate");
         show[0].style.visibility="visible";
         show[1].style.visibility="visible";
         show[2].style.visibility="visible";
      }
      else{
       if(type=='vegupdate'){
         document.getElementById("button1").style.visibility="hidden";
         var show=document.getElementsByClassName("vegupdate");
         show[0].style.visibility="visible";
         show[1].style.visibility="visible";
         show[2].style.visibility="visible";
       }
      }
  }
</script>
</body>
</html>