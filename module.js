var myApp=angular.module('myModule', [] );
myApp.controller('myController',function ($scope) {
    var employee ={
        name:"Thương",
        age:"22",
        sex:"Nam"
    }
    $scope.employee=employee;
});