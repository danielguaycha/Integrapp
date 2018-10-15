jQuery(document).ready(function($) {


    // Control de menu lateral - Evento del boton

    $('#button-display-menu').click(function() {
        $('.menu-general').toggleClass('menu_open');
    });


    // Main_menu - - control de los eventos touch
    var sw = document.body.clientWidth;
    if (sw <= 900) {
        //panleft panright tap press
        var myElement = document.getElementById('body');
        var mc = new Hammer(myElement);
        mc.on("panleft", function() {
            $('.menu-general').addClass('menu_open');
        });
        mc.on("panright", function() {
            $('.menu-general').removeClass('menu_open');
        });
    }

    $('[data-toggle="tooltip"]').tooltip();

    $('.carousel').carousel({
        interval: 5000,
        keyboard: true,
    });

    $('#color-Login').click(function(){
            $('.frm-registro').toggleClass("open");
            $('.menu-general').removeClass('menu_open');
            });
        $(".bg").click(function(){
            $('.frm-registro').removeClass("open");
        });

});
