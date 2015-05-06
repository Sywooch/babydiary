$(document).ready(function(){
    $('#tabpanel a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    })
    var activeDiv = $("#tabpanel li.active > a").attr('aria-controls');
    $("#tabpanel div#" + activeDiv).addClass('active');

    //inline-edit
    $(".inline-edit").on('click', function(e){
        e.preventDefault();
        $(this).toggle();
        $(this).siblings('input').toggleClass('hidden');
    });
    var setValue = function(elem){
        $(elem).siblings('span').toggle().text($(elem).val());
        $(elem).toggleClass('hidden');
    }

    $(document).on('blur', "input.inline-input", function(){
        setValue(this);
    });
    $('input').on('keyDown', ".inline-input", function(e){
        debugger;
        e.preventDefault();
        if (e.keyCode == 13){
            setValue($(this));
        }
    });

    $("#cpa-form").submit(function(e){
        return false;
    });

})
