<?php
require_once "db_connect.php";
if($_POST) {
      session_start();
      $username=$_SESSION['username'];
      $itemname=$_POST["itemname"];
      $itemprice=$_POST["itemprice"];
      $itemcount=$_POST["count"];
      $price=substr($itemprice,3,strpos($itemprice, " "));
      $a=(int)$price;
      $b=(int)$itemcount;
      $itemprice=$a*$b;
      $itemprice="Rs. ".$itemprice."/-";
      $sql="CREATE TABLE ".strtoupper($username)." (ITEMS VARCHAR(90),COUNT VARCHAR(50),PRICE VARCHAR(30))";
      if($connect->query($sql) === TRUE)
      {
          $sql1="INSERT INTO ".strtoupper($username)." (ITEMS,COUNT,PRICE) VALUES ('$itemname','$itemcount','$itemprice')";
          if($connect->query($sql1) === TRUE){
               header ('Location:umenu.php');
          }
          else{  echo "Error1".$sql1.' '.$connect->connect_error;}
      }
      else
      {
          echo $sql; 
          $sql2="INSERT INTO ".strtoupper($username)." (ITEMS,COUNT,PRICE) VALUES ('$itemname','$itemcount','$itemprice')";
          if($connect->query($sql2) === TRUE){
               header ('Location:umenu.php');
          }
          else{  echo "Error2".$sql2.' '.$connect->connect_error;}

      }
}
?>