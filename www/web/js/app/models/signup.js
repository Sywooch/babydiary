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
        blacklist: ['emailUnique', 'loginUnique'],

        validation: {
            email: {
                required: true,
                pattern: 'email',
                fn: 'validateServerResult'
            },
            login: {
                required: true,
                fn: 'validateServerResult'
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

        validateServerResult: function(value, attr, computedState) {
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
                    // in case of email and login we should check
                    // if it is unique in addition to validation
                    case 'email':
                        model.isUnique('email');
                        break;
                    case 'login':
                        model.isUnique('login');
                        break;
                    default:
                        // simple validation for changed attribute only
                        model.isValid(key);
                }
            });
        },

        isUnique : function(fieldName) {
            this.set(fieldName + "Unique", null, {silent: true});
            // quiet prevalidate first, in case of valid result check it on server
            // otherwise run simple validation
            if (_.isEmpty(this.preValidate(fieldName, this.get(fieldName)))) {
                var self = this;
                AjaxHelper.post('/user/check-unique', {field: fieldName, value: this.get(fieldName)},
                    function(data) {
                        self.set(fieldName + "Unique", data.result, {silent: true});
                        // run validation
                        self.isValid(fieldName);
                    });
            }
            else {
                this.isValid(fieldName);
            }
        },

        signUp: function(errorCallback) {
            if (this.isValid(true)) {
                AjaxHelper.post('/sign-up', this.toJSON(),
                   null, errorCallback);
            }
        }
    });
})();