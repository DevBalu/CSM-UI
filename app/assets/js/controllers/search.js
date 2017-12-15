'use strict';

/* Controllers */

angular.module('app')

.controller('SearchCtrl', ['$scope', '$http', function($scope, $http) {
	$scope.pageCount = 1;
	/*METHODS*/
	$scope.joinn = function(arr){
		var string = arr.join("   ,   ");
		return string
	}

	$scope.pagination = function(){
		$scope.nrButtons = $scope.search_result_count / 20;
	}

	$scope.parJson = function (json) {
		return JSON.parse(json);
	}
	/*END METHODS*/

	$scope.liveSearch = function() {

		$http.get('http://localhost/CSM-B/web/handler.php?text=' + $scope.search.query).then(function (response) {
			$scope.search_page = response.data.search_page;
			$scope.search_result_count = response.data.search_result_count;
			$scope.users = response.data.users;

			// $scope.rests = JSON.parse(response);
			console.log(JSON.parse(response.data));

			// var umi = function(arr_users){
			// 	for( let item in arr_users){
			// 		var str  = arr_users[item].toString();
			// 		console.log( unescape(escape( str )) );
			// 	}
			// }
			// $scope.user_match_info = umi( $scope.users );

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