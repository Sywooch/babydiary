(function(){
    var app = angular.module('store-products', []);

    app.directive('productTitle', function(){
        return{
            restrict: 'E',
            templateUrl: 'site/learn'
        };
    });

    app.directive('productPanels', function(){
        return{
            restrict: 'E',
            templateUrl: 'site/product-panels',
            controller: function(){
                this.tab = 1;

                this.selectTab = function(setTab){
                    this.tab = setTab;
                };

                this.isSelected = function(checkTab){
                    return this.tab === checkTab;
                };
            },
            controllerAs: 'panel'
        };
    });
})();