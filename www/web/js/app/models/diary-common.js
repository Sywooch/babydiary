/**
 * Created by Tatyana on 05.07.2015.
 */
var app = app || {};

(function () {
    'use strict';

    // Child Model
    // -----------

    app.DiaryCommon = Backbone.Model.extend({
        url: '/diary-common',
        defaults: {
            other : ""
        },

        validation: {
            weight: {
                required: false,
                pattern: 'float',
                fn: 'validateServerResult'
            },
            height: {
                required: false,
                pattern: 'float',
                fn: 'validateServerResult'
            },
            headCircumference: {
                pattern: 'float',
                fn: 'validateServerResult'
            },
            chestCircumference: {
                pattern: 'float',
                fn: 'validateServerResult'
            },
           other: {
                maxLength: 255,
                fn: 'validateServerResult'
            },
            notes: {
                maxLength: 2000,
                fn: 'validateServerResult'
            }
        }

    });
})();