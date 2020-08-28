<?php session_start(); 
include_once("header.html");
if(isset($_SESSION["activeUser"])!=true)
    header("location:index.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Worker Dashboard</title>
    <link href="../css/dashboardWorker.css" rel="stylesheet">
</head>

<body ng-app="workerApp" ng-controller="workerCont" ng-init="userId='<?php echo $_SESSION["activeUser"]; ?>'">
    <center>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
                    <li class="nav-item active mr-4"><a class="nav-link text-light">Welcome :
                            <?php echo $_SESSION['activeUser']; ?></a>
                    </li>
                    <li class="nav-item active" id="top">
                        <div class="btn-group">
                            <button type="button" id="user" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-cog"></i>
                                Account Settings
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="HTMLprofileWorker.php" class="dropdown-item bg-info text-white"><i class="fa fa-user-circle"></i>Profile</a>
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#changePwd"><i class="fa fa-key"></i>Change Password</button>
                                <a href="../php/logout.php" class="dropdown-item bg-danger text-white"><i class="fa fa-sign-out"></i>LOGOUT</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <br><br>
        <div class="row">
            <div class="col-1"></div>
            <div class="card col-sm-4" id="ratings">
                <img src="../../pics/feedback-hub.png" class="card-img-top">
                <div class="card-title">
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#rateModal">Request rating</button>
                </div>
            </div>
            <div class="col-2"></div>
            <div class="card col-sm-4" id="findWork">
                <br>
                <img src="../../pics/findJob.png" class="card-img-top">
                <div class="card-body">
                    <a href="HTMLfindWork.php"><button type="button" class="btn btn-light">Find Work</button></a>
                </div>
            </div>
            <div class="col-1"></div>
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
        <!--Request Rating Modal-->
        <div class="modal fade" id="rateModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-info">
                        <h5 class="modal-title">Request Rating</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span>&times;</span>
                        </button>
                    </div>
                    <form id="fill">
                        <div class="modal-body">
                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <label>Citizen Id</label>
                                    <input type="text" class="input-group" required name="uid" id="uid">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label>Worker Id</label>
                                    <input type="text" class="form-control" readonly value='<?php echo $_SESSION["activeUser"]; ?>' name="wid" id="wid">
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer bg-info">
                        <span id="dis">*</span>
                        <button type="submit" class="btn btn-light" id="submitBtn">Submit</button>
                    </div>
                </div>
            </div>
        </div>
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
                                <input type="text" class="form-control" ng-model="crPwd" required>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>New password</label>
                                <input type="password" class="form-control" ng-model="newPwd" required>
                                <span id="errNewPwd">*</span>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Confirm new password</label>
                                <input type="password" class="form-control" ng-model="newCnfPwd" required>
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
    </center>
    <script type="text/javascript">
        $("#submitBtn").click(function() {
            var data = $("#fill").serialize();
            var url = "../php/Worker-RatingsProcess.php?" + data;
            $.get(url, function(res) {
                $("#dis").html(res);
            });
        });
        var worker = angular.module("workerApp", []);
        worker.controller("workerCont", function($scope, $http) {
            $scope.crPwd;
            $scope.newPwd;
            $scope.newCnfPwd;
            $scope.changePwd = function() {
                if ($scope.newPwd == $scope.newCnfPwd) {
                    $http.get("../php/changePwd.php?uid=" + $scope.userId + "&pwd=" + $scope.newPwd).then(ok, notOk);

                    function ok(resp) {
                        alert("done");
                        location.href = "HTMLdashboardWorker.php";
                    }

                    function notOk(resp) {
                        alert(JSON.stringify(resp.data));
                    }
                } else alert("Password doesnot match");
            }
        });

    </script>
</body>

</html>
