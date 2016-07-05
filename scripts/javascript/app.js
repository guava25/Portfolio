// Define the `phonecatApp` module
var app = angular.module('portfoliojs', []);

// Define the `PhoneListController` controller on the `phonecatApp` module
app.controller('PortfolioController', function($scope, $http) {
    $http.get("api.php")
    .then(function (response) {$scope.names = response.data;});
});