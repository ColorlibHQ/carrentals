( function($) {
    
    /* Create Repeater */
    $("#repeater").createRepeater({
        showFirstItemToDefault: true,
        name: 'ddd'
    });

    /* Create Repeater */
    $("#pickup").createRepeater({
        showFirstItemToDefault: true,
        name: 'ddd'
    });
    /* Create Repeater */
    $("#dropoff").createRepeater({
        showFirstItemToDefault: true,
        name: 'ddd'
    });

    // Tab 
    $('.tablist').on( 'click', function() {
        $( '.booking-settings' ).hide();
        $( '.booking-lists' ).show();
    } );

    $('.tabsettings').on( 'click', function() {
        $( '.booking-lists' ).hide();
        $( '.booking-settings' ).show();
    } );



} )( jQuery );