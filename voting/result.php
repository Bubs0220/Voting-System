
<html>  
    <head>  
		
        <title>Voting System</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
		<button onclick="history.back()">Back to Home Page </button>
    </head>  
    <body>  
		<style>
			@import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Poppins:wght@400;500;600&display=swap');
			body{
				background: linear-gradient(#f0d4d6,#e49a9d,#c84d52,#b61a27);
				font-family: 'Poppins';
            }
            button{
                color: white;
                background: #8b2d2e;
				border-color: white;
                margin-left: 30px;
                padding: 10px 10px 10px 10px;
                border-width: 1px;
                border-style: solid;
                position: relative;
                float: left;
                margin-top: 30px;
                border-radius: 5px;
               
                
            }
            button:hover{
                background: #c84d52;
                border-color: white;
            }
            h2{
                font-size: 40px;
                text-align: center;
                margin-left: 57%;
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
					<div id="poll_result" style="background:  #543438; box-shadow: 5px 10px 18px black; padding: 10px 10px 10px 10px; border-radius: 5px; margin-left: 29%; width: 100%"></div>
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
					alert("YOUR VOTE IS SUBMITTED SUCCESSFULLY");
				}
			});
		}
		else
		{
			alert("Please select Candidate.");
		}
	});
	

});  
</script>
