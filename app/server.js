/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var app = angular.module('shopApp', []);

app.controller('shopController', function($scope, $http) {
  function getItem(){  
  $http.post("api/getItems.php").success(function(data){
        $scope.sanpham = data;
       });
  };
  
});
