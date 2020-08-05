var myApp = angular.module("myApp", ['ngMaterial']);
myApp.controller("myController", function ($scope, $http, $mdToast) {
	// $scope.hienthi=true;
	// $scope.giatri="Hôm nay không đi chơi nha";
	$scope.suatext = function (employee) {
		employee.hienthi = !employee.hienthi;
	};
	///// search :angular http w3schools
	$http
		.get("http://127.0.0.1:8081/angular_php/index.php/welcome/laydulieu")
		.then(function (res) {
			console.log(res.data);
			$scope.employee = res.data;
		});

	// var employee=[
	//     {name:"Thương",birthday: new Date("3/3/1999"),salary:"2000000",department:"phòng IT"},
	//     {name:"Thanh",birthday: new Date("3/3/1999"),salary:"3000000",department:"phòng Khoa"},
	//     {name:"Hiếu",birthday: new Date("3/3/1999"),salary:"4000000",department:"phòng Kế toán"},
	//     {name:"V.Anh",birthday: new Date("3/3/1999"),salary:"5000000",department:"phòng Y tế"},
	// ]
	// $scope.employee=employee;
	$scope.showToast1 = function () {
		$mdToast.show(
			$mdToast.simple().textContent("Lưu thành công").hideDelay(3000).position('top right'))
	};
	$scope.showToast2 = function () {
		$mdToast.show(
			$mdToast.simple().textContent("Lưu thất bại ").hideDelay(3000).position('top right')
		);
	};
	$scope.luutext = function (employee) {
		employee.hienthi = !employee.hienhthi;

		///Sử dụng hàm post để kết nối API;
		///https://docs.angularjs.org/api/ng/service/$http
		var data = $.param({
			id: employee.id,
			name: employee.name,
			birthday: employee.birthday,
			salary: employee.salary,
			department: employee.department,
		});
		console.log(data)
		var config = {
			headers: {
				"content-type": "application/x-www-form-urlencoded;charset=UTF-8",
			},
			// headers:{
			// 	'content-type': 'application/x-www-form-urlencoded;charset=UTF-8'
			// 	}
		};

		$http
			.post(
				"http://127.0.0.1:8081/angular_php/index.php/welcome/luudulieu",
				data,
				config
			)
			.then(
				function (res) {
					console.log(res.data);
					$scope.showToast1();
				},
				function (res) {
					console.log(res.data);
					$scope.showToast1();
				}
			);
	};
});

