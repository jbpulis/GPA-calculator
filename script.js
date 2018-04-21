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
  $scope.message = 'To create or add a new class to a semester simply slick add.' <br> 
  'To review or edit an existing semester please click edit' <br> 
  'If you are dine with the GPA monitor/forcaster just click logout (it is all pretty intuitive');
});

app.controller('EditController', function($scope) {
  $scope.message = 'Hello from EditController';
});

app.controller('NewController', function($scope) {
  $scope.message = '';
});