(function(){
    var app = angular.module('directives', []);

    app.directive('widgetLogin',['$http', function(data){
        return{
            restrict: "E",
            templateUrl: "site/widget-login",
            controller: function($http){
                this.doLogin = function()
                {
                    var req = {
                        method: 'POST',
                        url: 'site/login',
                        headers: {
                            'Content-Type': undefined
                        },
                        data: this.auth
                    }
                    $http(req).success(function(data){
                        console.log(data);
                    })
                }
            },
            controllerAs: 'wLogin'
        }
    }])
})();