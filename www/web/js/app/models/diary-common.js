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
        },

        validation: {
            weight: {
                pattern: 'number',
                fn: 'validateServerResult'
            },
            height: {
                pattern: 'number',
                fn: 'validateServerResult'
            },
            headCircumference: {
                pattern: 'number',
                fn: 'validateServerResult'
            },
            chestCircumference: {
                pattern: 'number',
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