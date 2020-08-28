<?php
include_once("connection.php");
include_once("../SMS_OK_sms.php");

$uid=$_GET["uid"];
$query="select * from users where uid='$uid'";
$table=mysqli_query($dbConn,$query);

if(mysqli_num_rows($table)==1)
{
    $row=mysqli_fetch_array($table); 
    $msg=$uid." your password is ".$row['pwd'];
    SendSMS($row['mobile'],$msg);
    echo "Password is sent to registered mobile number"; 
}
else echo "No email exists";
       

?>
