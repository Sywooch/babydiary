/**
 * Created by Tatyana on 05.07.2015.
 */
var app = app || {};

$(function () {
    'use strict';

    Backbone.Stickit.addHandler({
        selector: '*',
        events: ['blur']
    });


    // Since we are automatically updating the model, we want the model
    // to also hold invalid values, otherwise, we might be validating
    // something else than the user has entered in the form.
    Backbone.Validation.configure({
        forceUpdate: true
    });

    _.extend(Backbone.Validation.patterns, {
        //letters, numbers, underscores and hyphens only
        login: /^[a-zA-Z0-9_-]*$/,

        //It matches all printable ASCII characters from ! to the tilde
        password:/^[!-~]*$/

    });

    _.extend(Backbone.Validation.messages, {
        login: 'Login can only contain letters, numbers, underscores or hyphens',
        password: 'Password can only contain latin letters, numbers or special characters'
    });

    Backbone.Validation.configure({
        labelFormatter: 'label'
    });
});