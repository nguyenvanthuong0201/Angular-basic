var myApp=angular.module('myModule',[]);
myApp.controller('myController',function($scope)
{
    $scope.name="Thương"
    $scope.sayhello=function(){
        $scope.name="Hello "+$scope.name;
    }
});
myApp.controller('youController',function($scope){
    $scope.name="Hiếu"
});