/**
 * Created by Tatyana on 06.07.2015.
 */
var app = app || {};

var DiaryCommonView = Backbone.View.extend({
    events: {
        'click #diaryCommonButton': function (e) {
            e.preventDefault();
            this.saveDiary();
        },
        'keydown .form-control': function (e) {
            LayoutHelper.hideError($(e.currentTarget));
        }
    },
    // Use stickit to perform binding between
    // the model and the view
    bindings: {
        '#weight': {
            observe: 'weight'
        },
        '#height': {
            observe: 'height'
        },
        '#headCircumference': {
            observe: 'headCircumference'
        },
        '#chestCircumference': {
            observe: 'chestCircumference'
        },
        '#other': {
            observe: 'other'
        },
        '#notes': {
            observe: 'notes'
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


    saveDiary: function () {
        alert("Save");
        var self = this;
        if (this.model.isValid(true)) {
            this.model.save(null, {showLoader: true, success:function(model, response) {
                //self.remove();
            } });
        }
    },

    remove: function() {
        // Remove the validation binding
        Backbone.Validation.unbind(this);
        return Backbone.View.prototype.remove.apply(this, arguments);
    }
});

$(function () {
    var view = new DiaryCommonView({
        el: '#frmDiaryCommon',
        model: new app.DiaryCommon()
    });
    view.render();
});