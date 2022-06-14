<?php
	include('conn.php');
	if(isset($_POST['upload'])){
		$id = $_POST['id'];
		$filename = $_FILES['image']['name'];
		if(!empty($filename)){
		  move_uploaded_file($_FILES['image']['tmp_name'], '../images/'.$filename);  
		}
		
		$sql = "UPDATE candidates SET image = '$filename' WHERE id = '$id'";
		if($conn->query($sql)){
		  $_SESSION['success'] = 'Photo updated successfully';
		}
		else{
		  $_SESSION['error'] = $conn->error;
		}
	
	  }
	  else{
		$_SESSION['error'] = 'Select candidate to update photo first';
	  }
	$id=$_GET['id'];
	
	$name=$_POST['name'];
	$position=$_POST['position'];
	$course=$_POST['course'];

	
	mysqli_query($conn,"update candidates set name='$name', position='$position', course='$course' where userid='$id'");
	header('location:addstudent.php');

?>