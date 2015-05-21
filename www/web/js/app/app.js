(function(){
    var app = angular.module('main', ['directives', 'ngRoute']);

    //Define Routing for app
    //Uri /AddNewOrder -> template add_order.html and Controller AddOrderController
    //Uri /ShowOrders -> template show_orders.html and Controller AddOrderController
    app.config(['$routeProvider',
        function($routeProvider) {
            $routeProvider.
                when('/diary', {
                    templateUrl: 'site/diary',
                    controller: 'ShowDiaryController'
                }).
                otherwise({
                    redirectTo: 'MainController'
                });
        }]);


    app.controller('MainController', function($scope) {

        $scope.message = 'This is Add new order screen';

    });

    app.controller('ShowDiaryController', function($scope) {

        $scope.message = 'This is Diary screen';

    });

    app.controller('StoreController', ['$http',function($http){
        var store = this;
        store.products = [];
        $http.get('site/get-products').success(function(data){
            store.products = data;
        });
    }]);

    app.controller('ReviewController', function(){
        this.review = {};

        this.addReview = function(product){
            product.reviews.push(this.review);
            this.review = {};
        }
    });
})();