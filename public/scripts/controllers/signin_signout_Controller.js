'use strict';

app
.controller('signoutCtrl', 
  	['$scope', '$cookieStore', '$rootScope', '$location', '$window', 
	function ($scope, $cookieStore, $rootScope, $location, $window) {

	var cookie = $cookieStore.get('userlogged');
	if (cookie === undefined) {
		$window.location.href = '/nearsource';
	}else if (cookie) {
		$scope.currentUser = cookie;
	}
	$scope.signout = function () {
		$rootScope.globals = [];
		$cookieStore.remove('userlogged');
		$window.location.href = '/nearsource';
	}
}]);