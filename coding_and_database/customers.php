<html>
<title>booking done for honeymoon</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/bookDetail.css">
<script>
</script>
</head>

<body background="img\background\bluebg.jpg" style="background-size:100%;background-position: fixed;">


<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top scrolling-navbar">
  <div class="container">
    <a class="navbar-brand" href="logca.html">
 
   <img src="https://c7.uihere.com/files/370/680/1005/login-facebook-computer-icons-button-clip-art-register-button.jpg" alt="login" style="width:40px";>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
    <ul class="navbar-nav mr-auto">
  
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
  <ul>
    <div class="md-form">
    
      <form action="#" method="GET"> 
        <input type="text" name="search">
        <input type="submit" name="Search" value="search">
      </form>
 
    </div>
  </ul>

  </div>
</nav>



<div class="container-fluid py-5 my-5">
  <table border=2 class="text-center">
    <tr><th>Name</th><th>Place</th><th>Image</th><th>Discription</th><th>Pack</th><th>Price</th><th>Date</th><th>Number of Person</th><th>Number of Room</th><th>Mobile no.</th><th>Address</th><th>Gender</th></tr>
    <?php
      include 'isLogin.php';
      $sql="SELECT * FROM bookings";
      $result=$conn->query($sql);
      while ($row=$result->fetch_assoc()) 
      {
        $sql1="SELECT * FROM addplaces WHERE id='".$row['placeid']."'";
        $result1=$conn->query($sql1);
        while ($row1=$result1->fetch_assoc()) 
        {
          echo "<tr><td>".$row['name']."</td><td>".$row1['name']."</td><td><img id='img' src=".$row1['img']."></td><td>".$row1['disc']."</td><td>".$row1['pack']."</td><td>".$row1['price']."</td><td>".$row['date']."</td><td>".$row['noOfPerson']."</td><td>".$row['noRoom']."</td><td>".$row['mno']."</td><td>".$row['address']."</td><td>".$row['gender']."</td></tr>";
        }
      }
    ?>
  </table>
</div>
</body>
</html>