<?php
include_once("SMS_OK_sms.php");

$mobile=$_POST["mobile"];
$msg="Hello Katia Ji..";

$msg=SendSMS($mobile,$msg);
echo $msg;
?>