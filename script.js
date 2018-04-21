var app = angular.module('GPAapp', ['ngRoute']);

app.config(function($routeProvider) {
  $routeProvider

  .when('/', {
    templateUrl : 'pages/main.html',
    controller  : 'MainController',
  })

  .when('/edit', {
    templateUrl : 'pages/edit.html',
    controller  : 'EditController'
  })

  .when('/new', {
    templateUrl : 'pages/new.html',
    controller  : 'NewController'
  })

  .otherwise({redirectTo: '/'});
});

app.controller('MainController', function($scope) {
  $scope.message = 'Hello from MainController';
});

app.controller('EditController', function($scope) {
  $scope.message = 'Hello from EditController';
});

app.controller('NewController', function($scope) {
  $scope.message = 'Hello from NewController';
});