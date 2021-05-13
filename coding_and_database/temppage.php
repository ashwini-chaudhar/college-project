<html>
<title>temple page</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/homepage.css">
<script>

function book(str)
{
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function()
  {
    if (this.readyState == 4 && this.status == 200)
    {
      
    }
  };
  xhttp.open("GET", "ajax/bookAj.php?q="+ str, true);
  xhttp.send();
}

</script>
</head>

<body background="img\t3.jpg" style="background-size:100%;background-position: fixed;">


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


<div class="container py-5 my-5">
  <div class="row">
    <div class="col-lg-3">

    <h3>Categories:</h3>
      <div class="list-group" style="border:5px solid black;">

      <a href="homepage.php" class="list-group-item">HOLIDAY PACKAGES</a>

      <a href="temppage.php" class="list-group-item">TEMPLE PACKAGES</a>

      <a href="honeypage.php" class="list-group-item">HONEYMOON PACKAGES</a>

      </div>
    </div>

      <div class="col-lg-8">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">

          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>

          <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>

          <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>

          </ol>

          <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
                      
           <img class="d-block img-fluid" href src="img\temp1.jpg" style="border:5px solid black;height:25rem;width:50rem";alt="first slide">

          </div>


          <div class="carousel-item">
               
          <img class="d-block img-fluid" href src="img\temp2.jpg" style="border:5px solid black;height:25rem;width:50rem";alt="Second slide">
          </div>
          <div class="carousel-item">

               <img class="d-block img-fluid" href src="img\temp3.jpg" style="border:5px solid black;height:25rem;width:50rem";alt="Third slide">
          </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">

          <span class="carousel-control-prev-icon" aria-hidden="true">
          </span>

          <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">

          <span class="carousel-control-next-icon" aria-hidden="true"></span>

          <span class="sr-only">Next</span>
          </a>
          </div>
      <h2><B>GUIDE + FOOD(ONLY VEG) FREE OF COST</B></h2>
    </div>
  </div>
</div>

  <div class="container-fluid">
    <div class="col">
     <?php 
      include 'connectDB.php';
      $name="";
      $img="";
      $disc="";
      $pack="";
      $price="";
    
      $sql="SELECT * FROM addtemp";
      $result=$conn->query($sql);
   
      if($result->num_rows>0)
      {
         while($row=$result->fetch_assoc())
           {
            $name=$row['name'];
            $img=$row['img'];
            $disc=$row['disc'];
            $pack=$row['pack'];
            $price=$row['price'];
            $id=$row['id'];
            ?>
          
            <div class="col-3 mb-3">
              <div class="card" style="border:5px solid black;">
                <div class="card-body">
                  <a href="insidetemple.html"><img class="card-img-top" href src="<?php echo $img;?>" style="height:15rem;width:15rem;"></a>
                  <h6 class="card-header"><b><?php echo " $name";?><b></h6>
                  <h5 class="card-header"><?php echo 'Price in Rs :'." $price";?></h5>
                  <h6 class="card-header"><?php echo "$disc";?></h6>
                  <h5 class="card-footer"><b><?php echo $row['pack'];?><br></h5>
                  <a class="btn btn-primary btn-md btn-block" href="isLogintemp.php?q=<?php echo $id;?>">Book</a>
              </div>
            </div>
          </div>
       
           
          <?php 
            }
          }
        ?>
    </div>
  </div>
</body>
</html>