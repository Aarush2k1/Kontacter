<?php
include_once("connection.php");
$query="select distinct category from profileworker";
$table=mysqli_query($dbConn,$query);

$ary=array();

while($row=mysqli_fetch_array($table))
{
	
	$ary[]=$row;
}
echo json_encode($ary);
?>
