<html>
<title>add temple place</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>

<body background="img\background\bluebg.jpg" style="background-size:100%;background-position: fixed;">


<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top scrolling-navbar">
  <div class="container">
    
  
      <li class="nav-item "> 
        <a class="nav-link" href="homepage.php">Home</a>
      </li>          
 
      <li class="nav-item ">
        <a class="nav-link" href="aboutus.html">About us</a>
      </li>
  
    <li class="nav-item">
      <a class="nav-link" href="contus.html">Contact us</a>
    </li>
 
    <li class="nav-item">
      <br>
      <a ><b><i><h4><font color="white">AROKA TOURS AND TRAVELS</font></h4></i></b></a>
    </li>
  </ul> 
  </div>
</nav>

<br><br><br><br>

<body>
<form method="POST" action="<?php $_SERVER['PHP_SELF'];?>">
  <center> Enter Place name :  <input type="text" name="name"><br><br>
           Enter image :       <input type="file" name="file"><br><br>
           Enter discription : <input type="text" name="disc"><br><br>
           Enter package :     <input type="text" name="pack"><br><br>
           Enter price :       <input type="text" name="price"><br><br>
                                <input type="submit">
    </center>
</form>
<?php
include('connectDB.php');
if($_SERVER['REQUEST_METHOD']=="POST")
{
  $name=$_POST['name'];
  $img=$_POST['file'];
  $img1="img/".$img;
  $disc=$_POST['disc'];
  $pack=$_POST['pack'];
  $price=$_POST['price'];
  $sql="INSERT INTO addtemp (name,img,disc,pack,price) VALUES ('".$name."','".$img1."','".$disc."','".$pack."','".$price."')";
  if($conn->query($sql)===TRUE)
  {
    echo"<script text='text/javascript'>alert('value inserted');</script>";
  }
  else
    echo "error";
}
?>
</body>
</html>