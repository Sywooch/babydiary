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

    // Extend the callbacks to work with Bootstrap
    _.extend(Backbone.Validation.callbacks, {
        valid: function (view, attr, selector) {
            var $el = view.$("[name*='" + attr + "']");
            LayoutHelper.showValid($el);

        },
        invalid: function (view, attr, error, selector) {
            var $el = view.$("[name*='" + attr + "']")
            LayoutHelper.showError($el, error);
        }
    });

    _.extend( Backbone.Model.prototype, {
        blacklist: [],
        toJSON: function(options) {
            return _.omit(this.attributes, this.blacklist);
        }
    } );

});