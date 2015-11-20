'use strict';
var app = angular.module('NSLogin', [
  'ngRoute',
  'ngCookies'
]);

app.config(['$httpProvider', function($httpProvider) {
    $httpProvider.defaults.useXDomain = true;
    delete $httpProvider.defaults.headers.common['X-Requested-With'];
}]);

//controller

app.controller('signinCtrl', 
    ['$scope', '$cookieStore', '$rootScope', '$window', 'UserService', 'LoggerService', function ($scope, $cookieStore, $rootScope, $window, UserService, LoggerService) {
  
  $rootScope.credentials={};
  
  $scope.login = function () {
    UserService.$login($scope.username,$scope.password)
      .then(function (response) {
        if (response.Status == 'Success') {
          // if($scope.checkRemember){
            $rootScope.credentials = response.data;
            $cookieStore.put('userlogged', $rootScope.credentials);
          // }
          $window.location.href = '/nearsource/dashboard';
        } else {
          LoggerService.$error(response.ErrorMessage);                   
        }
    });
  }
}]);




