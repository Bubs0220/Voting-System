<?php
	include('conn.php');
	$id=$_GET['id'];
	mysqli_query($conn,"delete from candidates where userid='$id'");
	header('location:addstudent.php');

?>