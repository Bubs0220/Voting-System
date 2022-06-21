<?php

//fetch_poll_data.php

include('database_connection1.php');

$candidates = $names;
$total_poll_row = get_total_rows($mysqli);

$output = '';
if($total_poll_row > 0)
{
	foreach($candidates as $row)
	{
		$query = "SELECT votes FROM candidates WHERE name = '".$row."'";
		$result = $mysqli->query($query);
		$data = $result -> fetch_array(MYSQLI_ASSOC);
		$total_row = $data['votes'];
		$percentage_vote = $total_row;
		$progress_bar_class = '';
		if($percentage_vote >= 100)
		{
			$progress_bar_class = 'progress-bar-success';
		}
		else if($percentage_vote <= 75 && $percentage_vote > 50)
		{
			$progress_bar_class = 'progress-bar-info';
		}
		else if($percentage_vote <= 25 && $percentage_vote > 1)
		{
			$progress_bar_class = 'progress-bar-warning';
		}
		else
		{
			$progress_bar_class = 'progress-bar-danger';
		}
		$output .= '
		<div class="row">
			<div class="col-md-2" align="right">
				<label>'.$row.'</label>
			</div>
			<div class="col-md-10">
				<div class="progress">
					<div class="progress-bar '.$progress_bar_class.'" role="progressbar" aria-valuenow="'.$percentage_vote.'" aria-valuemin="0" aria-valuemax="100" style="width:'.$percentage_vote.'%">
						'.$percentage_vote.' number of votes for <b>'.$row.'</b>.
					</div>
				</div>
			</div>
		</div>
		
		';
	}
}

echo $output;

function get_total_rows($mysqli)
{
	$query = "SELECT * FROM candidates WHERE votes";
	$result = $mysqli->query($query);
	return mysqli_num_rows($result);
}

?>