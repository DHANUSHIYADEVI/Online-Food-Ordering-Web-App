<?php 
require_once "db_connect.php";
if($_POST){
  $itemname=$_POST["itemname"];
  $type=$_POST["type"];
  if($type=="veg"){
     $sql="DELETE FROM VEG WHERE ITEM='".$itemname."'";
     if($connect->query($sql) === TRUE)
     {
	 header('Location:menu.php'); 
     }
     else
     {
         echo "Error " . $sql . ' ' . $connect->connect_error;
     }
  }
  else{
    if($type=="nonveg"){
     $sql="DELETE FROM NONVEG WHERE ITEM='".$itemname."'";
     if($connect->query($sql) === TRUE)
     {
	 header('Location:menu.php'); 
     }
     else
     {
         echo "Error " . $sql . ' ' . $connect->connect_error;
     }
    }
  }
}
?>