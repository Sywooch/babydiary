/**
 * Created by Tatyana on 08.07.2015.
 */
var LayoutHelper = function(){
    var $loader = $('.ajax-loader');
    var api = {
        hideError: function($el) {
            //var $group = $el.closest('.form-group');
            //
            //$group.removeClass('has-error');
            //$group.find('.help-block').html('').addClass('hidden');
            $el.attr('data-original-title','');
            $el.next('span').attr('class', 'validation-icon');
        },
        showError: function($el, error) {
            //var $group = $el.closest('.form-group');
            //
            //$group.addClass('has-error');
            //$group.find('.help-block').html(error).removeClass('hidden');
            $el.attr('data-original-title',error);
            $el.next('span').attr('class', 'validation-icon icon-cancel');
        },
        showValid: function($el) {
            this.hideError($el);
            $el.next('span').attr('class', 'validation-icon icon-ok');
        },
        showSpin: function($el) {
            $el.next('span').attr('class', 'validation-icon icon-spin4 animate-spin');
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
            return $('label[for*="' + inputId + '"]').text();
        }
    };
    return api;
}();

$(document).ready(function(){
    $('input').attr({
        "data-toggle" : "tooltip",
        "data-placement" : "top",
        "title" : ""
    });
    $('[data-toggle="tooltip"]').tooltip();
});