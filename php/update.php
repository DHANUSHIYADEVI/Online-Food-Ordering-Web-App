<?php
require_once "db_connect.php";
if($_POST) {
  $category=$_POST['category'];
  $item=$_POST['item'];
  $price=$_POST['itemprice'];
  $price="Rs. ".$price."/-";
  if($category=="nonveg"){
     $sql = "INSERT INTO NONVEG (ITEM,PRICE) VALUES ('$item','$price')";
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
    if($category=="veg"){
     $sql = "INSERT INTO VEG (ITEM,PRICE) VALUES ('$item','$price')";
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