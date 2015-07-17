/**
 * Created by Tatyana on 06.07.2015.
 */
var app = app || {};

var SignUpForm = Backbone.View.extend({
    events: {
        'click #signUpButton': function (e) {
            e.preventDefault();
            this.signUp();
        },
        'keydown .form-control': function (e) {
            LayoutHelper.hideError($(e.currentTarget));
        },
        'blur #user-email,#user-login': function (e) {
            LayoutHelper.showSpin($(e.currentTarget));
        }
    },
    // Use stickit to perform binding between
    // the model and the view
    bindings: {
        '#user-login': {
            observe: 'login',
            onSet: 'showValidationResultIfNotChanged'
        },
        '#user-email': {
            observe: 'email',
            onSet: 'showValidationResultIfNotChanged'
        },
        '#user-password': {
            observe: 'password',
            onSet: 'showValidationResultIfNotChanged'
        },
        '#user-confirmpassword': {
            observe: 'confirmPassword',
            onSet: 'showValidationResultIfNotChanged'
        }
    },

    initialize: function () {
        // This hooks up the validation
        Backbone.Validation.bind(this);
    },

    render: function() {
        this.stickit();
        return this;
    },


    signUp: function () {
        this.model.signUp(this.showValidationError);
    },

    showValidationResultIfNotChanged: function (value, options) {
        if (value == this.model.get(options.observe)) {
            this.model.isValid(options.observe);
        }
        return value;
    },

    showValidationError: function (errors) {
        _.each(errors, function (value, key){
            LayoutHelper.showError(key, value);
        });
    },

    remove: function() {
        // Remove the validation binding
        Backbone.Validation.unbind(this);
        return Backbone.View.prototype.remove.apply(this, arguments);
    }
});

$(function () {
    var view = new SignUpForm({
        el: '#frmSignUp',
        model: new app.SignUp()
    });
    view.render();
});