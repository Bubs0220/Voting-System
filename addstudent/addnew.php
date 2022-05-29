<?php
	include('conn.php');
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	$usertype=$_POST['usertype'];
	
	mysqli_query($conn,"insert into login (username, password, usertype) values ('$username', '$password', '$usertype')");
	header('location:addstudent.php');

?>