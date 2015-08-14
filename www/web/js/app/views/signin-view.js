/**
 * Created by Tatyana on 06.07.2015.
 */
var app = app || {};

var SignInView = Backbone.View.extend({
    events: {
        'click #signInButton': function (e) {
            e.preventDefault();
            this.signIn();
        }
    },
    // Use stickit to perform binding between
    // the model and the view
    bindings: {
        '#user-email': {
            observe: 'email'
        },
        '#user-password': {
            observe: 'password'
        },
        '#user-rememberme': {
            observe: 'rememberMe'
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


    signIn: function () {
        alert('Sign-In');
        //var self = this;
        //if (this.model.isValid(true)) {
        //    this.model.save(null, {showLoader: true, success:function() {
        //        self.remove();
        //        var view = new ConfirmEmailView();
        //        view.render();
        //    } });
        //}
    }

});



$(function () {
    var view = new SignInView({
        el: '#frmSignIn',
        model: new app.SignIn()
    });
    view.render();
});