<?php session_start();
include_once("header.html");
if(isset($_SESSION["activeUser"])!=true)
    header("location:index.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="../bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-size: 20px;
        }

        .container-sm {
            width: 850px;
        }

    </style>
</head>

<body ng-app="workFinderApp" ng-controller="workFinderCont" ng-init="fetchAllCat(); fetchAllCity(); sessionStart();">
    <center>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item mr-auto"><a href="HTMLdashboardWorker.php" class="nav-link text-light">DashBoard</a></li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#Modal">Profile Settings</button></li>
                </ul>
            </div>
        </nav>
        <h2>Find Work in your Area</h2><br>
        <div class="container-sm">
            <div class="form-row">
                <div class="col-sm-12">
                    <label>Search Category</label>
                    <select class="custom-select" ng-model="selObjCat" ng-options="obj.category for obj in aryCat"></select></div>
                <div class="col-sm-12">
                    <label>Search City</label>
                    <select class="custom-select" ng-model="selObjCity" ng-options="obj.city for obj in aryCity"></select>
                </div>
                <div class="col-sm-12">
                    <button class="btn btn-outline-secondary" ng-click="fetchSelected();">Find</button>
                </div>
                <div class="col-md-4" ng-repeat="obj in arySelected">
                    <div class="card" style="margin-top:20px;max-width:80%;">
                        <div class="card-body">
                            <h4 class="card-title">Task: {{obj.category}}
                            </h4>
                            <p class="card-title">Problem: {{obj.problem}}
                            </p>
                            <p class="card-text">Location: {{obj.location}}
                            </p>
                            <p class="card-text">Post Expires: {{obj.dop}}
                            </p>
                            <!--                            $NewDate=Date('y:m:d', strtotime('+10 days'));-->
                            <button class="btn btn-outline-dark" ng-click="fetchUserDetails($index);" data-toggle="modal" data-target="#Details">Contact Details</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--DetailsModal-->
        <div class="modal fade" id="Details">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">User Details</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;
                            </span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table border="1" max-width="90%">
                            <tr>
                                <td>Name</td>
                                <td>{{aryUid[0].name}}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{aryUid[0].email}}</td>
                            </tr>
                            <tr>
                                <td>Mobile Number</td>
                                <td>{{aryUid[0].mobile}}</td>
                            </tr>
                            <tr>
                                <td>City</td>
                                <td>{{aryUid[0].city}}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-warning">Contact</button>
                    </div>
                </div>
            </div>
        </div>
    </center>
    <script src="../js/findWork.js" type="text/javascript"></script>
</body>

</html>
