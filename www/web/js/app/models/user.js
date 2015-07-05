/**
 * Created by Tatyana on 05.07.2015.
 */
var app = app || {};

(function () {
    'use strict';

    // Child Model
    // -----------

    app.User = Backbone.Model.extend({

        idAttribute: "user_id",
        urlRoot: "/users",
        defaults: {

        },
        validation: {
            email: {
                required: true,
                pattern: 'email'
            },
            login: {
                required: true
            },
            password: {
                minLength: 8
            },
            repeatPassword: {
                equalTo: 'password',
                msg: 'The passwords does not match'
            }
        }
    });
})();