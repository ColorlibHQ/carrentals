(function ($) {
    'use strict';

    //  Mailchimp ajax
    $('#mc_embed_signup').find('form').ajaxChimp();

    // About widget owlCarousel
    $('.active-about-carusel').owlCarousel({
        items:1,
        loop:true,
        margin:30,
        dots: true
    });

    // Exibition widget owlCarousel
    $('.active-model-carusel').owlCarousel({
        items:1,
        loop:true,
        margin:30,
        dots: true
    });
    // Datepicker
    $( function() {
        $( "#datepicker" ).datepicker();
        $( "#datepicker2" ).datepicker();
     });

    //  Gallery
    $("#grid-container").justifiedGallery({
        rowHeight : 200,
        captions : false,
        margins : 30
    });

    //  Counter Js 
    if( $('.facts-area').length ) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    }

})(jQuery);