<?php session_start();
include_once("header.html");
if(isset($_SESSION["activeUser"])!=true)
    header("location:index.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Citizen Dashboard</title>
    <link href="../css/dashboardCitizen.css" rel="stylesheet">
</head>

<body ng-app="citizenApp" ng-controller="citizenCont" ng-init="userId='<?php echo $_SESSION["activeUser"]; ?>'">
    <center>
        <header>
            <div class=" banner">
                <img src="../../pics/bg12.jpg" width=100% height="100px">
            </div>
        </header>
        <!--Navbar-->
        <nav id="top" class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand">
                <img src="../../pics/logo%20(1).png">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item mr-auto"><a class="nav-link text-light">Home</a></li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item mr-4 text-white">Welcome : <?php echo $_SESSION["activeUser"]?>
                    </li>
                    <li class="nav-item active">
                        <div class="btn-group">
                            <button type="button" id="user" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-cog"></i>
                                Account Settings
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="HTMLprofileCitizen.php" class="dropdown-item bg-info text-white"><i class="fa fa-user-circle"></i>Profile</a>
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#changePwd"><i class="fa fa-key"></i>Change Password</button>
                                <a href="../php/logout.php" class="dropdown-item bg-danger text-white"><i class="fa fa-sign-out"></i>LOGOUT</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <br><br>
        <!--Body-->
        <div class="row">
            <div class="col-1"></div>
            <div class="card col-sm-4" id="postReq">
                <br>
                <img src="../../pics/maintenance.png" class="card-img-top">
                <div class="card-title">
                    <h4>What work you want to be done</h4>
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#requestsModal">Post Requirement</button>
                </div>
            </div>
            <div class="col-2"></div>
            <div class="card col-sm-4" id="searchWorker">
                <img src="../../pics/searchWorker.png" class="card-img-top">
                <div class="card-title">
                    <h4>Find worker near you</h4>
                </div>
                <div class="card-body">
                    <a href="HTMLsearchWorker.php" class="card-text">
                        <button type="button" class="btn btn-light">Search Worker</button>
                    </a>
                </div>
            </div>
            <div class="col-1"></div><br>
            <div class="col-1"></div>
            <div class="card col-sm-4" id="reqManager">
                <img src="../../pics/Manager.png" style="height: 60%; width: 50%;" class="card-img-top">
                <div class="card-title">
                    <h4>Manage your requests Here</h4>
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#requestsManager">Request Manager</button>
                </div>
            </div>
            <div class="col-2"></div>
            <div class="card col-sm-4" id="rateWorker">
                <img src="../../pics/review.png" class="card-img-top">
                <div class="card-title">
                    <h4>Rate The Worker</h4>
                </div>
                <div class="card-body">
                    <a href="HTMLRateWorker.php"><button type="button" class="btn btn-light">Rate</button></a>
                </div>
            </div>
        </div>
        <br>
        <!--Footer-->
        <footer class="bg-dark">
            <div class="footer-main">
                <div class="container-fluid p-4">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="footer-logo">
                                <img src="../../pics/logo%20(1).png" width="20%">
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam eius, in, similique architecto neque provident tempora modi quaerat, quae ullam sit repudiandae delectus reiciendis facilis enim fugit distinctio quasi maiores!</p>
                        </div>
                        <div class="col-md-4">
                            <h2>Useful links</h2>
                            <div class="row" id="usefulLinks">
                                <div class="col-6">
                                    <a href="#" class="nav-link">About Us</a>
                                    <a href="#" class="nav-link">Partners</a>
                                    <a href="#" class="nav-link">FAQ</a>
                                </div>
                                <div class="col-6">
                                    <a href="#" class="nav-link">Blog</a>
                                    <a href="#" class="nav-link">Reviews</a>
                                    <a href="#" class="nav-link">Terms of Use</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <h2 id="contact warning">Contact Us</h2>
                            <p>402, St. No. 18,Ajit Road, Bathinda, Punjab, India - 151001</p>
                            <div class="social-media">
                                <h4>Follow Us</h4>
                                <i class="fa fa-facebook"></i>
                                <i class="fa fa-twitter"></i>
                                <i class="fa fa-reddit"></i>
                                <i class="fa fa-instagram"></i>
                            </div>
                            <div class="feedback">
                                <button type="button" class="btn btn-lg btn-warning" data-toggle="modal" data-target="#feedback">
                                    <h4>Feedback</h4>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="footer-bottom p-2">
                <!--
                <div class="navbar-nav">
                    <a class="mr-auto">Help Center</a>
                    <a class="mr-auto">Sitemap</a>
                    <a class="mr-auto">Privacy policy</a>
                </div>
-->
                <p>Copyright &copy; 2020 - Developed By irOzen -BCE. All Rights Reserved.</p>
            </div>
        </footer>
        <!--Change Password-->
        <div class="modal fade" id="changePwd">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-black-50">Change password</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="col-sm-12 form-group">
                                <label>Current password</label>
                                <input type="text" class="form-control" ng-model="crPwd">
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>New password</label>
                                <input type="password" class="form-control" ng-model="newPwd">
                                <span id="errNewPwd">*</span>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Confirm new password</label>
                                <input type="password" class="form-control" ng-model="newCnfPwd">
                                <span id="errCnfPwd">*</span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success" ng-click="changePwd();">Change</button>
                    </div>
                </div>
            </div>
        </div>
        <!--POST Requests Modal-->
        <div class="modal fade" id="requestsModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-dark">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span>&times;</span>
                        </button>
                    </div>
                    <form id="fill">
                        <div class="modal-body">
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label>Account Id</label>
                                    <input type="text" class="form-control" readonly name="uid" id="uid" ng-model="userId">
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
                                <div class="col-md-12 form-group">
                                    <label>Problem</label>
                                    <input type="text" class="form-control" name="problem" id="problem">
                                </div>
                                <div class="col-md-8 form-group">
                                    <label>Location</label>
                                    <input type="text" class="form-control" name="location" id="location">
                                </div>
                                <div class="col-md-4 form-group">
                                    <label>City</label>
                                    <input type="text" class="form-control" name="city" id="city">
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer bg-dark">
                        <span id="dis">*</span>
                        <button type="submit" class="btn btn-light" id="submitBtn">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <!--Manager Modal-->
        <div class="modal fade" id="requestsManager">
            <div class="modal-dialog modal-xl" id="managerModal">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="col-sm-6 form-group">
                                <input type="text" class="form-control" readonly ng-model="userId">
                            </div>
                            <div class="col-sm-6 form-group">
                                <button class="btn btn-light" ng-click="fetchSel();">Fetch Request</button>
                            </div>
                            <div class="col-sm-12 form-group">
                                <table class="table-bordered table-responsive-lg">
                                    <tr>
                                        <th>Sr.No.</th>
                                        <th ng-click="doSort('category')">Category*</th>
                                        <th ng-click="doSort('problem')">Problem*</th>
                                        <th>Location</th>
                                        <th ng-click="doSort('city')">City*</th>
                                        <th ng-click="doSort('dop')">Valid till</th>
                                        <th>Remove</th>
                                    </tr>
                                    <tr ng-repeat="obj in requestsAry | orderBy:colName ">
                                        <td>{{$index+1}}</td>
                                        <td>{{obj.category}}</td>
                                        <td>{{obj.problem}}</td>
                                        <td>{{obj.location}}</td>
                                        <td>{{obj.city}}</td>
                                        <td>{{obj.dop}} </td>
                                        <td>
                                            <button class="btn btn-danger" ng-click="doDelete($index,obj.rid);">Delete</button>
                                        </td>
                                    </tr>
                                </table>
                                <h5>*Click to sort accordingly</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center>
    <script src="../js/dashCitizen.js" type="text/javascript"></script>
</body>

</html>
