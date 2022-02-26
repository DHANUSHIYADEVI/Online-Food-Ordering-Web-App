<?php
require_once "db_connect.php";
if($_POST){
  session_start();
  $username=$_SESSION['username'];;
  $item=$_POST["itemname"];
  $username=strtoupper($username);
  $sql="DELETE FROM ".$username." WHERE ITEMS='$item'";
  if($connect->query($sql) === TRUE)
  {
     header('Location:user_cart.php');
  }
  else
  {
      echo "Error " . $sql . ' ' . $connect->connect_error;
  }
}
?>