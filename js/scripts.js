jQuery(document).ready(function(){


    // ********** HAMBURGER MENU **********
    var toggled = false;
    jQuery('#hamburger-menu').click(function () {
        if(!toggled) {
            jQuery( ".links" ).animate({width: '320px'});
            toggled = true;
        } else {
            jQuery( ".links" ).animate({width: '0px'});
            toggled = false;
        }
    });

    // ********** ARCHIVE PRINT BOX ANIMATION **********
    jQuery('.pl-print article img').hover(function () {
       jQuery('.pl-print article .title').slideToggle();
    });




});