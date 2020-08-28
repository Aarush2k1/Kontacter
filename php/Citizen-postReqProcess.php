<?php 
include_once("connection.php");
$uid=$_GET["uid"];
$category=$_GET["category"];
$problem=$_GET["problem"];
$location=$_GET["location"];
$city=$_GET["city"];

//$check="select * from workrequests";
//$table=mysqli_query($dbConn,$check);
//$rows=mysqli_fetch_array($table);


$query="insert into workrequests values('','$uid','$category','$problem','$location','$city',curdate())";
//adddate(curdate(),INTERVAL +10 DAY)
mysqli_query($dbConn,$query);
$msg=mysqli_error($dbConn);
   if($msg=="")
      {
       echo "<h2>Problem Posted...<br><a href='../html/HTMLdashboardCitizen.php'>Success</a></h2>";
     }
    else echo $msg;
?>
