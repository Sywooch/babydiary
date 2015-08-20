/**
 * Created by Tatyana on 14.08.2015.
 */
$(function () {
    'use strict';

    // EXTEND BACKBONE MODEL
    Backbone.Model.prototype._save = Backbone.Model.prototype.save;
    Backbone.Model.prototype._constructor = Backbone.Model.prototype.constructor;
    _.extend( Backbone.Model.prototype, {
        serverErrors: {},
        validation: {},
        labels: {},
        blacklist: ['serverErrors'],

        initialize: function() {
            this.listenTo(this, 'change', this.validateChange);
            this.setValidationLabels();
        },

        setValidationLabels: function () {
            _.each(_.keys(this.validation), function (value){
                this.labels[value] = LayoutHelper.getLabelTextFor(value);
            }, this)
        },

        validateChange: function (model, options) {
            _.each(model.changedAttributes(), function (value, key){
                delete this.serverErrors[key];
                // simple validation for changed attribute only
                model.isValid(key);
            }, this);
        },

        validateServerResult: function(value, attr, computedState) {
            if (_.has(this.serverErrors,attr)) {
                return this.serverErrors[attr].join("<br />");
            }
        },

        toJSON: function(options) {
            return _.omit(this.attributes, this.blacklist);
        },

        // override save method to handle error callback
        save: function(key, value, options) {

            var attributes, opts;

            // Handle both `"key", value` and `{key: value}` -style arguments.
            if (_.isObject(key) || key == null) {
                attributes = key || {};
                opts = value || {};
            } else {
                (attributes = {})[key] = value;
                opts = options || {};
            }

            // show loader
            if (opts.showLoader) {
                LayoutHelper.showLoader();
                // and hide on success
                var success = opts.success;
                opts.success = function (model, resp) {
                    LayoutHelper.hideLoader();
                    if (success) success.call(opts.context, model, resp, opts);
                };
            }

            var error = opts.error;
            opts.error = function(model, response) {
                if (opts.showLoader) LayoutHelper.hideLoader();
                if (response.status == 400 && !_.isEmpty(model.validation)) {
                    // save validation errors from server and run validation on the model
                    _.extend(model.serverErrors, response.responseJSON);
                    model.isValid(true);
                }
                if (error) error.call(opts.context, model, response, opts);
            };
            attributes['_csrf'] = LayoutHelper.getCsrf();
            Backbone.Model.prototype._save.call(this, attributes, opts);
        }
    } );

});