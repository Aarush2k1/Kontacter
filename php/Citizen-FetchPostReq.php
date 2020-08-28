<?php
include_once("connection.php");
$uid=$_GET["uid"];

$query="select * from workrequests where uid='$uid'";
$table=mysqli_query($dbConn,$query);
$ary=array();

while($row=mysqli_fetch_array($table))
{
	
	$ary[]=$row;
}
echo json_encode($ary);
?>
