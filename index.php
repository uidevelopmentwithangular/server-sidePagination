<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>
   Angular JS Searching Sorting and Filtering
</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

  <body>
      <div ng-app="myapp" ng-controller="controller">
      <div class="container">
      <br>
      <h3> Sorting Pagination, Searching Using Datatable</h3>

        <div class="row">
        <div class="col-sm-2 pull-left">
        <label for="pagesize">Page Size:</label>
        <select name="pagesize" id="pagesize" class="form-control">
        <option value="5">5</option>
        <option value="10">10</option>
        <option value="20">20</option>
        <option value="50">50</option>
        <option value="100">100</option>
        
        </select>
        </div>

        <div class="col-sm-6 pull-right">
        <label for="search">Search: </label>
        <input type="text" ng-model = "search" class="form-control"
                           ng-change = "filter()" placeholder="Search">
        </div>
        
        </div>
        <br>

        <div class="row">
          <div class="col-md-12" ng-show="filter_data > 0">

          <table class="table table-striped table-bordered">
          <thead>
           
           <th>Name&nbsp; 
           <a ng-click="sort_with('name');">
           <i class="glyphicon glyphicon-sort"></i>
           </a>
           </th>

           <th>Gender&nbsp; 
           <a ng-click="sort_with('gender');">
           <i class="glyphicon glyphicon-sort"></i>
           </a>
           </th>

           <th>Age&nbsp; 
           <a ng-click="sort_with('age');">
           <i class="glyphicon glyphicon-sort"></i>
           </a>
           </th>

           <th>Email&nbsp; 
           <a ng-click="sort_with('email');">
           <i class="glyphicon glyphicon-sort"></i>
           </a>
           </th>

           <th>Phone No&nbsp; 
           <a ng-click="sort_with('phoneno');">
           <i class="glyphicon glyphicon-sort"></i>
           </a>
           </th>

           <th>Organisationo&nbsp; 
           <a ng-click="sort_with('organisation');">
           <i class="glyphicon glyphicon-sort"></i>
           </a>
           </th>

          </thead>

          <tbody>
          <tr ng-repeat="data in searched = (file | filter : search | orderBy : base : reverse) |
                                            beginning_data:(current_grid-1)*data_limit | 
                                            limitTo : data_limit track by $index">
                                            <td> {{data.name}}</td>
                                            <td> {{data.gender}}</td>
                                            <td> {{data.age}}</td>
                                            <td> {{data.email}}</td>
                                            <td> {{data.phoneno}}</td>
                                            <td> {{data.organisation}}</td>
          </tr>
          
          </tbody>
          
          </table>
          
          </div>
        
        <div class="col-md-12" ng-show="filter_data == 0">
        <div class="col-md-12">
        <h4> No records founds ......
        </h4>
        </div>
        </div>

        <div class="col-md-12">
        <div class="col-md-6 pull-left">
        <h5>
         showing {{searched.length}} of {{entrie_user}} entries.
        </h5>
        </div>

        <div class="col-md-6" ng-show="filter-data > 0">
          <div class="pagination-small pull-right"
               pagination=""
               page = "current_grid"
               on-select-page = "page_position(page)" 
               boundary-links = "true"
               total-items = "filter_data"
               items-per-page = "data-limit"
               previous-text = "&laquo;"
               next-text = "&raquo;" 
          >
          
          
          </div>
        
        
        </div>
        </div>
        </div>
      </div>
      </div>

      <script src ="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.18/angular.js"> </script>
      <script src ="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.5.0/ui-bootstrap-tpls.min.js"> </script>
      <script src ="app.js"> </script>
  </body>
</html>