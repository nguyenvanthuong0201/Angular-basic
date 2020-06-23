var myApp = angular.module('myApp',[])
myApp.controller('myController',function($scope){
    var table=[
        {name:"Thương",likes:0,minus:0,dislikes:0},
        {name:"V.Anh",likes:0,minus:0,dislikes:0},
        {name:"Hiếu",likes:0,minus:0,dislikes:0},
        {name:"Thanh",likes:0,minus:0,dislikes:0}
    ]
    $scope.table=table;
    $scope.uplikes=function(tab){
       tab.likes++; 
       tab.minus=tab.likes-tab.dislikes;
    }
    $scope.downlikes=function(tab){
        tab.dislikes++; 
       tab.minus=tab.likes-tab.dislikes;
     }
});