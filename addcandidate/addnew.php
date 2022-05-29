<?php
	include('conn.php');
	
	$name=$_POST['name'];
	$position=$_POST['position'];
	$course=$_POST['course'];
	
	mysqli_query($conn,"insert into candidates (name, position, course) values ('$name', '$position', '$course')");
	header('location:addstudent.php');

?>