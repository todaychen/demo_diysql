<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		.wrap{
			width: 200px;
			height: 100px;
			background-color: red;
		}
	</style>
	<script src="angular.min.js"></script>
</head>
<body>
	<div ng-app="myApp" ng-controller="myController">
		<div class="wrap" ng-click="clickFn()"></div>
	</div>
</body>
<script type="text/javascript">
	var myApp=angular.module("myApp",[]);
	myApp.controller("myController",function($scope,$http){
		$scope.clickFn=function(){
			// console.log("ok");
			$http.get("demo%20v10%20start.php").success(function(response){
				console.log(response);
			});
		}
	});
</script>
</html>