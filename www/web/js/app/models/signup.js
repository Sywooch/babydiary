/**
 * Created by Tatyana on 05.07.2015.
 */
var app = app || {};

(function () {
    'use strict';

    // Child Model
    // -----------

    app.SignUp = Backbone.Model.extend({

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
            confirmPassword: {
                equalTo: 'password',
                msg: 'The passwords does not match'
            }
        }
    });
})();