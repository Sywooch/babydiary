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
        }
    },

    // Use stickit to perform binding between
    // the model and the view
    bindings: {
        '#signup-login': {
            observe: 'login',
            setOptions: {
                validate: true
            },
            events: ['blur']
        },
        '#signup-email': {
            observe: 'email',
            setOptions: {
                validate: true
            },
            events: ['blur']
        },
        '#signup-password': {
            observe: 'password',
            setOptions: {
                validate: true
            },
            events: ['blur']
        },
        '#signup-confirmpassword': {
            observe: 'confirmPassword',
            setOptions: {
                validate: true
            },
            events: ['blur']
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
        alert('signUp!');
        // Check if the model is valid before saving
        if(this.model.isValid(true)) {
            // this.model.save();
            alert('Great Success!');
        }
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