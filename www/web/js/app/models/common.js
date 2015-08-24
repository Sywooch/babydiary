/**
 * Created by Tatyana on 14.08.2015.
 */
$(function () {
    'use strict';

    // EXTEND BACKBONE MODEL
    Backbone.Model.prototype._save = Backbone.Model.prototype.save;
    Backbone.Model.prototype._constructor = Backbone.Model.prototype.constructor;
    _.extend( Backbone.Model.prototype, {
        blacklist: [],

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
                if (response.status == 400) {
                }
                if (response.status == 500) {
                }
                if (error) error.call(opts.context, model, response, opts);
            };
            attributes['_csrf'] = LayoutHelper.getCsrf();
            Backbone.Model.prototype._save.call(this, attributes, opts);
        }
    } );

});