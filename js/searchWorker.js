var workerSearch = angular.module("workerSearchApp", []);
workerSearch.controller("searchCont", function ($scope, $http) {
    $scope.aryCat;
    $scope.aryCity;
    $scope.arySelected;

    $scope.fetchAllCat = function () {
        $("#wait").show();
        $http.get("../php/Citizen-FetchSearchCat.php").then(ok, notOk);

        function ok(resp) {
            //                    alert(JSON.stringify(resp.data));
            $scope.aryCat = resp.data;
            $scope.selObjCat = $scope.aryCat[1];
        }

        function notOk(resp) {
            alert(resp.data);
        }
    }
    $scope.fetchAllCity = function () {
        $http.get("../php/Citizen-FetchSearchCity.php").then(ok, notOk);

        function ok(resp) {
            //                    alert(JSON.stringify(resp.data));
            $scope.aryCity = resp.data;
            $scope.selObjCity = $scope.aryCity[1];
        }

        function notOk(resp) {
            alert(resp.data);
        }
    }
    $scope.fetchSelected = function () {
        $http.get("../php/Citizen-FetchSearchSel.php?category=" + $scope.selObjCat.category + "&city=" + $scope.selObjCity.city).then(sel, notSel);

        function sel(response) {
            $scope.arySelected = response.data;
        }

        function notSel(response) {
            alert(response.data);
        }
    }
    $scope.showDetails = function (index) {
        $scope.display = "Name: " + $scope.arySelected[index].name + " Number:" + $scope.arySelected[index].mobile + " Email:" + $scope.arySelected[index].email + " Firm/Shop Name:" + $scope.arySelected[index].firm + " Address:" + $scope.arySelected[index].address + " City:" + $scope.arySelected[index].city;
    }
});
