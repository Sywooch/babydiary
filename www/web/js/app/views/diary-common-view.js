/**
 * Created by Tatyana on 06.07.2015.
 */
var app = app || {};

var DiaryCommonView = Backbone.View.extend({
    events: {
        'click #diaryCommonButton': function (e) {
            e.preventDefault();
            this.saveDiary();
        }
    },
    // Use stickit to perform binding between
    // the model and the view
    bindings: {
        '#weight': {
            observe: 'weight',
            onSet: 'makeANumber'
        },
        '#height': {
            observe: 'height',
            onSet: 'makeANumber'
        },
        '#headCircumference': {
            observe: 'headCircumference',
            onSet: 'makeANumber'
        },
        '#chestCircumference': {
            observe: 'chestCircumference',
            onSet: 'makeANumber'
        },
        '#other': {
            observe: 'other'
        },
        '#notes': {
            observe: 'notes'
        }
    },

    initialize: function () {
    },

    render: function() {
        this.stickit();
        return this;
    },

    makeANumber: function (value, options) {
        if (_.isEmpty(value)) {
            return "";
        }
        if($(options.selector).inputmask("isComplete")){
                return value;
        }
        return NaN;
    },
    saveDiary: function () {
        alert("Save");
        var self = this;
        if (this.model.isValid(true)) {
            this.model.save(null, {showLoader: true, success:function(model, response) {
                //self.remove();
            } });
        }
    }

});

$(function () {
    var view = new DiaryCommonView({
        el: '#frmDiaryCommon',
        model: new app.DiaryCommon()
    });
    view.render();
});