/**
 * Created by Tatyana on 06.07.2015.
 */
var app = app || {};

// Extend the callbacks to work with Bootstrap
_.extend(Backbone.Validation.callbacks, {
    valid: function (view, attr, selector) {
        var $el = view.$("#" + attr );
        LayoutHelper.showFieldValid($el);

    },
    invalid: function (view, attr, error, selector) {
        var $el = view.$("#" + attr );
        LayoutHelper.showFieldError($el, error);
    }
});

var SignUpView = Backbone.View.extend({
    events: {
        'click #signUpButton': function (e) {
            e.preventDefault();
            this.signUp();
        },
        'keydown .form-control': function (e) {
            LayoutHelper.clearField($(e.currentTarget));
        },
        'blur #email,#login': function (e) {
            LayoutHelper.showSpin($(e.currentTarget));
        }
    },
    // Use stickit to perform binding between
    // the model and the view
    bindings: {
        '#login': {
            observe: 'login',
            onSet: 'showValidationResultIfNotChanged'
        },
        '#email': {
            observe: 'email',
            onSet: 'showValidationResultIfNotChanged'
        },
        '#password': {
            observe: 'password',
            onSet: 'showValidationResultIfNotChanged'
        },
        '#confirmPassword': {
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
            this.model.save(null, {showLoader: true, success:function(model, response) {
                self.remove();
                var view = new ConfirmEmailView({model: self.model});
                view.render();
            },error:function(model, response){
                if (response.status == 400) {
                    // save validation errors from server and run validation on the model
                    _.extend(model.serverErrors, response.responseJSON);
                    model.isValid(true);
                }
            } });
        }
    },
    showValidationResultIfNotChanged: function (value, options) {
        var model = options.view.model;
        if (value == model.get(options.observe)) {
            model.isValid(options.observe);
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
        var link = $('<a>').attr({'href':'/confirm-email/' + this.model.get('activated_hash')})
            .text(this.model.get('activated_hash'));
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