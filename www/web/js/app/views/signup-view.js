/**
 * Created by Tatyana on 06.07.2015.
 */
var app = app || {};

Backbone.Stickit.addHandler({
    selector: '*',
    events: ['blur'],
    onSet: 'showValidationResultIfNotChanged'
});

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
        '#user-login':  'login',
        '#user-email':  'email',
        '#user-password': 'password',
        '#user-confirmpassword': 'confirmPassword'
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
        alert('signUp!');
        // Check if the model is valid before saving
        if(this.model.isValid(true)) {
            // this.model.save();
            alert('Great Success!');
        }
    },

    showValidationResultIfNotChanged: function (value, options) {
        if (value == this.model.get(options.observe)) {
            this.model.isValid(options.observe);
        }
        return value;
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