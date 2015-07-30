/**
 * Created by Tatyana on 05.07.2015.
 */
var app = app || {};

(function () {
    'use strict';

    // Child Model
    // -----------

    app.SignUp = Backbone.Model.extend({
        url: '/sign-up',
        defaults: {
        },

        validation: {
            email: {
                required: true,
                maxLength: 100,
                pattern: 'email',
                fn: 'validateServerResult'
            },
            login: {
                required: true,
                maxLength: 100,
                pattern: 'login',
                fn: 'validateServerResult'
            },
            password: {
                minLength: 8,
                maxLength: 255,
                pattern: 'password',
                fn: 'validateServerResult'
            },
            confirmPassword: {
                required: true,
                equalTo: 'password',
                msg: LocalizationMessages['passwordDoesNotMatch'],
                fn: 'validateServerResult'
            }
        },
        labels: {
            email: LocalizationMessages['emailLabel'],
            login: LocalizationMessages['loginLabel'],
            password: LocalizationMessages['passwordLabel'],
            confirmPassword: LocalizationMessages['confirmPasswordLabel']
        },

        validateServerResult: function(value, attr, computedState) {
            if (_.has(this.serverErrors,attr)) {
                return this.serverErrors[attr].join("<br />");
            }
        },

        initialize: function() {
            this.listenTo(this, 'change', this.validateChange);
        },

        validateChange: function (model, options) {
            //var self = this;
            _.each(model.changedAttributes(), function (value, key){
                delete this.serverErrors[key];
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
            }, this);
        },

        isUnique : function(fieldName) {
            // quiet prevalidate first, in case of valid result check it on server
            // otherwise run simple validation
            if (_.isEmpty(this.preValidate(fieldName, this.get(fieldName)))) {
                var self = this;
                AjaxHelper.post('/user/check-unique', {field: fieldName, value: this.get(fieldName)},
                    function(data) {
                        if (!data.result) {
                            if(fieldName == 'email') {
                                self.serverErrors.email = [LocalizationMessages['emailNotUnique']];
                            }
                            if(fieldName == 'login') {
                                self.serverErrors.login = [LocalizationMessages['loginNotUnique']];
                            }
                        }
                        // run validation to display server result
                        self.isValid(fieldName);
                    });
            }
            else {
                this.isValid(fieldName);
            }
        }

    });
})();