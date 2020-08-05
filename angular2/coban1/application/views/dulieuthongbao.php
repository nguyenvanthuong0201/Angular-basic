<!doctype html>
<html lang="en" ng-app="myApp">

<head>
  <title>Home</title>
  <!-- Required meta tags -->
  <base href="/angular2/coban1/">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <script src="/lib/bootstrap4/jquery/jquery.min.js"></script> -->
  <!-- Bootstrap CSS -->
  <!-- <link rel="stylesheet" href="http://127.0.0.1:8081/angular2/coban1//lib/bootstrap4/dist/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="http://127.0.0.1:8081/angular2/coban1//lib/angular/angular-material.min.css">
  <link rel="stylesheet" href="http://127.0.0.1:8081/angular2/coban1//1.css">

  <!-- ------------------------ -->
  <link href="http://127.0.0.1:8081/angular2/coban1//images/favicon.png" rel="icon">
  <link href="http://127.0.0.1:8081/angular2/coban1//images/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="http://127.0.0.1:8081/angular2/coban1//lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="http://127.0.0.1:8081/angular2/coban1//lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="http://127.0.0.1:8081/angular2/coban1//css/style.css" rel="stylesheet">
  <link href="http://127.0.0.1:8081/angular2/coban1//css/style-responsive.css" rel="stylesheet">
  <!-- ------------------------ -->

</head>
<body ng-controller="myController">
  <div ng-include="'general/header.html'"></div>
  <!--sidebar start-->
  <aside>
    <div id="sidebar" class="nav-collapse ">
      <!-- sidebar menu start-->
      <ul class="sidebar-menu" id="nav-accordion">
        <p class="centered">
          <a href="#"><img src="http://127.0.0.1:8081/angular2/coban1//images/thuong.jpg" class="img-circle" width="80"></a>
        </p>
        <h5 class="centered">Thương</h5>
        <li class="sub-menu">
          <a href="http://127.0.0.1:8081/angular2/coban1/index1.html" class="active">
            <i class="fa fa-th"></i>
            <span>Nhân viên</span></a>
          <ul class="sub">
            <li><a href="http://127.0.0.1:8081/angular2/coban1/index1.html">Danh sách nhân viên</a></li>
            <li><a href="addEmployee">Thêm nhân viên</a></li>
          </ul>
        </li>
        <li class="sub-menu">
          <a href="calendar">
            <i class="fa fa-calendar"></i>
            <span>Lịch</span></a>
        </li>
        <li class="sub-menu">
          <a href="chatRoom">
            <i class="fa fa-comments-o"></i>
            <span> Chat Room</a>
          </span>
          </a>
        </li>
        <li class="sub-menu">
          <a href="javascript:;">
            <i class="fa fa-desktop"></i>
            <span>Cài Đặt</span>
          </a>
          <ul class="sub">
            <li><a href="changePassword">Đổi mật khẩu</a></li>
            <li><a href="#">Khác</a></li>
          </ul>
        </li>
      </ul>
      <!-- sidebar menu end-->
    </div>
  </aside>
  <div ng-view></div>
  <!--sidebar end-->
  <!-- <div ng-include="'general/footer.html'"></div> -->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="http://127.0.0.1:8081/angular2/coban1//lib/angular/angular.min.js"></script> 
  <script src="http://127.0.0.1:8081/angular2/coban1//lib/angular/angular-animate.min.js"></script>
  <script src="http://127.0.0.1:8081/angular2/coban1//lib/angular/angular-route.min.js"></script>
  <script src="http://127.0.0.1:8081/angular2/coban1//lib/angular/angular-aria.min.js"></script>
  <script src="http://127.0.0.1:8081/angular2/coban1//lib/angular/angular-messages.min.js"></script>
  <script src="http://127.0.0.1:8081/angular2/coban1//lib/angular/angular-material.min.js"></script>

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.0/angular.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.0/angular-animate.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.0/angular-route.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.0/angular-aria.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.0/angular-messages.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.22/angular-material.min.js"></script> -->
  
  <script src="http://127.0.0.1:8081/angular2/coban1//1.js"></script>


  <script src="http://127.0.0.1:8081/angular2/coban1//lib/jquery/jquery.min.js"></script>
  <script src="http://127.0.0.1:8081/angular2/coban1//lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="http://127.0.0.1:8081/angular2/coban1//lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="http://127.0.0.1:8081/angular2/coban1//lib/jquery.scrollTo.min.js"></script>
  <script src="http://127.0.0.1:8081/angular2/coban1//lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="http://127.0.0.1:8081/angular2/coban1//lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="http://127.0.0.1:8081/angular2/coban1//lib/form-validation-script.js"></script>
  <script src="http://127.0.0.1:8081/angular2/coban1//js/data.js"></script>
</body>

</html>