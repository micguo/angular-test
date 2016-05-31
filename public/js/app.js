var myApp = angular.module('myApp', ['ngRoute']);

myApp.config(['$routeProvider',
    function($routeProvider) {
        $routeProvider.
        when('/addOrder', {
            templateUrl: 'templates/add-order.html',
            controller: 'AddOrderController'
        }).
        when('/showOrders', {
            templateUrl: 'templates/show-orders.html',
            controller: 'ShowOrdersController'
        }).
        otherwise({
            redirectTo: '/addOrder'
        });
    }
]);

myApp.controller('AddOrderController', function($scope) {
    $scope.message = 'This is Add new order screen';  
});

myApp.controller('ShowOrdersController', function($scope) {
    $scope.message = 'This is Show orders screen';
});