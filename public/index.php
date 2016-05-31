<html>
  <body ng-app="myApp">
 
    <div class="container">
        <div class="row">
        <div class="col-md-3">
            <ul class="nav">
                <li><a href="#AddNewOrder"> Add New Order </a></li>
                <li><a href="#ShowOrders"> Show Order </a></li>
            </ul>
        </div>
        <div class="col-md-9">
            <div ng-view></div>
        </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular-route.js"></script>
    <script src="js/app.js"></script>
    </body>
</html>