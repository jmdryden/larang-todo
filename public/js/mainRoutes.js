/**
* mainRoutes Module;
*
* this hooks routes into the angular maincontroller (mainApp.js), 
* which has public/js/service/todoService.js injected into it.
* The service is how the Angular RESTful calls happen.
* 
* mainController is the controller module defined in mainApp.js
* https://docs.angularjs.org/api/ngRoute/directive/ngView explains how ngView 
* works to include the rendered template int the mainlayout (index.php).
*/
var app = angular.module('mainRoutes', ['ngRoute']);
 
app.config(function ($routeProvider) {
    $routeProvider.when('/', {
        controller: 'mainController',
        templateUrl: '../views/main.php'        
    }).when('/about', {
        templateUrl: '../views/home/about.html'
    }).when('/foo', {
        controller: 'mainController',
        templateUrl: '../views/home/foo.html'
    }).otherwise({
        redirectTo: '/'
    });
});