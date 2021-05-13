<?php
session_start();
include 'connectDB.php';
$id="";
if(isset($_SESSION['login_user']))
{
	$email=$_SESSION['login_user'];
	$sql="SELECT * FROM customer WHERE email='".$email."'";
	$result=$conn->query($sql);
	while ($row=$result->fetch_assoc()) 
	{
		$id=$row['id'];
	}
}
$pid="";
if(isset($_GET['q']))
{
 $_SESSION['pid']=$_GET['q'];
 header('Location:book.php');
}
?>