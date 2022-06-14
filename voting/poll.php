<?php

//poll.php

include('database_connection.php');

if(isset($_POST["poll_option"]))
{
	$poll_option = $_POST["poll_option"];
	$query = "
	UPDATE candidates 
	SET votes = votes + '1' 
	WHERE name = '".$poll_option."';
	";
	$result = $mysqli->query($query);
}

?>