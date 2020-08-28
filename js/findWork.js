var findWork = angular.module("workFinderApp", []);
findWork.controller("workFinderCont", function ($scope, $http) {

    $scope.sessionStart = function () {
        $scope.userId = '<?php echo $_SESSION["activeUser"];?>';
    }

    $scope.aryCat;
    $scope.aryCity;
    $scope.arySelected;
    $scope.aryUid;
    $scope.fetchAllCat = function () {
        $("#wait").show();
        $http.get("../php/Worker-FetchWorkCat.php").then(ok, notOk);

        function ok(resp) {
            $scope.aryCat = resp.data;
            $scope.selObjCat = $scope.aryCat[0];
        }

        function notOk(resp) {
            alert(resp.data);
        }
    }
    $scope.fetchAllCity = function () {
        $http.get("../php/Worker-FetchWorkCity.php").then(ok, notOk);

        function ok(resp) {
            $scope.aryCity = resp.data;
            $scope.selObjCity = $scope.aryCity[0];
        }

        function notOk(resp) {
            alert(resp.data);
        }
    }
    $scope.fetchSelected = function () {
        $http.get("../php/Worker-FetchWorkSel.php?category=" + $scope.selObjCat.category + "&city=" + $scope.selObjCity.city).then(sel, notSel);

        function sel(response) {
            $scope.arySelected = response.data;
        }

        function notSel(response) {
            alert(JSON.stringify(response.data));
        }
    }
    $scope.fetchUserDetails = function (index) {
        //        alert($scope.arySelected[index].uid);
        $http.get("../php/Worker-FetchWorkUid.php?uid=" + $scope.arySelected[index].uid).then(ok, notOk);

        function ok(response) {
            $scope.aryUid = response.data;
            //            alert(JSON.stringify(response.data));
        }

        function notOk(response) {
            alert(response.data);
        }
    }
});
