/* 
 * This is the controller to consume the REST API within angular and use the Angular service
 * Note that the todoService is injected as a param in the mainApp definition
 * note declared dependency on the ui.bootstrap module for bootstrap components written in pure ajs
 * https://angular-ui.github.io/bootstrap/
*/
var app = angular.module('mainApp', ['mainRoutes', 'todoService', 'ngAnimate', 'toastr', 'ui.bootstrap', 'services.breadcrumbs']);

//note the way that you add dependencies to your module (like toastr)
app.controller('mainController', ['$scope', '$http', 'toastr', 'TodoService', 'breadcrumbs', function($scope, $http, toastr, TodoService, breadcrumbs) {
    $scope.lists = [];
    $scope.completedTodos = [];
    $scope.allTodos = [];
    $scope.breadcrumbs = breadcrumbs;
 
    var initializeTodos = function() {
        TodoService.getActiveTodos().success(function (data) {
            $scope.lists = data;
            $scope.anyActiveTodos = $scope.lists.length;
            console.log($scope.lists);
        });
        TodoService.get().success(function (data) {
            $scope.allTodos = data;
        });
        TodoService.getAllCompletedTodos().success(function (data) {
            $scope.completedTodos = data;
            console.log('completed todos');
            console.log($scope.completedTodos);
        });
    }
 
    initializeTodos();
 
    $scope.addTodos = function () {
        var input = $scope.myinput;
 
        TodoService.add(input).success(function (data) {
            $scope.myinput = ""; 
            toastr.success('Successfully added!', 'Success');
            $scope.anyActiveTodos = true;
 
            initializeTodos();
            $scope.lists.push({
                id: data.id,
                TodoName: input,
                IsDone: false
            });
        }).error(function () {
            toastr.error('Something went off. Please try again', 'Fail');
        });
    }
    $scope.done = function (list) {
        console.log('task done!');
        console.log(list);
 
        if (list.IsDone) {
            var todoIndex = $scope.lists.indexOf(list);
 
            TodoService.update(list.id, list.IsDone, list.TodoName).success(function() {
                $scope.anyActiveTodos = $scope.lists.length;
 
                initializeTodos();
                toastr.success('Done a task!', 'Success');
            });
 
            //todo: logic here...
        }
    }    
 
}]);