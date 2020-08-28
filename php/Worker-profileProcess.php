<?php 
include_once("connection.php");

$uid=$_POST["uid"];
$email=$_POST["email"];
$username=$_POST["username"];
$mobile=$_POST["mobile"];
$firm=$_POST["firm"];
$address=$_POST["address"];
$city=$_POST["city"];
$state=$_POST["state"];
$pin=$_POST["pin"];
$category=$_POST["category"];
$specs=$_POST["specs"];
$exp=$_POST["exp"];
$bio=$_POST["bio"];
$picName=$_FILES["picUpload"]["name"];
$tmpName=$_FILES["picUpload"]["tmp_name"];
$cardName=$_FILES["cardUpload"]["name"];
$tempName=$_FILES["cardUpload"]["tmp_name"];
$hdn=$_POST["hdn"];
$cardhdn=$_POST["cardhdn"];

$query="select * from profileworker where uid='$uid'";
$table=mysqli_query($dbConn,$query);
$num=mysqli_num_rows($table);
if($num==1)   
        doUpdate($dbConn);
else 
         doSave($dbConn);

function doSave($dbConn)
{  
    global $uid,$username,$email,$mobile,$firm,$address,$city,$state,$pin,$category,$specs,$exp,$bio,$picName,$tmpName,$cardName,$tempName;

      $query="insert into profileworker  values('$uid','$email','$username','$mobile','$firm','$address','$city','$state','$pin','$category','$specs','$exp','$bio','$cardName','$picName','','')";

   mysqli_query($dbConn,$query);
   $msg=mysqli_error($dbConn);
   if($msg=="")
      {
       move_uploaded_file($tmpName,"Worker-Profile/".$picName);
       move_uploaded_file($tempName,"Worker-Profile/".$cardName);
       echo "<h2>Form Submission Successful<br><a href='../html/HTMLprofileworker.php'>Go back</a></h2>";
     }
    else echo $msg;
}
function doUpdate($dbConn)
{
    global $uid,$username,$email,$mobile,$firm,$address,$city,$state,$pin,$category,$specs,$exp,$bio,$picName,$tmpName,$cardName,$tempName,$hdn,$cardhdn;
    $fileName="";
    $fileCard="";
    
    if($picName=="")
        $fileName=$hdn;
    else {
        $fileName=$picName;  
        unlink("Worker-Profile/".$hdn);
        move_uploaded_file($tmpName,"Worker-Profile/".$fileName);
    }
    if($cardName=="")
        $fileCard=$cardhdn;
    else {
        $fileCard=$cardName;  
        unlink("Worker-Profile/".$cardhdn);
        move_uploaded_file($tempName,"Worker-Profile/".$fileCard);
    }
   
    $query="update profileworker set name='$username',email='$email',mobile='$mobile',firm='$firm',address='$address',city='$city',stat='$state',pin='$pin',category='$category',specs='$specs',exp='$exp',bio='$bio',aadharPic='$fileCard',profilePic='$fileName' where uid='$uid'";
    mysqli_query($dbConn,$query);
    $msg=mysqli_error($dbConn);
    
   if($msg=="")
      {      
       echo "<h2>Form Updation Successfull<br><a href='../html/HTMLprofileWorker.php'>Go Back</a></h2>";
     }
    else echo $msg;
}
?>
