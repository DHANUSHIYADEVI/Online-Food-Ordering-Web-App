<?php  
   require_once "db_connect.php";
   session_start();
   $username=$_SESSION['username'];
   $sql="UPDATE USERS SET ORDERED='1' WHERE NAME='$username'";
   if($connect->query($sql) === TRUE) 
   { 
      $username=strtoupper($username);
      $name=$username."_ORDER";
      $sql1="CREATE TABLE ".$name." (DATE VARCHAR(10),ITEMS VARCHAR(90),COUNT VARCHAR(1),PRICE VARCHAR(70),DELIVERED VARCHAR(1))";
      if($connect->query($sql1) === TRUE)
      {

          $result=mysqli_query($connect,"SELECT * FROM $username");
          if(mysqli_num_rows($result)>0 && $result)
          {
               while($row=mysqli_fetch_array($result))
               {
                   $sql2="INSERT INTO $name (DATE,ITEMS,COUNT,PRICE) VALUES ('".date("d/m/Y")."','".$row["ITEMS"]."','".$row["COUNT"]."','".$row["PRICE"]."')";
                   if($connect->query($sql2)===TRUE) 
                   { }
                   else{ echo "error:";} 
               }
               $sql3="DROP TABLE $username";
               if($connect->query($sql3)===TRUE){ header('Location:user_orders.php');}
               else{ echo "error";}
          }
      }
      else
      {
          $result=mysqli_query($connect,"SELECT * FROM $username");
          if(mysqli_num_rows($result)>0 && $result)
          {
               while($row=mysqli_fetch_array($result))
               {
                   $sql2="INSERT INTO $name (DATE,ITEMS,COUNT,PRICE) VALUES ('".date("d/m/Y")."','".$row["ITEMS"]."','".$row["COUNT"]."','".$row["PRICE"]."')";
                   if($connect->query($sql2)===TRUE) 
                   { }
                   else{ echo "error:";} 
               }
               $sql3="DROP TABLE $username";
               if($connect->query($sql3)===TRUE){ header('Location:user_orders.php');}
               else{ echo "error";}
          }
      }
   } 
   else
   {
        echo "Error: ".$sql." ".$connect->connect_error;
   }
?>