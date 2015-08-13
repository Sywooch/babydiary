/**
 * Created by Tatyana on 30.07.2015.
 */
var ValidationMessages = {
    messages : {},
    saveToSessionStorage: function() {
        var storage = window['sessionStorage'];
        if (!_.isUndefined(storage))storage.setItem('validation-messages', JSON.stringify(this.messages));
    },
    loadFromSessionStorage: function() {
        var storage = window['sessionStorage'];
        //storage.removeItem('validation-messages');
        if (!_.isUndefined(storage)) {
            var retrievedObject = storage.getItem('validation-messages');
            if (retrievedObject) {
                this.messages = JSON.parse(retrievedObject);
                this.updateBackboneValidationMessages();
                return true;
            }
        }
        return false;
    },
    loadMessages: function() {
        //if (!this.loadFromSessionStorage()) {
            var self = this;
            AjaxHelper.getSync('api/get-validation-messages', null,
                function (data) {
                    self.messages = data;
                    self.updateBackboneValidationMessages();
                    //self.saveToSessionStorage();
                });
        //}
    },
    updateBackboneValidationMessages: function() {
        for (var prop in Backbone.Validation.messages) {
            if (_.has(this.messages, prop)) {
                Backbone.Validation.messages[prop] = this.messages[prop];
            }
        }

    },
    get: function(key) {
        return this.messages[key];
    }

};
$(function () {
    ValidationMessages.loadMessages();
});