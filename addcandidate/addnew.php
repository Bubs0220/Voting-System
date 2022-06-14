<?php
	include('conn.php');

	$name=$_POST['name'];
	$position=$_POST['position'];
	$course=$_POST['course'];
	$image=$_POST['image'];
	
	mysqli_query($conn,"insert into candidates (name, position, course, image) values ('$name', '$position', '$course','$image')");
	header('location:addstudent.php');
?>
