var app = angular.module('myapp', ['ui.bootstrap']);
app.filter('beginning_data', function(){
    return function(input, begin){
    if(input){
        begin = +begin;
        return input.slice(begin);
    }
    return [];
    }
});

app.controller('controller', function($scope, $http, $timeout){
  $http.get('fetch.php').success(function(user_data){
      $scope.file = user_data;
      $scope.current_grid = 1;
      $scope.data_limit = 5;
      $scope.filter_data = $scope.file.length;
      $scope.entire_user = $scope.file.length;
      console.log(user_data);
  });

  $scope.page_position = function(page_number){
      $scope.current_grid = page_number;
  };

  $scope.filter = function(){
      $timeout(function(){
          $scope.filter_data = $scope.searched.length;
      }, 20);
  };

  $scope.sort_with = function(base){
      $scope.base = base;
      $scope.reverse = !$scope.reverse;
  }
});

