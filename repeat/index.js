var app = angular.module('myApp',[])
app.controller('myController',function($scope){
    employee=[
        {name:"Thuong",age:"22",gender:"Nam"},
        {name:"Hieu",age:"21",gender:"Nam"},
        {name:"Thanh",age:"21",gender:"Nu"}
    ]
    $scope.employee=employee;
})
app.controller('mycontroller1',function($scope){
    var user=[
        {name:"Thương",imformation:[
            {age:'22',address:"32 Võ Văn Hào",phoneNumber:"123456789"},
        ]},
        {name:"Hiếu",imformation:[
            {age:'21',address:"322 Võ Văn Hào",phoneNumber:"123456789"},
        ]},
        {name:"Anh",imformation:[
            {age:'22',address:"12 Võ Văn Hào",phoneNumber:"123456789"},
        ]}
    ]
    $scope.user=user;
})