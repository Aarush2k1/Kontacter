<?php
include_once("connection.php");
$uid=$_GET["uid"];

$errQuery="select * from profilecitizen where uid='$uid'";
$table=mysqli_query($dbConn,$errQuery);
if(mysqli_num_rows($table)==1)
echo "User Id already in use";
else echo "Welcome ".$uid." .Go on";

?>
