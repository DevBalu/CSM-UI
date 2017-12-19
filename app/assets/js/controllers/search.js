'use strict';

/* Controllers */

angular.module('app')

.controller('SearchCtrl', ['$scope', '$http', '$timeout', function($scope, $http, $timeout) {
	$scope.pageCount = 1;
	/*METHODS*/
	$scope.joinn = function(arr){
		var string = arr.join("   ,   ");
		return string
	}

	$scope.pagination = function(){
		$scope.nrButtons = $scope.search_result_count / 20;
	}

	$scope.decodeChar = function (item) {
		return unescape( item.toString() );
	}
	/*END METHODS*/

	$scope.liveSearch = function() {

		$http.get('http://localhost/CSM-B/web/handler.php?text=' + $scope.search.query).then(function (response) {
			$scope.search_page = response.data.search_page;
			$scope.search_result_count = response.data.search_result_count;
			$scope.users = response.data.users;

			// pagination
			if ($scope.search_result_count !== 0) {
				$scope.pagination();
			}
			// END pagination
		});
	}


	$scope.nextPage = function (){
		$scope.pageCount++;
		$http.get('http://localhost/CSM-B/web/handler.php?text=' + $scope.search.query + '&page=' + $scope.pageCount).then(function(response){
			$scope.search_page = response.data.search_page;
			$scope.search_result_count = response.data.search_result_count;
			$scope.users = response.data.users;
		});
	}

}]);