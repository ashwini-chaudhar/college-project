<?php
session_start();
if(isset($_GET['q']))
{
	$id=$_GET['q'];
	$_SESSION['pid']=$id;
	echo $_SESSION['pid'];
}
?>