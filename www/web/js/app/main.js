$(function(){
    var vm ={

    }



    function AppViewModel() {
        this.showLoader = function(){
            $('.freeze-panel').show();
        };

        this.hideLoader = function(){
            $('.freeze-panel').hide();
        };
    }

    ko.applyBindings(new AppViewModel());
})();