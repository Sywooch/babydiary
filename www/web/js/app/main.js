$(function(){

    function AppViewModel() {
        this.showLoader = function(){
            $('.freeze-panel').show();
        };

        this.hideLoader = function(){
            $('.freeze-panel').hide();
        };

        this.lastName = "Bertington";
    }

    ko.applyBindings(new AppViewModel());
})();