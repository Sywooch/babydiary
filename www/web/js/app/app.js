/**
 * Created by Tatyana on 05.07.2015.
 */
var app = app || {};

$(function () {
    'use strict';

    Backbone.Stickit.addHandler({
        selector: '*',
        events: ['blur'],
        onSet: function (value, options) {
            var model = options.view.model;
            if (value == model.get(options.observe)) {
                model.isValid(options.observe);
            }
            return value;
        }
    });


    // Since we are automatically updating the model, we want the model
    // to also hold invalid values, otherwise, we might be validating
    // something else than the user has entered in the form.
    Backbone.Validation.configure({
        forceUpdate: true
    });

    _.extend(Backbone.Validation.validators, {
        numberOrEmpty: function(value, attr, customValue, model) {
            if(value !== customValue){
                return 'error';
            }
        }
    });

    _.extend(Backbone.Validation.patterns, {
        //letters, numbers, underscores and hyphens only
        login: /^[a-zA-Z0-9_-]*$/,

        //It matches all printable ASCII characters from ! to the tilde
        password:/^[!-~]*$/,

        float: /^\d*(\.\d+)?$/
    });

    _.extend(Backbone.Validation.messages, {
        login: 'Login can only contain letters, numbers, underscores or hyphens',
        password: 'Password can only contain latin letters, numbers or special characters'
    });

    Backbone.Validation.configure({
        labelFormatter: 'label'
    });
});