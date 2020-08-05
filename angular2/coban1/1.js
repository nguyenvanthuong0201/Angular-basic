var myApp = angular.module("myApp", ["ngRoute", "ngMaterial"]);
myApp.controller("myController", function ($scope) {
	$scope.goLogin = function () {
		$(location).attr(
			"href",
			"http://127.0.0.1:8081/angular2/coban1/views/login.html"
		);
	};
	$scope.sua = function (employee) {
		employee.show = !employee.show;
	};
	$scope.khongsua = function (employee) {
		employee.show = !employee.show;
	};
});
myApp.config(function ($routeProvider, $locationProvider) {
	$routeProvider
		.when("/", { templateUrl: "views/home_employee.html", controller: "home" })
		.when("/changePassword", { templateUrl: "views/change_password.html" })
		.when("/calendar", { templateUrl: "views/calendar.html" })
		.when("/chatRoom", { templateUrl: "views/chat_room.html" })
		.when("/addEmployee", {
			templateUrl: "views/add_employee.html",
			controller: "addUser",
		})
		.otherwise({
			redirectTo: "/",
		});
	$locationProvider.html5Mode(true);
});

// xem và sửa nhân viên 
myApp.controller("home", function ($scope, $http, $mdToast) {
	($scope.sortColumn = "name"), ($scope.reverse = false);

	$scope.sortData = function (column) {
		if ($scope.sortColumn == column) $scope.reverse = !$scope.reverse;
		else $scope.sortColumn = column;
	};
	$scope.getSortClass = function (column) {
		if ($scope.sortColumn == column)
			return $scope.reverse ? "arrow-up" : "arrow-dow";
		else return "";
	};

	$scope.showToast1 = function () {
		$mdToast.show(
			$mdToast
				.simple()
				.textContent("Lưu thành công")
				.hideDelay(3000)
				.position("bottom right")
		);
	};
	$http
		.get("http://127.0.0.1:8081/angular2/coban1/index.php/welcome/account")
		.then(function (res) {
			console.log(res.data);
			$scope.hienthi = res.data;
		});
	$scope.luusua = function (employee) {
		employee.show = !employee.show;

		var data = $.param({
			id: employee.id,
			username: employee.username,
			email: employee.email,
			role: employee.role,
			password: employee.password,
		});

		console.log(data);
		var config = {
			headers: {
				"content-type": "application/x-www-form-urlencoded;charset=UTF-8",
			},
		};
		$http
			.post(
				"http://127.0.0.1:8081/angular2/coban1/index.php/welcome/luuAccount",
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

// Thêm nhân viên 
myApp.controller("addUser", function ($scope, $http, $mdToast) {
	$scope.adduser = function () {

    $scope.showToast1 = function () {
      $mdToast.show(
        $mdToast
          .simple()
          .textContent("Thêm nhân viên thành công !")
          .hideDelay(3000)
          .position("bottom right")
      );
    };

		var dulieu = $.param({
			username: $scope.username,
			email: $scope.email,
			password: $scope.password,
			role: $scope.role,
		});
		console.log(dulieu);
		var config = {
			headers: {
				"content-type": "application/x-www-form-urlencoded;charset=UTF-8",
			},
		};
		$http
			.post(
				"http://127.0.0.1:8081/angular2/coban1/index.php/welcome/addAccount",
				dulieu,
				config
			)
			.then(
				function (res) {
          console.log(res.data);
          $scope.showToast1();
				},
				function (res) {
					console.log(res.data);
				}
			);
	};
});
