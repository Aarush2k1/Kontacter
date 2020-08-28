<?php
include_once("connection.php");
$rid=$_GET["rid"];
$delete="delete from workrequests where rid='$rid'" ;
mysqli_query($dbConn,$delete);
$msg=mysqli_error($dbConn);
if($msg="")
{
    echo "ok";
}
else echo $msg;
?>
