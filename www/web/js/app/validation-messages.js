/**
 * Created by Tatyana on 30.07.2015.
 */
var ValidationMessages = {
    messages : {},
    loadMessages: function() {
        var self = this;
        AjaxHelper.getSync('api/get-validation-messages', null,
            function(data) {
                self.messages = data;
                self.updateBackboneValidationMessages();
            });
    },
    updateBackboneValidationMessages: function() {
        for (var prop in Backbone.Validation.messages) {
            if (_.has(this.messages, prop)) {
                Backbone.Validation.messages[prop] = this.messages[prop];
            }
        }
        //_.extend(Backbone.Validation.messages, {
        //    required: ValidationMessages.get('required'),
        //    minLength: ValidationMessages.get('minLength'),
        //    maxLength: ValidationMessages.get('maxLength'),
        //    email: ValidationMessages.get('emailPattern'),
        //    login: ValidationMessages.get('loginPattern'),
        //    password: ValidationMessages.get('passwordPattern')
        //});
    },
    get: function(key) {
        return this.messages[key];
    }

};
$(function () {
    ValidationMessages.loadMessages();
});