/**
 * Created by Tatyana on 08.07.2015.
 */
var LayoutHelper = function(){
    var $loader = $('.ajax-loader');
    var api = {
        hideFieldError: function($el) {
            var $group = $el.closest('.form-group');

            $group.removeClass('has-error');
            $group.find('.help-block').html('');
            $el.siblings('span').attr('class', 'validation-icon');
            //$el.attr('data-original-title','');
        },
        showFieldError: function($el, error) {
            var $group = $el.closest('.form-group');

            $group.addClass('has-error');
            $group.find('.help-block').html(error);
            $el.siblings('span').attr('class', 'validation-icon icon-cancel');
            //$el.attr('data-original-title',error);
        },
        showFieldValid: function($el) {
            this.hideFieldError($el);
            if ($el.val()) {
                $el.siblings('span').attr('class', 'validation-icon icon-ok');
            }
        },
        showSpin: function($el) {
            $el.siblings('span').attr('class', 'validation-icon icon-spin4 animate-spin');
        },
        showLoader: function() {
            $loader.show();
        },
        hideLoader: function() {
            $loader.hide();
        },
        getCsrf: function(){
           return $('meta[name="csrf-token"]').attr("content");
        },
        getLabelTextFor: function(inputId) {
            return $('label[for="' + inputId + '"]').text();
        }
    };
    return api;
}();

$(document).ready(function(){
    //$('input').tooltip({
    //    "data-toggle" : "tooltip",
    //    "data-placement" : "top",
    //    "data-original-title" : "",
    //    "data-trigger" : "manual"
    //}).on({
    //    'mouseenter': function() {
    //        $(this).tooltip('show');
    //    },
    //    'mouseleave focusin click keydown': function() {
    //        $(this).tooltip('hide');
    //    }
    //});
    $("input[data-inputmask-regex]").inputmask('Regex', {'rightAlign':true, 'showMaskOnHover': false});
    $("<span class='validation-icon'></span>").insertAfter(".form-control");
});