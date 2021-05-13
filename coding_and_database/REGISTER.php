<html>
<head>
<title>SIGN UP PAGE FORM</title>
<link rel="stylesheet" href="#">
<style>
body
{
background-size : cover;
}
</style>
</head>
<body background="img\background\regbg.jpg">
<div class="login_page">


<center><h1><h1><u><font size="7" color="black">sign up</font></u></h1></h1><br><br>


<div class="center">
  <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" class="register_form"><br><h2><font color=""><b>
    Enter Your Name  :  <input type="text" name="name" required style="border:5px solid black";><br>
                                                   <br>
  Enter Password  :  <input type="password" name="psw" required style="border:5px solid black";><br>
                                                   <br>
  Confirm Password  :   <input type="password" name="psw-repeat" required style="border:5px solid black";><br>
                                                   <br>
  Enter Phone number  :  <input type="text" name="number" style="border:5px solid black";><br>
		                <br>
  Enter your Email  :  <input type="text" name="email" style="border:5px solid black";><br><br><b></font></h2>



  
  <center><button>Create an account</button></center>


  <center><h2><h2><u><b><font size="5"  color="red"><a href="login.php"><font color="">Already registered?Log in</font color style="border:5px solid black";></a></font></b></u></h2></h2></center>
  </form>
</div>


 </script>
 
 
 <?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $c_name=$_POST["name"];
  $c_email=$_POST["email"];
  $c_pass=$_POST["psw"];
  $c_mno=$_POST["number"];
  $c_pass0=$_POST["psw-repeat"];
  include('connectDB.php');

    $values="INSERT INTO customer(name,email,pass,mno) VALUES('$c_name','$c_email','$c_pass','$c_mno')";
    $result = $conn->query("SELECT email FROM customer WHERE email = '$c_email'");
    $count = mysqli_num_rows($result);
    if($count == 1) 
    {
      $message = "Email already exists";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }
    else
    {
      $conn->query($values);
      echo "<script type='text/javascript'>alert('Registered successfully!');</script>"; 
    }
}
?>
 </body>
</html>
