/**
 * Created by Tatyana on 05.07.2015.
 */
var app = app || {};

(function () {
    'use strict';

    // Child Collection
    // ---------------


    var Childs = Backbone.Collection.extend({
        model: app.Child,
        url:"/child"
    });

    // Create global collection of **Childs**.
    app.childs = new Childs();
})();