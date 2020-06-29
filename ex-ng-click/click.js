var myApp=angular.module('myApp',[])
myApp.controller('myController',function($scope){
// $scope.hienthi=true;
// $scope.giatri="Hôm nay không đi chơi nha";  
$scope.suatext=function(employee){
    employee.hienthi=!employee.hienthi;
}
var employee=[
    {name:"Thương",birthday: new Date("3/3/1999"),salary:"2000000",department:"phòng IT"},
    {name:"Thanh",birthday: new Date("3/3/1999"),salary:"3000000",department:"phòng Khoa"},
    {name:"Hiếu",birthday: new Date("3/3/1999"),salary:"4000000",department:"phòng Kế toán"},
    {name:"V.Anh",birthday: new Date("3/3/1999"),salary:"5000000",department:"phòng Y tế"},
]
$scope.employee=employee;

})

