<!DOCTYPE html>
<html>
<head>
  <title>book temple pack</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body background="img\background\bookbg.jpg" style="background-size:100%;background-position: fixed;">>
  <div class="container"><center>
    <div class="text-center"><h2>PAY YOUR BOOKING AMOUNT AT THE TIME OF TOUR</h2></div>
    <hr>
    <div class="text-center"><h1>BOOKING FORM </h1></div>
    <hr><hr>

    <form method="GET" action="<?php $_SERVER['PHP_SELF'] ?>">
      <h3>Arrival Details :</h3>
      <div class="form-inline">
        <input type="text" name="arvPlace" placeholder="Arriving Place" class="form-control" style="border:5px solid black";>
        <div class="px-5"></div>

       <h3> Date of Arrival:</h3>
         <div class="form-inline">
          <input type="date" name="date" class="form-control" style="border:5px solid black";>
      </div>
      <br>
      <div class="form-inline">
        <input type="text" class="form-control" placeholder="Number of person" name="noOfPerson"style="border:5px solid black";>
        <div class="px-5"></div>
        <input type="text" class="form-control float" placeholder="Number of child" name="numOfChild" style="border:5px solid black";>
      </div>
      <br><hr>
      <div class = "form-inline">
      <h3> Personal Details :</h3>
       <div class="form-inline">
        <input type="text" class="form-control" placeholder="Full name" name="name"  style="border:5px solid black";><br>
        <input type="text" class="form-control float" placeholder="Mobile no" name="mno"  style="border:5px solid black";><br>
        <input type="text" class="form-control float" placeholder="Address" name="address"  style="border:5px solid black";><br>
        <h3><b>Gender<br><br>
          <input type="radio" name="gender" value="Male">Male
          <input type="radio" name="gender" value="Female">Female
        </b></h3><br>
      </div><hr>
        <h3>Booking Details</h3>
        <input type="text" name="noRoom" class="form-control" placeholder="Number of Rooms" style="border:5px solid black";>
      </div>
      <hr>
      <input type="submit" value="confirm booking" class="btn btn-md btn-block btn-primary">
  
    </form>
  </center>
</div>
</html>




<?php 
if ($_SERVER['REQUEST_METHOD']=='GET') 
{
  include 'isLogintemp.php';
  if(isset($_SESSION['login_user']) && isset($_SESSION['pid']) && isset($_GET['noRoom']))
  {
    $arvPlace=$_GET['arvPlace'];
    $date=$_GET['date'];
    $noOfPerson=$_GET['noOfPerson'];
    $numOfChild=$_GET['numOfChild'];
    $name=$_GET['name'];
    $mno=$_GET['mno'];
    $address=$_GET['address'];
    $gender=$_GET['gender'];
    $noRoom=$_GET['noRoom'];

    $sql1="INSERT INTO bookingstemp (usr_id,placeid,arvPlace,date,noOfPerson,noOfChild,name,mno,address,gender,noRoom) VALUES('".$id."','".$_SESSION['pid']."','$arvPlace','".$date."','".$noOfPerson."','".$numOfChild."','".$name."','".$mno."','".$address."','".$gender."','".$noRoom."')";

    if($conn->query($sql1)===TRUE)
    {
      header('Location: bookdetailtemp.php');
    }
  }
}
?> 
