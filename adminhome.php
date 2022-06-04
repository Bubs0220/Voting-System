<?php
	session_start();

	if(!isset($_SESSION["username"]))
	{
		header("location:login.php");
	}
?>

<!DOCTYPE html>
	<html>
	<head>
		<title>Voting System</title>
		<link rel="stylesheet" href="admin_style.css">
	</head>
	<body>
		<div class = "navbar">
			<ul>
				<li><a href = "adminhome.php">Home</a></li>
				<li><a href = "addstudent/addstudent.php">Voters</a></li>
				<li><a href = "addcandidate/addstudent.php">Candidates</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</div>	
		
		<form method="post" action="print.php">
		  	<button type="submit" name="export" class="btn btn-primary">Download</button>
		</form>

		<h1><center>2022 Student Election</center></h1>
			<style>
				h1{
					color: white;
				}
			</style>
	</body>
</html>
