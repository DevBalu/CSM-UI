'use strict';

/* Controllers */

angular.module('app')

.controller('SearchCtrl', ['$scope', '$http', function($scope, $http) {
    $scope.liveSearch = function() {
        console.log("Live search for: " + $scope.search.query);
	    $http.get('https://steamcommunity.com/').then(function (response) {
	    	var data = response.data;
	    	var sesId = data.substring(data.indexOf('g_sessionID = ') + 15, data.indexOf('g_sessionID = ') + 39);
	    	$http.get(`https://steamcommunity.com/search/SearchCommunityAjax?text=ostap+ben&filter=users&sessionid=${sesId}&steamid_user=false`).then(function(response) {
	    		console.log(response.data);
	    	});
	    });
    }



}]);