var myApp=angular.module('myApp',[])
myApp.controller('myController',function($scope){
    var employees =[
        {name:'Thương',birthday: new Date("11/1/1999"),salary:12000,gender:'male',status:true},
        {name:'Thanh',birthday: new Date("12/1/1999"),salary:12000,gender:'female',status:true},
        {name:'Hiếu',birthday: new Date("1/13/1999"),salary:12000,gender:'male',status:false},
        {name:'V.Anh',birthday: new Date("1/13/1999"),salary:12000,gender:'male',status:true},
        {name:'Trung',birthday: new Date("1/13/3999"),salary:12000,gender:'male',status:false},
        {name:'Sự',birthday: new Date("1/14/1999"),salary:12000,gender:'male',status:true},
        {name:'Nam',birthday: new Date("1/20/1999"),salary:12000,gender:'male',status:false}
    ]
    $scope.employee=employees;
    $scope.sortColumn='name'
    $scope.reverse =false;
    $scope.search='';

    $scope.sortData=function(column){
        if($scope.sortColumn == column) 
        $scope.reverse = !$scope.reverse;
        else  $scope.sortColumn = column;
    }
    $scope.getSortClass=function(column){
        if($scope.sortColumn == column) 
            return $scope.reverse ? 'arrow-up':'arrow-dow';
        else
            return '';    
    }
})
myApp.filter('status',function(){
    return function(input){
        if(input == true) return 'Kích Hoạt'
        else return'Khóa'
    }
})