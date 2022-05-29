<?php
	include('conn.php');
	
	$id=$_GET['id'];
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	$usertype=$_POST['usertype'];
	
	mysqli_query($conn,"update login set username='$username', password='$password', usertype='$usertype' where userid='$id'");
	header('location:addstudent.php');

?>