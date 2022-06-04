<?php
	include('conn.php');
	
	$id=$_GET['id'];
	
	$photo=$_POST['photo'];
	$name=$_POST['name'];
	$position=$_POST['position'];
	$course=$_POST['course'];
	
	mysqli_query($conn,"update candidates set photo='$photo' name='$name', position='$position', course='$course' where userid='$id'");
	header('location:addstudent.php');

?>