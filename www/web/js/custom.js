$(document).ready(function(){
    $('#tabpanel a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    })
    var activeDiv = $("#tabpanel li.active > a").attr('aria-controls');
    $("#tabpanel div#" + activeDiv).addClass('active');



    $("#cpa-form").submit(function(e){
        return false;
    });

})
