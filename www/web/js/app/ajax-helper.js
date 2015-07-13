/**
 * Created by Tatyana on 12.07.2015.
 */
var AjaxHelper = function(){
    var api = {
        post: function(url, data, successCallback, errorCallback) {
            data._csrf = LayoutHelper.getCsrf();
            $.ajax({
                type: 'POST',
                url: url,
                data: data,
                success: successCallback,
                error: errorCallback
            });
        }
    };
    return api;
}()