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

    Backbone.Model.prototype._save = Backbone.Model.prototype.save;
    _.extend( Backbone.Model.prototype, {
        serverErrors: {},
        blacklist: ['serverErrors'],

        toJSON: function(options) {
            return _.omit(this.attributes, this.blacklist);
        },

        // override save method to handle error callback
        save: function(key, value, options) {

            var attributes, opts;

            if (_.isObject(key) || key == null) {
                attributes = key || {};
                opts = value || {};
            } else {
                (attributes = {})[key] = value;
                opts = options || {};
            }

            var error = opts.error;
            opts.error = function(model, response) {
                // save server validation errors and run validation on the model
                _.extend(model.serverErrors, response.responseJSON);
                model.isValid(true);
                if (error) error.call(opts.context, model, response, opts);
            };
            attributes['_csrf'] = LayoutHelper.getCsrf();
            Backbone.Model.prototype._save.call(this, attributes, opts);
        }
    } );

});