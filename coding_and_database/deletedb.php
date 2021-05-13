<?php
$conn=new mysqli("localhost","root","");
$sql="delete database aroka";
mysqli_select_db($conn,"aroka");

$result=$conn->query($sql);
echo"database deleted";
?>