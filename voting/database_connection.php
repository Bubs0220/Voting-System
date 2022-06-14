<?php

//database_connection.php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost","root","","user");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$query = "SELECT * FROM candidates";
$result = $mysqli->query($query);
$names = [];
$positions = [];
$ids = [];
$courses = [];
$img = [];
while ($row = $result->fetch_assoc()) {
	$names[] = $row['name'];
	$positions[] = $row['position'];
	$ids[] = $row['userid'];
	$courses[] = $row['course'];
	$img = $row['photo'];
}
$x = count($ids);
$result -> close();


?>