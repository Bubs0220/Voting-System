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
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
		<link rel="stylesheet" href="admin_style.css">
	</head>
	<body>
		<div class = "navbar">
			<ul>
				<li><a href = "adminhome.php">Home</a></li>
				<li><a href = "addstudent/addstudent.php">Voters</a></li> 
				<li><a href = "addcandidate/addstudent.php" style= "margin-right: 30px">Candidates</a></li>
				<li><a href="logout.php" style= "margin-right: 10px">Logout</a></li>
			</ul>
		</div>	
		<div class = "printer">
			<ul>
				<li><form method="post" action="print.php">
		  			<button type="submit" name="export" class="button">Download</button>
				</form></li>
			</ul>
		</div>

		<h1><center>2022 Student Election</center></h1>
			<style>
				h1{
					color: white;
				}
				@import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Poppins:wght@400;500;600&display=swap');
			body{
				background: linear-gradient(#f0d4d6,#e49a9d,#c84d52,#b61a27);
				font-family: 'Poppins';
            }
           
            h2{
                font-size: 40px;
                text-align: center;
                margin-left: 88%;
                white-space: nowrap;
                font-weight: bold;
                color: #543438;

            }
            label{
                color: white;
                white-space: nowrap;
            }
            .progress{
                margin-left: 60px;
			}
			</style>
			<div class="col-md-6">
                
				<br />
				<br />
				<br />
				<h2>Live Result</h2><br />
				<div id="poll_result" style="background:  #543438; box-shadow: 5px 10px 18px black; padding: 10px 10px 10px 10px; border-radius: 5px; margin-left: 50%; width: 100%"></div>
			</div>
		</div>
		
		<br />
		<br />
		<br />
	</div>
	</body>
</html>
<script>  
$(document).ready(function(){
	
	fetch_poll_data();

	function fetch_poll_data()
	{
		$.ajax({
			url:"fetch_poll_data1.php",
			method:"POST",
			success:function(data)
			{
				$('#poll_result').html(data);
			}
		});
	}
});  
</script>

