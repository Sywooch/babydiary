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

        }


    });
})();