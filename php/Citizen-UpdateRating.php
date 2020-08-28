<?php
include_once("connection.php");

$wid=$_GET["wid"];
$rid=$_GET["rid"];
$val=$_GET["value"];
$update="update profileworker set total=total+'$val',count=count+1 where uid='$wid'"; $delete="delete from ratings where rid='$rid'" ;
//and delete from ratings where rid='$rid'";
mysqli_query($dbConn,$update);
$table=mysqli_query($dbConn,$delete);
$msg=mysqli_error($dbConn);
//if($row=mysqli_fetch_array($table))
//{
// if($row["rid"]==$rid)
// echo "notOk";
// else echo "ok";
//}
if($msg="")
{
    echo "ok";
}
else echo $msg;
?>
