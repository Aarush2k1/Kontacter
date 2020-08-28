 $(document).ready(function () {
     $("#submitBtn").click(function () {
         var data = $("#fill").serialize();
         var url = "../php/Citizen-postReqProcess.php?" + data;
         $.get(url, function (res) {
             $("#dis").html(res);
         });
     });
 });
 var citizen = angular.module("citizenApp", []);
 citizen.controller("citizenCont", function ($scope, $http) {

     $scope.crPwd;
     $scope.newPwd;
     $scope.newCnfPwd;
     $scope.changePwd = function () {
         if ($scope.newPwd == $scope.newCnfPwd) {
             $http.get("../php/changePwd.php?uid=" + $scope.userId + "&pwd=" + $scope.newPwd).then(ok, notOk);

             function ok(resp) {
                 alert("done");
                 location.href = "HTMLdashboardCitizen.php";
             }

             function notOk(resp) {
                 alert(JSON.stringify(resp.data));
             }
         } else alert("Pwd not matchs");
     }

     $scope.requestsAry;
     $scope.fetchSel = function () {
         $http.get("../php/Citizen-FetchPostReq.php?uid=" + $scope.userId).then(ok, notOk);

         function ok(response) {
             $scope.requestsAry = response.data;
         }

         function notOk(response) {
             alert(response.data);
         }
     }
     $scope.doSort = function (col) {
         $scope.colName = col;
     }
     $scope.doDelete = function (index, rid) {
         $http.get("../php/Citizen-PostReqDelete.php?rid=" + rid).then(ok, notOk);

         function ok(response) {
             $scope.requestsAry.splice(index, 1);
         }

         function notOk(response) {
             alert(response.data);
         }
     }
 });
