var myApp=angular.module('myApp',['ui.select', 'ngSanitize']);
myApp.controller('myController',function($scope,$http){
    $http.get('http://127.0.0.1:8081/angular_library/uiselect/index.php/dulieu/data')
    .then(function(res){
    console.log(res.data)
    $scope.itemArray=res.data;
    $scope.selected = { value: $scope.itemArray[0]};
    },function(ero){})
    $scope.laydulieu=function(){
        console.log($scope.selected['value']['id']);
        console.log("giá trị :"+ $scope.selected['value']['noidung']);
    }
})