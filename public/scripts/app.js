'use strict';

var app = angular.module('NSApp', [
  'ngRoute',
  'angular-loading-bar',
  'ngAnimate',
  'ngCookies',
  'xeditable',
  'ui.bootstrap',
  'datatables',
  'datatables.tabletools',
  'ngSanitize',
  'angularMoment'
]);

app.config(['cfpLoadingBarProvider', function(cfpLoadingBarProvider) {
  cfpLoadingBarProvider.includeBar = true;
  cfpLoadingBarProvider.includeSpinner = true;
  cfpLoadingBarProvider.latencyThreshold = 100;
}]);

app.config(['$routeProvider', function ($routeProvider) {
  $routeProvider
    .when("/", {

    })  
    .when("/employees", {
      templateUrl: "public/views/employees.html",
      controller: "employeeController",
      controllerAs: 'vm',
      resolve: {
        employees: function(EmployeeService) {
        return EmployeeService.$list();
        }       
      }
    })
    .when("/error-404", {
      templateUrl: "public/views/error-404.html", 
    })
    .otherwise({
      redirectTo:'/error-404'
    });
}]);