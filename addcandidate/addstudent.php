<!DOCTYPE html>
<html>
<head>
	<title>Voting System</title>
	<link rel="stylesheet" href="addstudent.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<style>
		body{
			font-family: 'Poppins';
		}
	</style>
			<div class = "navbar">
			<ul>
				<li><a href = "../adminhome.php">Home</a></li>
				<li><a href = "../addstudent/addstudent.php">Voters</a></li>
				<li><a href = "addstudent.php">Candidates</a></li>
				<li><a href="../logout.php">Logout</a></li>
			</ul>
		</div>	
<div class="container">
	<div style="height:50px;"></div>
	<div class="well" style="border-color:#543438; margin:auto; padding:auto; width:80%; background-color: #543438; box-shadow: 5px 10px 18px black;">
	<span style="font-size:25px; color:white"><center><strong>Register Candidate</strong></center></span>	
		<span class="pull-left"><a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a></span>
		<div style="height:50px;"></div>
		<table class="table table-striped table-bordered" style="background-color: white;">
			<thead>
				<style>
					th{
						color: black;
						font-family: 'Poppins';
					}
				</style>
				<th>Photo</th>
				<th>Name</th>
				<th>Position</th>
				<th>Course</th>
				<th>Action</th>
			</thead>
			<tbody>
			<?php
				include('conn.php');
				
				$query=mysqli_query($conn,"select * from `candidates`");
				while($row=mysqli_fetch_array($query)){
					?>
					<tr>
						<td><img src="data:photo/jpg;charset=utf8;base64,<?php echo base64_encode($row['photo']); ?>" width="80" height="80"/></td>
						<td><?php echo ucwords($row['name']); ?></td>
						<td><?php echo ucwords($row['position']); ?></td>
						<td><?php echo $row['course']; ?></td>

						<td>
							<a href="#edit<?php echo $row['userid']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a> &nbsp;
							<a href="#del<?php echo $row['userid']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
							<?php include('button.php'); ?>
						</td>
					</tr>
					<?php
				}
			
			?>
			</tbody>
		</table>
	</div>
	<?php include('add_modal.php'); ?>
</div>
</body>
</html>