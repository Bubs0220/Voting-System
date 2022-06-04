<?php
	include('conn.php');

    $photo=$_POST['photo'];
	$name=$_POST['name'];
	$position=$_POST['position'];
	$course=$_POST['course'];
	
	mysqli_query($conn,"insert into candidates (photo, name, position, course) values ('$photo', $name', '$position', '$course')");
	header('location:addstudent.php');
?>