<?php
include_once("connection.php");
$uid=$_GET["uid"];
//$pwd=md5($_GET["pwd"]);
$pwd=$_GET["pwd"];

session_start();//creates session array

$query="select * from users where uid='$uid'";
$table=mysqli_query($dbConn,$query);
$msg=mysqli_error($dbConn);
if($msg==""){
if(mysqli_num_rows($table)==1)
{
    $row=mysqli_fetch_array($table); 
    if($row["status"]==1){
        $hash=$row["pwd"];
//        if($pwd==$hash)
        if(password_verify($pwd,$hash))
        {
            $_SESSION["activeUser"]=$uid;//stored uid in session
            echo $row["category"];
        }
        else echo $hash; 
    }
   else {
        echo "Sorry your account is blocked";
    }
}
else  
       echo "Wrong Email id";
}
else echo $msg;
?>
