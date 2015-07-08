/**
 * Created by Tatyana on 08.07.2015.
 */
var LayoutHelper = function(){
    var api = {
        hideError: function($el) {
            var $group = $el.closest('.form-group');

            $group.removeClass('has-error');
            $group.find('.help-block').html('').addClass('hidden');
        },
        showError: function($el, error) {
            var $group = $el.closest('.form-group');

            $group.addClass('has-error');
            $group.find('.help-block').html(error).removeClass('hidden');
        }
    };
    return api;
}()