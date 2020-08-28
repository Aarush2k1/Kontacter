<?php session_start();
include_once("header.html");
if(isset($_SESSION["activeUser"])!=true)
    header("location:index.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link href="../css/profileCitizen.css" rel="stylesheet">
</head>

<body ng-app="profileApp" ng-controller="profileCont" ng-init="userId='<?php echo $_SESSION["activeUser"]; ?>'">
    <center>
        <div class="col-12 bg-danger">Profile
        </div>
        <div class="container-sm">
            <form action="../php/Citizen-profileProcess.php" method="post" enctype="multipart/form-data">
                <div class="form-row mr-auto">
                    <div id="image" class="col-md-12 form-group">
                        <img id="picShow" src="../../pics/avatar.png">
                        <img id="edit" src="../../pics/edit.png">
                        <input type="file" id="picUpload" name="picUpload" onchange="picPrev(this);" hidden>
                        <input type="hidden" id="hdn" name="hdn">
                    </div><br><br>
                    <div class="col-md-6 form-group">
                        <label>Your Account ID</label>
                        <input type="text" readonly name="uid" id="uid" class="form-control" ng-model="userId">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Full Name</label>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Mobile</label>
                        <input type="number" name="mobile" id="mobile" class="form-control">
                        <span id="errMob"></span>
                    </div>
                    <div class="col-md-12 form-group">
                        <label>Address</label>
                        <input type="text" name="address" id="address" class="form-control">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="state">State</label>
                        <select onchange="print_city('city', this.selectedIndex);" id="state" name="state" class="form-control"></select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="city">City</label>
                        <select id="city" name="city" class="form-control">
                            <option value="">Select State First...</option>
                        </select>
                    </div>
                    <br><br>
                    <div class="col-md-12 form-group">
                        <button type="submit" class="btn btn-outline-danger">Submit</button>
                        <button type="button" id="fetchBtn" class="btn btn-outline-light">Fetch Profile</button>
                        <a href="HTMLdashboardCitizen.php">
                            <button type="button" class="btn btn-outline-info">Home</button>
                        </a>
                    </div>
                </div>
            </form>
        </div>
        <div id="wait"></div>
    </center>
</body>
<script src="../js/cities.js" type="text/javascript"></script>
<script src="../js/profileCitizen.js" type="text/javascript"></script>

</html>
