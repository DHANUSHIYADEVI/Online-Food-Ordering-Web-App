<!DOCTYPE html>
<html lang="en-US">
<head>
 <meta charset="utf-8">
 <title> login </title>
 <link rel="stylesheet" href="../css/style.css">
</head>
<body>
 <div class="center">
      <h1> LOGIN </h1>
      <form action="Key.php" method="get"> 
         <div class="txt_field">
           <label> Username </label> </br> 
           <input type="text" name="uname" placeholder="Enter your name here" required>
           <span></span>
         </div>
         <div class="txt_field">
           <label> Password </label> </br> 
           <input type="password" name="password" placeholder="xxxxxxxxxx" pattern="\d{10}"  required>
           <span></span>
         </div>
         <div class="type" style="color:#a6a6a6;">
           <label> Select type: </label> 
           <input type="radio" name="type" value="USER" required> <label> USER </label>
           <input type="radio" name="type" value="ADMIN" required> <label> ADMIN </label>
         </div> </br> </br>
         <div class="pass"> <a href="#"> Forgot Password? </a> </div> 
         <input type="submit" value="Login"/>
         <div class="signup_link">
              Not a member? <a href="Register.php"> Signup </a>
         </div> 
       </form>
   </div>
</body>
</html>

