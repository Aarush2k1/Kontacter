<?php
include_once("connection.php");
session_start();

$uid=$_GET["uid"];
$pwd=$_GET["pwd"];
//$pwd=md5($_GET["pwd"]);
$mobile=$_GET["mobile"];
$category=$_GET["category"];

//crypt($pwd, $salt);
//hash('sha512',$pwd);
$options = [
  'cost' => 11
];
$hashPwd=password_hash($pwd,PASSWORD_BCRYPT,$options);

$query="insert into users values('$uid','$hashPwd','$mobile','$category',curdate(),curtime(),1)";
mysqli_query($dbConn,$query);
$msg=mysqli_error($dbConn);
if($msg==""){
    $_SESSION["activeUser"]=$uid;
      if($category=="Citizen")
         echo "Citizen";
      else if($category=="Worker")
          echo "Worker";
    else echo $category;
    }
else echo $msg;

?>
