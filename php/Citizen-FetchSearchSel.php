<?php
	include_once("connection.php");
$category=$_GET["category"];
$city=$_GET["city"];

$query="select * from profileworker where category='$category' AND city='$city'";
$table=mysqli_query($dbConn,$query);
$ary=array();

while($row=mysqli_fetch_array($table))
{
	
	$ary[]=$row;
}
echo json_encode($ary);
?>
