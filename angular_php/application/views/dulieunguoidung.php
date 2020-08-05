<!doctype html>
<html lang="en" ng-app="myApp">

<head>
    <title>Ng-Click</title>

    <!-- link của angular_material -->
    <!-- <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.22/angular-material.min.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>    
      <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.min.js"></script>
      <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-aria.min.js"></script>
      <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-messages.min.js"></script>
      <script src = "https://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.js"></script>
      <link rel = "stylesheet" href = "https://fonts.googleapis.com/icon?family=Material+Icons"> -->

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.22/angular-material.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/click.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body ng-controller="myController">
    <div class="jumbotron text-center">
        <h1 class="display-3">Jumbo heading</h1>
        <p class="lead">sử dụng để chỉnh simple page</p>
    </div>
    <div ng-show="false">
    <md-button ng-click = "showToast1()">Show Simple Alert</md-button>
    <md-button ng-click = "showToast2()">Show Simple Alert</md-button>
    </div>
    <div class="container" ng-repeat="employee in employee" ng-init="employee.hienthi=true">
        <div class="row" ng-show="employee.hienthi">
            <div class="col-sm-12">
                <div class="card">
                    <h5 class="card-header">Name :{{employee.name|uppercase}} <button class="float-right"><i class="fa fa-pencil" ng-click="suatext(employee)"></i></button></h5>
                    <div class="card-body">
                        <p class="card-text"><b>Năm sinh:</b> {{employee.birthday}}</p>
                        <p class="card-text"><b>Lương: </b> {{employee.salary|currency:'VNĐ'}}</p>
                        <p class="card-text"> <b>Phòng ban:</b> {{employee.department}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" ng-show="!employee.hienthi">
            <div class="col-sm-12">
                <div class="card">
                <div id="toaster"></div>
                    <h5 class="card-header">Name: <input class="text-uppercase" type="text" name="" id="" value="{{employee.name |uppercase}}" ng-model="employee.name"></h5>
                    <div class="card-body">
                        <p class="card-text" ><b></b><input type="hidden" name="" id="" value="{{employee.id}}" ng-model="employee.id"></p>
                        <p class="card-text"><b>Năm sinh:</b><input type="text" name="" id="" value="{{employee.birthday}}" ng-model="employee.birthday"></p>
                        <p class="card-text"><b>Lương: </b><input type="text" name="" id="" value="{{employee.salary|currency:'VNĐ'}}" ng-model="employee.salary"></p>
                        <p class="card-text"> <b>Phòng ban:</b> <input type="text" name="" id="" value="{{employee.department}}" ng-model="employee.department"></p>
                        <button type="button" class="btn btn-outline-primary btn-block" ng-click="luutext(employee)">Lưu</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
     
    <!-- Angular Material Dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.0/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.0/angular-animate.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.0/angular-aria.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.0/angular-messages.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.22/angular-material.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.0/angular.min.js"></script>
    <script src="<?php echo base_url(); ?>/click.js"></script>   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>