/**
 * Created by Tatyana on 06.07.2015.
 */
var app = app || {};

var SignUpForm = Backbone.View.extend({
    events: {
        'click #signUpButton': function (e) {
            e.preventDefault();
            this.signUp();
        }
    },

    // Use stickit to perform binding between
    // the model and the view
    bindings: {
        '[name=login]': {
            observe: 'login',
            setOptions: {
                validate: true
            }
        },
        '[name=email]': {
            observe: 'email',
            setOptions: {
                validate: true
            }
        },
        '[name=password]': {
            observe: 'password',
            setOptions: {
                validate: true
            }
        },
        '[name=repeatPassword]': {
            observe: 'repeatPassword',
            setOptions: {
                validate: true
            }
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