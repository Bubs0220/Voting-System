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
		<link rel="stylesheet" href="user_style.css">
	</head>
	<body>
		<h1><center>2022 Student Election</center></h1>
		<div class = "logout">
			<ul>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</div>
	</body>
</html>