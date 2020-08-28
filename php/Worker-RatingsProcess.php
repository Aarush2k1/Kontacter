<?php 
include_once("connection.php");
$uid=$_GET["uid"];
$wid=$_GET["wid"];

$query="insert into ratings values('','$uid','$wid','')";
mysqli_query($dbConn,$query);
$msg=mysqli_error($dbConn);
   if($msg=="")
      {
       echo "<h2>Request Sent...<br><a href='../html/HTMLdashboardWorker.php'>Success</a></h2>";
     }
    else echo $msg;
?>
