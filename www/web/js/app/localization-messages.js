/**
 * Created by Tatyana on 30.07.2015.
 */
var LocalizationMessages = {};
$(function(){
    AjaxHelper.get('api/get-validation-messages', null,
        function(data) {
            LocalizationMessages = JSON.parse(data);
        });
});