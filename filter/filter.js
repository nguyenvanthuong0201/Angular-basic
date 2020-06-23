var myApp=angular.module('myModule', [])
myApp.controller('myController',function($scope){
    var employees = [
        {name:'Thương',birthday: new Date('02/01/1998'),salary:140000,gender:'male',home:true},
        {name:"Thanh",birthday: new Date("02/01/1998"),salary:150000,gender:'male',home:true},
        {name:"Hiếu",birthday: new Date("02/01/1998"),salary:160000,gender:'male',home:true},
        {name:"V.Anh",birthday: new Date("02/01/1998"),salary:170000,gender:'female',home:false},
        {name:"Sự",birthday: new Date("02/01/1998"),salary:180000,gender:'female',home:true},
        {name:"Tin",birthday: new Date("02/01/1998"),salary:120000,gender:'female',home:true},
        {name:"Truong",birthday: new Date("02/01/1998"),salary:110000,gender:'female',home:false},
        {name:"Long",birthday: new Date("02/01/1998"),salary:120000,gender:'female',home:true},
        {name:"Bình",birthday: new Date("02/01/1998"),salary:140000,gender:'female',home:true},
        {name:"Phước",birthday: new Date("02/01/1998"),salary:150000,gender:'female',home:false},
        {name:"Ngã",birthday: new Date("02/01/1998"),salary:130000,gender:'male',home:true},
        {name:"Tư",birthday: new Date("02/01/1998"),salary:160000,gender:'male',home:false},
        {name:"Đường",birthday: new Date("02/01/1998"),salary:140000,gender:'female',home:true}
     ]
    $scope.employee=employees;
    $scope.limitrow=3;
    $scope.sort='name'
});
myApp.filter('status',function(){
    return function (input) {
        if(input == true)
            return 'kích hoạt';
        else
            return 'Khóa';
    }
});