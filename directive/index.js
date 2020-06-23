var myApp= angular.module('myModule',[])
myApp.controller('myController',function($scope){
    // $scope.name="Thương"
})
myApp.directive("directiveName",function(){
    return{
        // template: "Heeellllooo mọi người nè"
        templateUrl: "/directive/body.html"
        
    }
})