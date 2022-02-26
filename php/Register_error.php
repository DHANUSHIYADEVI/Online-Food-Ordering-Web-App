<!DOCTYPE html>
<html lang="en-US">
<head>
 <meta charset="utf-8">
 <title> Register </title>
 <link rel="stylesheet" href="..css/style.css">
 <style>
   .space{
      margin:30px 0;
    }
 </style>
</head>
<body>
 <div class="center">
      <h1> REGISTER </h1>
      <form action="create.php" method="post" name="Registrationform"> 
         <div class="txt_field">
           <label> Username<span id="ip">&#42;</span> </label> </br> 
           <input type="text" placeholder="Enter your name here" name="uname" required>
           <span></span>
           <label id="Errormsg" style="display:block; color:red; padding:10px;"> Username already exists </label> 
         </div>
         <div class="txt_field">
           <label> Email<span id="ip">&#42;</span> </label> </br> 
           <input type="text" placeholder="Enter email address here"  name="mail_id" required>
           <span></span>
         </div> 
         <div class="txt_field">
           <label> Mobile Number<span id="ip">&#42;</span> </label> </br>
           <input type="text" placeholder="Enter mobile number here" name="mobile_no" pattern="\d{10}"required>
           <span></span>
         </div> 
         <div class="type" style="color:#a6a6a6;">
           <label> Select type: </label> 
           <input type="radio" name="type" value="USER" required> <label> USER </label>
           <input type="radio" name="type" value="ADMIN" required> <label> ADMIN </label>
         </div> </br> </br>
         <div> 
         <div> 
         <div class="pass"> <a href="#"> Forgot Password? </a> </div>
         <input type="submit" value="Signup"/>
         <div class="space">
         </div>
       </form>
   </div>
</body>
</html>