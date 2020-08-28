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
    <link href="../css/rateWorker.css" rel="stylesheet">
</head>

<body ng-app="rateWorkerApp" ng-controller="rateCont" ng-init=" sessionStart(); fetchRatings();">
    <center>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item mr-auto"><a href="HTMLdashboardCitizen.php" class="nav-link text-light">Home</a></li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item mr-4 text-white">
                        <label>Logged in as:</label><?php echo $_SESSION["activeUser"]; ?>
                    </li>
                    <li class="nav-item active">
                        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#Modal">Profile Settings</button>
                    </li>
                </ul>
            </div>
        </nav>
        <h2>Rate the workers</h2>
        <h3>Ratings Request by workers</h3>
        <br>
        <div class="container-sm">
            <div class="form-row">
                <div class="col-sm-12 form-group">
                    <table class="table table-bordered" width="95%">
                        <tr>
                            <th>Sr.No.*</th>
                            <th>Worker ID*</th>
                            <th>Rate</th>
                            <th>Post</th>
                        </tr>
                        <tr ng-repeat="obj in rateArySel | orderBy:colName ">
                            <td>{{$index+1}}</td>
                            <td>{{obj.wid}}</td>
                            <td>
                                <div class="stars">
                                    <input type="radio" class="star star-5" id="star-5-{{obj.rid}}" name="{{obj.rid}}" value="5"><label class="star star-5" for="star-5-{{obj.rid}}"></label>
                                    <input type="radio" class="star star-4" id="star-4-{{obj.rid}}" name="{{obj.rid}}" value="4"><label class="star star-4" for="star-4-{{obj.rid}}"></label>
                                    <input type="radio" class="star star-3" id="star-3-{{obj.rid}}" name="{{obj.rid}}" value="3"><label class="star star-3" for="star-3-{{obj.rid}}"></label>
                                    <input type="radio" class="star star-2" id="star-2-{{obj.rid}}" name="{{obj.rid}}" value="2"><label class="star star-2" for="star-2-{{obj.rid}}"></label>
                                    <input type="radio" class="star star-1" id="star-1-{{obj.rid}}" name="{{obj.rid}}" value="1"><label class="star star-1" for="star-1-{{obj.rid}}"></label>
                                </div>
                            </td>
                            <td><button class="btn btn-light" ng-click='rate(obj.rid,$index);'>Done</button></td>
                        </tr>
                    </table>
                    <h5>*Click to sort accordingly</h5>
                </div>
            </div>
        </div>
    </center>
    <script type="text/javascript">
        var rateWorker = angular.module("rateWorkerApp", []);
        rateWorker.controller("rateCont", function($scope, $http) {
            $scope.sessionStart = function() {
                $scope.userId = "<?php echo $_SESSION["activeUser"];?>";
            }
            $scope.rateArySel;
            $scope.fetchRatings = function() {
                $http.get("../php/Citizen-FetchRatingReq.php?uid=" + $scope.userId).then(ok, notOk);

                function ok(response) {
                    $scope.rateArySel = response.data;
                }

                function notOk(response) {
                    alert(response.data);
                }
            }
            $scope.rate = function(rid, index) {
                var ary = document.getElementsByName(rid);
                for (i = 0; i < ary.length; i++) {
                    if (ary[i].checked) {
                        $scope.num = ary[i].value;
                        $http.get("../php/Citizen-UpdateRating.php?wid=" + $scope.rateArySel[index].wid + "&value=" + $scope.num + "&rid=" + rid).then(ok, notOk);

                        function ok(response) {

                            if (JSON.stringify(response.data) == "") {
                                alert("Success");
                            }
                            $scope.rateArySel.splice(index, 1);
                        }

                        function notOk(response) {
                            alert(response.data);
                        }
                    }
                }
            }

        });

    </script>
    <script src="../js/rateWorker.js" type="text/javascript"></script>
</body>

</html>
