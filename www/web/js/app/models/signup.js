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
            // will be true/false
            emailUnique: null,
            loginUnique: null
        },
        validation: {
            email: {
                required: true,
                pattern: 'email',
                fn: 'validateOnServer'
            },
            login: {
                required: true,
                fn: 'validateOnServer'
            },
            password: {
                minLength: 8
            },
            confirmPassword: {
                required: true,
                equalTo: 'password',
                msg: 'The passwords does not match'
            }
        },

        validateOnServer: function(value, attr, computedState) {
            if(attr == 'email' && this.get('emailUnique') === false) {
                return 'This email has already been registered';
            }
            if(attr == 'login' && this.get('loginUnique') === false) {
                return 'This login is already being used';
            }
        },

        initialize: function() {
            this.listenTo(this, 'change', this.validateChange);
        },

        validateChange: function (model, options) {
            _.each(model.changedAttributes(), function (value, key){
                switch(key) {
                    case 'email':
                        model.isUnique('email');
                        break;
                    case 'login':
                        model.isUnique('login');
                        break;
                    default:
                        model.isValid(key);
                }
            });
        },

        isUnique : function(fieldName) {
            this.set(fieldName + "Unique", null, {silent: true});
            if (_.isEmpty(this.preValidate(fieldName, this.get(fieldName)))) {
                var self = this;
                AjaxHelper.post('/user/check-unique', {field: fieldName, value: this.get(fieldName)},
                    function(data) {
                        self.set(fieldName + "Unique", data.result, {silent: true});
                        self.isValid(fieldName);
                    });
            }
            else {
                this.isValid(fieldName);
            }
        }

    });
})();