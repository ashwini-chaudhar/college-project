<html>
<title>add place</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>

<body background="https://img.freepik.com/free-vector/wide-tropical-beach-background_88088-600.jpg?size=626&ext=jpg" style="background-size:100%;background-position: fixed;">


<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top scrolling-navbar">
  <div class="container">
    
  
      <li class="nav-item "> 
        <a class="nav-link" href="homepage.php">Home</a>
      </li>          
 
      <li class="nav-item ">
        <a class="nav-link" href="abt.html">About us</a>
      </li>
  
    <li class="nav-item">
      <a class="nav-link" href="cont.html">Contact us</a>
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
           
                                <input type="submit">
    </center>
</form>

<?php
include('connectDB.php');
if(isset($_GET['name']))
{
  $name=$_GET['name'];
  
  $sql="DELETE FROM addplaces where name ='".$name."'";
  if($conn->query($sql)===TRUE)
  {
    echo"<script text='text/javascript'>alert('value deletedted');</script>";
  }
  else
    echo "error";
}
?>