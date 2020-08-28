<?php
include_once("connection.php");

$uid=$_GET["uid"];
$newPwd=$_GET["pwd"];
$options = [
  'cost' => 11
];
$pwd=password_hash($newPwd,PASSWORD_BCRYPT,$options);

$update="update users set pwd='$pwd' where uid='$uid'";
mysqli_query($dbConn,$update);
$msg=mysqli_error($dbConn);
if($msg="")
{
    echo "ok";
}
else echo $msg;
?>
