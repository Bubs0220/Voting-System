<?php  
$connect = mysqli_connect("localhost", "root", "", "user");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM candidates";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
    <tr>  
        <th>Name</th>  
        <th>Position</th>  
        <th>Course</th>  
        <th>Votes</th>            
    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
        <td>'.$row["name"].'</td>  
        <td>'.$row["position"].'</td>  
        <td>'.$row["course"].'</td>  
        <td>'.$row["votes"].'</td>  
    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=Result.xls');
  echo $output;
 }
}
?>