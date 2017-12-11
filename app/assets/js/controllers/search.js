'use strict';

/* Controllers */

angular.module('app')

.controller('SearchCtrl', ['$scope', '$http', function($scope, $http) {
	$scope.liveSearch = function() {
		console.log("Live search for: " + $scope.search.query);

		$http.get('https://steam-rests.herokuapp.com/?text=' + $scope.search.query).then(function (response) {
			console.log(response);
		});
	}



}]);