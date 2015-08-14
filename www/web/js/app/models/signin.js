/**
 * Created by Tatyana on 05.07.2015.
 */
var app = app || {};

(function () {
    'use strict';

    // Child Model
    // -----------

    app.SignIn = Backbone.Model.extend({
        url: '/sign-in',
        defaults: {
            rememberMe: false
        },

        initialize: function() {
        }


    });
})();