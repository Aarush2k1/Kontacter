<?php 
include_once("connection.php");

$uid=$_POST["uid"];
$email=$_POST["email"];
$username=$_POST["username"];
$mobile=$_POST["mobile"];
$address=$_POST["address"];
$city=$_POST["city"];
$state=$_POST["state"];
$picName=$_FILES["picUpload"]["name"];
$tmpName=$_FILES["picUpload"]["tmp_name"];
$hdn=$_POST["hdn"];

$query="select * from profilecitizen where uid='$uid'";
$table=mysqli_query($dbConn,$query);
$num=mysqli_num_rows($table);
//echo $num."   ";
//if($btn=="save")
//    doSave($dbConn);
//else doUpdate($dbConn);
if($num==1)   
        doUpdate($dbConn);
else 
         doSave($dbConn);

function doSave($dbConn)
{  
    global $uid,$username,$email,$mobile,$address,$city,$state,$picName,$tmpName;

      $query="insert into profilecitizen  values('$uid','$email','$username','$mobile','$address','$city','$state','$picName')";

   mysqli_query($dbConn,$query);
   $msg=mysqli_error($dbConn);
   if($msg=="")
      {
       move_uploaded_file($tmpName,"Citizen-ProfilePics/".$picName);
       echo "<h2>You are Signed in...<br><a href='../html/HTMLprofileCitizen.php'>Success</a></h2>";
     }
    else echo $msg;
}
function doUpdate($dbConn)
{
    global $uid,$username,$email,$mobile,$address,$city,$state,$picName,$tmpName,$hdn;
    
    if($picName=="")
        $fileName=$hdn;
    else {
        $fileName=$picName;      
        unlink("Citizen-ProfilePics/".$hdn);
        move_uploaded_file($tmpName,"Citizen-ProfilePics/".$fileName);
    }
   
    $query="update profilecitizen set name='$username',email='$email',mobile='$mobile',address='$address',city='$city',stat='$state',pic='$fileName' where uid='$uid'";
    mysqli_query($dbConn,$query);
    $msg=mysqli_error($dbConn);
    
   if($msg=="")
      {       move_uploaded_file($tmpName,"Citizen-ProfilePics/".$picName);
       echo "<h2>Values Changed...<br><a href='../html/HTMLprofileCitizen.php'>Success</a></h2>";
     }
    else echo $msg;
}
?>
