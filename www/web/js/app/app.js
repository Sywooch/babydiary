(function(){
    var app = angular.module('store', []);

    app.controller('StoreController', function(){
        this.products = gem;
    });

    app.controller('PanelController', function(){
        this.tab = 1;

        this.selectTab = function(setTab){
            this.tab = setTab;
        };

        this.isSelected = function(checkTab){
            return this.tab === checkTab;
        };
    });

    app.controller('ReviewController', function(){
        this.review = {};

        this.addReview = function(product){
            product.reviews.push(this.review);
            this.review = {};
        }
    });

    app.directive('productTitle', function(){
        return{
            restrict: 'E',
            templateUrl: '/js'
        };
    });

    var gem = [
        {
            name: 'Test',
            price: 2,
            description: 'Vestibulum placerat ipsum non ligula accumsan venenatis. Aenean nec magna semper, commodo leo ac, ultrices magna. Vivamus sed tempus purus, vitae malesuada nibh. Sed sed justo commodo, mollis eros quis, varius nulla. Sed eget convallis metus. Cras posuere volutpat nisl non volutpat. Sed interdum elit est, tincidunt malesuada sem pulvinar id.',
            canPurchase: true,
            soldOut: false,
            images:[
                {
                    thumb: 'http://wwww.lenagold.ru/fon/clipart/d/drag/drago36.jpg',
                    full: 'http://wwww.lenagold.ru/fon/clipart/d/drag/drago36.jpg'
                },
                {
                    thumb: 'http://shoppingzone.ru/img/minst9.jpg',
                    full: 'http://shoppingzone.ru/img/minst9.jpg'
                },
            ],
            reviews: [
                {
                    stars: 5,
                    body: "I love this product!",
                    author: "joe@thomas.com"
                },
                {
                    stars: 1,
                    body: "This product sucks",
                    author: "tim@hater.com"
                }
            ]
        },
        {
            name: 'Test2',
            price: 5.95,
            description: 'Vestibulum placerat ipsum non ligula accumsan venenatis. Aenean nec magna semper, commodo leo ac, ultrices magna. Vivamus sed tempus purus, vitae malesuada nibh. Sed sed justo commodo, mollis eros quis, varius nulla. Sed eget convallis metus. Cras posuere volutpat nisl non volutpat. Sed interdum elit est, tincidunt malesuada sem pulvinar id.',
            canPurchase: false,
            soldOut: false,
            images:[
                {
                    thumb: 'http://shoppingzone.ru/img/minst9.jpg',
                    full: 'http://shoppingzone.ru/img/minst9.jpg'
                },

                {
                    thumb: 'http://wwww.lenagold.ru/fon/clipart/d/drag/drago36.jpg',
                    full: 'http://wwww.lenagold.ru/fon/clipart/d/drag/drago36.jpg'
                },
            ]
        },
    ]
})()