<?php 
require_once 'db_connect.php';
if($_GET)
{
   $username = $_GET['uname'];
   $password = $_GET['password'];
   $type=$_GET['type'];
   $present=False;
   if($type=='USER')
   {
       $result = mysqli_query($connect,"SELECT * FROM users");
   }
   else
   {
       $result = mysqli_query($connect,"SELECT * FROM admins");
   }
   if (mysqli_num_rows($result) > 0)
   {
      while($row = mysqli_fetch_array($result))
      {
           if($row["NAME"]==$username)
           {
               if($row["PASSWORD"]==$password)
               {
                   $present=True;
                   if($type=="USER"){
                          session_start();
                          $_SESSION['username']=$username;
                          header('Location:user_page.php');
                   }
                   else{
                       if($type=="ADMIN"){
                          session_start();
                          $_SESSION['username']=$username;
                          header('Location:admin_page.php');
                        }
                   }
                   break;
               }
               
           }
      }
      if($present==False)
      {
           header('Location:Login_Error.php');
      }
   }
   else
   {
      header('Location:Login_Error.php');
   }
}
$connect->close();
?>