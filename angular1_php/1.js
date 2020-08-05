var app = angular.module("myApp", ["ngRoute"]);
app.controller("myController", function ($scope) {});
app.config(function ($routeProvider, $locationProvider) {
	$routeProvider
		.when("/", { templateUrl: "chinh.html", controller: "controllerChinh" })
		.when("/xahoi", { templateUrl: "xahoi.html" })
		.when("/quangcao", { templateUrl: "quangcao.html" })
		.otherwise({
			redirectTo: "/",
		});
	$locationProvider.html5Mode(true);
});
app.controller("controllerChinh", function ($scope, $http) {
	$http
		.get("http://127.0.0.1:8081/angular1_php/index.php/welcome/laydulieu")
		.then(
			function (res) {
				$scope.dulieu = res.data;
				console.log(res.data)
			},
			function (res) {
				console.log(res.data);
			}
		);
});
