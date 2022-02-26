<?php 

require_once 'db_connect.php';

if($_POST) {
	$username = $_POST['uname'];
        $mail_id = $_POST['mail_id'];
        $password = $_POST['mobile_no'];
        $password = (int)$password;
        $type=$_POST['type'];
        $flag=0;
        if($type=="USER")
        {
            $result = mysqli_query($connect,"SELECT * FROM users");
            if (mysqli_num_rows($result) > 0)
            {
               while($row = mysqli_fetch_array($result))
               {
                  if($row["NAME"]==$username)
                  {
                     $flag=1;
                     header('Location:Register_error.php');
                     break;
                  }
               }
            }
        }
        else
        {
            $result = mysqli_query($connect,"SELECT * FROM admins");
            if (mysqli_num_rows($result) > 0)
            {
               while($row = mysqli_fetch_array($result))
               {
                  if($row["NAME"]==$username)
                  {
                      $flag=1;
                      header('Location:Register_error.php');
                      break;
                  }
               }
            }
        }
        if($type=="USER" and $flag==0)
        {
       	   $sql = "INSERT INTO users (name,mail_id,password) VALUES ('$username','$mail_id','$password')";
           if($connect->query($sql) === TRUE)
           {
	       header('Location:home.php');
	   }
           else
           {
               echo "Error " . $sql . ' ' . $connect->connect_error;
	   }
        }
        else
        {
           if($type=="ADMIN" and $flag==0)
           {
       	      $sql = "INSERT INTO admins (name,mail_id,password) VALUES ('$username','$mail_id','$password')";
              if($connect->query($sql) === TRUE)
              {
	          header('Location:home.php');
	      }
              else
              {
                  echo "Error " . $sql . ' ' . $connect->connect_error;
	      }
           }
        }
	$connect->close();
}

?>