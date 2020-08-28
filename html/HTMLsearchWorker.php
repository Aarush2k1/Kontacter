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
    <style>
        body {
            font-size: 20px;
        }

        .container-sm {
            width: 850px;
        }

    </style>
</head>

<body ng-app="workerSearchApp" ng-controller="searchCont" ng-init="fetchAllCat(); fetchAllCity();">
    <center>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item mr-auto"><a href="HTMLdashboardCitizen.php" class="nav-link text-light">Home</a></li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item active mr-4 text-white">
                        Logged in as:<?php echo $_SESSION["activeUser"];?>
                    </li>
                    <li class="nav-item active">
                        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#Modal">Profile Settings</button>
                    </li>
                </ul>
            </div>
        </nav>
        <h2>Search Workers in your Area</h2>
        <div class="container-sm">
            <div class="form-row">
                <div class="col-sm-12">
                    <label>Search Category</label>
                    <select ng-model="selObjCat" ng-options="obj.category for obj in aryCat"></select></div>
                <div class="col-sm-12">
                    <label>Search City</label>
                    <select ng-model="selObjCity" ng-options="obj.city for obj in aryCity"></select>
                </div>
                <div class="col-sm-12">
                    <button class="btn btn-outline-secondary" ng-click="fetchSelected();">Search</button>
                </div>
                <div class="col-md-4" ng-repeat="obj in arySelected">
                    <div class="card" style="margin-top:20px;">
                        <img src="../php/uploads/{{obj.profilePic}}" width="100" height="100">
                        <div class="card-body">
                            <h4 class="card-title">Name: {{obj.name}}
                            </h4>
                            <h4 class="card-text">Mobile: {{obj.mobile}}
                            </h4>
                            <p class="card-text">Experience: {{obj.exp}}</p>
                            <p class="card-text">Specialisation: {{obj.specs}}</p>
                            <button class="btn btn-outline-success" ng-click="showDetails($index);" data-toggle="modal" data-target="#Details">Details</button>
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
                        <h3 class="modal-title">Details</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;
                            </span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="..." width="100" height="100">
                        <textarea row="50" cols="50" disabled ng-model="display"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-warning">Contact</button>
                    </div>
                </div>
            </div>
        </div>
    </center>
    <script src="../js/searchWorker.js" type="text/javascript"></script>
</body>

</html>
