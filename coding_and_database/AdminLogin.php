<html>
<head>
<title>admin login</title>
</haad>
<body
background="img\background\bluebg.jpg">
<form action="<?php $_SERVER['PHP_SELF'];?>"method="POST" ><br>
<center><h1><h1><u><font size="8" color="black">AROKA TOURS AND sTRAVELS </font></u></h1></h1><br><br>

<div class="center"><br><h1><font color="white">
Admin email:<input type="text" name="email" required><br>
<br>

Password:<input type="password" name="password" required><br><br></h1></font>

                
<center>
<button type="submit">Login</button></font><a href="welcome.html"><br><br>
  
  <label>
   <h3><input type="checkbox"             checked="checked" name="remember"><font color="white"> Remember me</font color></h3>
    </label>
  <br>

<h3><u><color="white"><a                 href="REGISTER.php"><font color="red">Not a member?Sign in</font color></a></u></color></h3>

 <h3><u><color="white"><a href="forgetpass.html"><font color="red">Forgot password?</font color></a></color></u></h3>
  </div>

</form>




<?php
include("connectDB.php");
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")

{
  $email=$_POST["email"];
  $pwd=$_POST["password"];

 
 $result = $conn->query("SELECT email,pass FROM admin WHERE email = '$email' AND pass='$pwd'");
 
 $count = mysqli_num_rows($result);
 
      if($count == 1) 

  {
   
    if(isset($email))
    $_SESSION['login_user'] = $email;
  

  header("Location: welcomeadmin.html");
 
 }
        
 
  else
  {
    $message = "Invalid Email and Password!";
   
  echo "<script type='text/javascript'>alert('$message');</script>";

  }
}

?>


</body>

</html>