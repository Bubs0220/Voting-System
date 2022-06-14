<?php
include ('database_connection.php');
?>

<html>  
    <head>  
		
        <title>Voting System</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
		
    </head>  
    <body>  
		<style>
			@import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Poppins:wght@400;500;600&display=swap');
			body{
				background: linear-gradient(#f0d4d6,#e49a9d,#c84d52,#b61a27);
				font-family: 'Poppins';
			}
			h1{
				font-size: 40px;
				font-weight: bold;
			}
			h2{
				margin-top: -25px;
				font-weight: bold;
			}
			.btn{
				font-size: 15px;
				background: #8b2d2e;
				border-color: white;
			}
			.btn:hover{
				background: #c84d52;
				border-color: white;

			}
			h5{
				margin: 10px;
				font-size: 15px;
				color: white;
			}
			h4{
				margin: 10px;
				color: white;
			}
			h6{
				margin: 10px;
				color:white;
			}
			label{
				color: white;
				white-space: nowrap;
			}
			.progress{
				margin-left: 60px;
			}
		</style>
        <div class="container">  
            <br />  
            <br />
			<br />
			<h1 align="center">2022 Student Election</h1><br />
			<div class="row">
				<div class="col-md-6">
					<form method="post" id="poll_form">
						<br />
						<?php for($i=0; $i < $x; $i++) { ?>
							<div class="radio" style="background:#8b2d2e; padding-bottom: 20px; border-radius: 3px">
								<label><h4><input type="radio" name="poll_option" class="poll_option" value="<?php echo $names[$i]?>" /> <?php echo $names[$i]?></h4></label>
								<h5><?php echo $positions[$i] ?></h5>
								<h6><?php echo $courses[$i] ?></h6>
							</div>
							<br />
						<?php }?>
						<input type="submit" name="poll_button" id="poll_button" class="btn btn-primary" />
					</form>
					<br />
				</div>
				<div class="col-md-6">
					<br />
					<br />
					<br />
					<h2>Live Poll Result</h2><br />
					<div id="poll_result" style="background:  #543438; box-shadow: 5px 10px 18px black; padding: 10px 10px 10px 10px; border-radius: 5px"></div>
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
			url:"fetch_poll_data.php",
			method:"POST",
			success:function(data)
			{
				$('#poll_result').html(data);
			}
		});
	}
	
	$('#poll_form').on('submit', function(event){
		event.preventDefault();
		var poll_option = '';
		$('.poll_option').each(function(){
			if($(this).prop("checked"))
			{
				poll_option = $(this).val();
			}
		});
		
		if(poll_option != '')
		{
			$('#poll_button').attr('disabled', 'disabled');
			var form_data = $(this).serialize();
			$.ajax({
				url:"poll.php",
				method:"POST",
				data:form_data,
				success:function()
				{
					$('#poll_form')[0].reset();
					$('#poll_button').attr('disabled', false);
					fetch_poll_data();
					alert("Poll Submitted Successfully");
				}
			});
		}
		else
		{
			alert("Please Select Option");
		}
	});
	
	
	
});  
</script>