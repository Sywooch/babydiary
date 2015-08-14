/**
 * Created by Tatyana on 06.07.2015.
 */
var app = app || {};

var SignUpView = Backbone.View.extend({
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
        var self = this;
        if (this.model.isValid(true)) {
            this.model.save(null, {showLoader: true, success:function() {
                self.remove();
                var view = new ConfirmEmailView({model: self.model});
                view.render();
            } });
        }
    },

    showValidationResultIfNotChanged: function (value, options) {
        if (value == this.model.get(options.observe)) {
            this.model.isValid(options.observe);
        }
        return value;
    },

    //showValidationError: function (errors) {
    //    _.each(errors, function (error, attr){
    //        LayoutHelper.showError(this.$("[name*='" + attr + "']"), error);
    //    });
    //},

    remove: function() {
        // Remove the validation binding
        Backbone.Validation.unbind(this);
        return Backbone.View.prototype.remove.apply(this, arguments);
    }
});

var ConfirmEmailView = Backbone.View.extend({

    el: ".sign-up-result",

    render : function() {
        var link = $('<a>').attr({'href':'/confirm-email/' + this.model.activated_hash}).text(this.model.activated_hash);
        this.$el.append(link).show();
        return this;
    }
});


$(function () {
    var view = new SignUpView({
        el: '#frmSignUp',
        model: new app.SignUp()
    });
    view.render();
});