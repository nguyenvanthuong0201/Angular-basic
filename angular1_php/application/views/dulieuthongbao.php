<!doctype html>
<html lang="en" ng-app="myApp">
  <head>
	<title>Thông Báo</title>
	<base href="/angular_php/index.php/">
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.22/angular-material.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/1.css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body ng-controller="myController">
	<div>
		<div class="jumbotron text-center">
			<h1 class="display-3">hàm cơ bản cho singer page</h1>
			<hr class="my-2">
			<p class="lead">
				<nav class="navbar navbar-expand-sm navbar-light bg-light">
					<button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="collapsibleNavId">
						<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
							<li class="nav-item">
								<a class="nav-link" href="http://127.0.0.1:8081/angular1_php/index.php/thongbao.php">Mail chính</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="xahoi">Mail xã hội</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="quangcao">Mail quảng cáo</a>
							</li>
						</ul>
					</div>
				</nav>
			</p>
		</div>
	</div>  
	<div class="container">
		<div ng-view></div>
	</div>
    <!-- Angular Material Dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.0/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.0/angular-animate.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.0/angular-route.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.0/angular-aria.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.0/angular-messages.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.22/angular-material.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.0/angular.min.js"></script>
    <script src="<?php echo base_url(); ?>1.js"></script>   
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>