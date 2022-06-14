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
	
</div>
		<title>Voting System</title>
		<link rel="stylesheet" href="user_style.css">
	</head>
	<body>
		
		<style>
			.btn-primary{
				background-color: #b61a27;
				border-radius: 2px;
				border: 1px solid;
				border-color: white;
				margin-left: 20px;
			}
			
		</style>
		<h1><center>2022 Student Election</center></h1>
		<div.scroll id="full_screen"></div>
		<div class = "logout">
			<ul>
				<li><a href="logout.php">Logout</a></li>
			</ul>
			<div class="container">
	<div style="height:70px;"></div>
	<div class="well" style="border-color:#543438; margin:auto; padding:auto; width:80%; background-color: #543438; box-shadow: 5px 10px 18px black;">
	<span style="font-size:20px; color:white; margin: 10px;"><center><strong>President</strong></center></span>	
		<span class="pull-left"><a href="#vote" data-toggle="modal" class="btn btn-primary" style="position: relative; left: 80%"><span class="glyphicon glyphicon-plus"></span>Vote</a></span>
		<div style="height:100px;"></div>
		</div>
		<div class="container">
	<div style="height:70px;"></div>
	<div class="well" style="border-color:#543438; margin:auto; padding:auto; width:80%; background-color: #543438; box-shadow: 5px 10px 18px black;">
	<span style="font-size:20px; color:white; margin: 10px;"><center><strong>Vice President</strong></center></span>	
		<span class="pull-left"><a href="#vote" data-toggle="modal" class="btn btn-primary" style="position: relative; left: 80%"><span class="glyphicon glyphicon-plus"></span>Vote</a></span>
		<div style="height:100px;"></div>
		</div>
		<div class="container">
	<div style="height:70px;"></div>
	<div class="well" style="border-color:#543438; margin:auto; margin-bottom: 20px; padding:auto; width:80%; background-color: #543438; box-shadow: 5px 10px 18px black;">
	<span style="font-size:20px; color:white; margin: 10px;"><center><strong>Secretary</strong></center></span>	
		<span class="pull-left"><a href="#vote" data-toggle="modal" class="btn btn-primary"style="position: relative; left: 80%"><span class="glyphicon glyphicon-plus"></span>Vote</a></span>
		<div style="height:100px;"></div>
		</div>
		<div class="container">
	<div style="height:70px;"></div>
	<div class="well" style="border-color:#543438; margin:auto; margin-bottom: 20px; padding:auto; width:80%; background-color: #543438; box-shadow: 5px 10px 18px black;">
	<span style="font-size:20px; color:white; margin: 10px;"><center><strong>Treasurer</strong></center></span>	
		<span class="pull-left"><a href="#vote" data-toggle="modal" class="btn btn-primary"style="position: relative; left: 80%"><span class="glyphicon glyphicon-plus"></span>Vote</a></span>
		<div style="height:100px;"></div>
		</div>
	</body>
</html>