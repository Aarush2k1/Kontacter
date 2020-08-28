<?php
include_once("connection.php");
$email=$_GET["uid"];

$errQuery="select * from users where uid='$email'";
$table=mysqli_query($dbConn,$errQuery);
if(mysqli_num_rows($table)==1)
echo "Used";
else echo "Free";

?>
