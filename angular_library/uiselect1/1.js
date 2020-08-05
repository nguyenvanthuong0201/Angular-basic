var myApp=angular.module('myApp',['ui.select', 'ngSanitize']);
myApp.controller('myController',function($scope){
    $scope.itemArray = [
        {id: 1, name: 'first'},
        {id: 2, name: 'second'},
        {id: 3, name: 'third'},
        {id: 4, name: 'fourth'},
        {id: 5, name: 'fifth'},
    ];

    $scope.selected = { value: $scope.itemArray[0] };
    $scope.laydulieu=function(){
        console.log($scope.selected['value']['id']);
        console.log("giá trị :"+ $scope.selected['value']['name']);
    }
})