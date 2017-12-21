'use strict';

/* Controllers */

angular.module('app')

.controller('SearchCtrl', ['$scope', '$http', '$timeout', function($scope, $http, $timeout) {
	$scope.pageCount = 1;
	/*METHODS*/
	$scope.pagination = function(){
		var toRes = $scope.search_page * 20;
		var fromRes = toRes - 19;
		var result = 'Showing ' + fromRes + ' - ' + toRes + ' of ' + $scope.search_result_count;
		return result;
	}

	$scope.decodeChar = function (item) {
		return unescape( item.toString() );
	}

	$scope.findChar = function (char, string) {
		return string.indexOf(char);
	}


	/*END METHODS*/

	$scope.liveSearch = function() {

		$http.get('http://localhost/CSM-B/web/handler.php?text=' + $scope.search.query).then(function (response) {
			$scope.search_page = response.data.search_page;
			$scope.search_result_count = response.data.search_result_count;
			$scope.success = response.data.success;
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
			$scope.success = response.data.success;
			$scope.users = response.data.users;
			// pagination
			if ($scope.search_result_count !== 0) {
				$scope.pagination();
			}
			// END pagination
		});
	}

}]);