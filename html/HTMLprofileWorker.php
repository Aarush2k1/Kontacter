<?php session_start();
include_once("header.html");
if(isset($_SESSION["activeUser"])!=true)
    header("location:index.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Worker Profile</title>
    <link href="../css/profileWorker.css" rel="stylesheet">
</head>

<body ng-init="userId='<?php echo $_SESSION["activeUser"]; ?>'">
    <center>
        <div class="container-sm col-md-12  bg-warning">Profile
        </div>
        <div class="container-sm table-bordered">
            <form action="../php/Worker-profileProcess.php" method="post" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="col-md-6 form-group">
                        <label>Your Account ID</label>
                        <input type="text" readonly name="uid" id="uid" class="form-control" ng-model="userId">
                        <span id="errUid">error area</span>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Email</label>
                        <input type="email" required name="email" id="email" class="form-control">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Full Name</label>
                        <input type="text" required name="username" id="username" class="form-control">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Contact Number</label>
                        <input type="number" required name="mobile" id="mobile" class="form-control">
                        <span id="errMob"></span>
                    </div>
                    <div class="col-md-12 form-group">
                        <label>Firm/Shop Name</label>
                        <input type="text" required name="firm" id="firm" class="form-control">
                        <span id="errMob"></span>
                    </div>
                    <div class="col-md-12 form-group">
                        <label>Address (shop/self)</label>
                        <input type="text" required name="address" id="address" class="form-control">
                    </div>
                    <div class="col-md-5 form-group">
                        <label for="state">State</label>
                        <select onchange="print_city('city', this.selectedIndex); enable();" id="state" name="state" class="form-control"></select>
                    </div>
                    <div class="col-md-5 form-group">
                        <label for="city">City</label>
                        <select id="city" name="city" class="form-control" disabled>
                            <option value="">Select State First...</option>
                        </select>
                    </div>
                    <div class="col-md-2 form-group">
                        <label>PinCode</label>
                        <input type="text" required name="pin" id="pin" class="form-control">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Category</label>
                        <select name="category" id="category" class="form-control">
                            <option value="--Select--">--Select--</option>
                            <optgroup label="Appliance Services/Repair">
                                <option value="AC Service & Repair">AC Service & Repair</option>
                                <option value="Chimney Servicing & repair">Chimney Servicing & repair</option>
                                <option value="Geyser Service & repair">Geyser Service & repair</option>
                                <option value="Refrigerator Repair">Refrigerator Repair</option>
                                <option value="TV Repair">TV Repair</option>
                                <option value="Washing Machine Service & repair">Washing Machine Service & repair</option>
                                <option value="Water Purifier Repai">Water Purifier Repair</option>
                            </optgroup>
                            <!--                           <option><a class="dropdown-toggle" href="#" id="Dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Tutorials</a>
                            </option>
                            <div class="dropdown-menu" aria-labelledby="Dropdown">
                                <a class="dropdown-item" href="#">Photography</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Video Editing</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Animation</a>
                            </div>
-->
                            <option value="Carpenter">Carpenter</option>
                            <optgroup label="Cleaning">
                                <option value="Car Cleaning">Car Cleaning</option>
                                <option value="Carpet cleaning">Carpet cleaning </option>
                                <option value="Pest Control">Pest Control</option>
                                <option value="Sofa Cleaning">Sofa Cleaning</option>
                                <option value="Water tank Cleaning">Water tank Cleaning</option>
                            </optgroup>
                            <option value="Electrician">Electrician</option>
                            <option value="Mason">Mason</option>
                            <option value="Painters">Painters</option>
                            <option value="Plumber">Plumber</option>
                            <option value="Tiler">Tiler</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group"> <label>Specialization</label>
                        <input typ="text" required name="specs" id="specs" class="form-control">
                    </div>
                    <div class="col-md-4 form-group">
                        <label>Experience</label>
                        <input type="number" required name="exp" id="exp" class="form-control">
                    </div>
                    <div class="col-md-8 form-group">
                        <label>Bio</label>
                        <textarea size="20" name="bio" id="bio" class="form-control"></textarea>
                    </div>
                    <div id="aadharPic" class="col-md-6 form-group">
                        <label>Aadhar Card</label>
                        <img id="cardShow" src="../../pics/aaadhar-card.png">
                        <img id="cardedit" src="../../pics/edit.png">
                        <input type="file" required id="cardUpload" name="cardUpload" onchange="cardPrev(this);" hidden>
                        <input type="hidden" id="cardhdn" name="cardhdn">
                    </div>
                    <div id="profilePic" class="col-md-6 form-group">
                        <label>Profile Pic</label>
                        <img id="picShow" src="../../pics/avatar.png">
                        <img id="edit" src="../../pics/edit.png">
                        <input type="file" required id="picUpload" name="picUpload" onchange="picPrev(this);" hidden>
                        <input type="hidden" id="hdn" name="hdn">
                    </div>
                    <br><br>
                    <div class="col-md-12 form-group">
                        <button type="submit" class="btn btn-info">Submit</button>
                        <button type="button" id="fetchBtn" class="btn btn-light">Fetch Profile</button>
                        <a href="HTMLdashboardWorker.php">
                            <button type="button" class="btn btn-outline-info">Home</button>
                        </a>
                    </div>
                </div>
            </form>
        </div>
        <div id="wait"></div>
    </center>
</body>
<script src="../js/profileWorker.js" type="text/javascript"></script>
<script src="../js/cities.js"></script>

</html>
