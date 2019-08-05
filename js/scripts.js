jQuery(document).ready(function () {


    // ********** HAMBURGER MENU **********
    var toggled = false;
    jQuery('#hamburger-menu').click(function () {
        if (!toggled) {
            jQuery(".links").animate({width: '320px'});
            toggled = true;
        } else {
            jQuery(".links").animate({width: '0px'});
            toggled = false;
        }
    });

    // ********** ARCHIVE PRINT BOX ANIMATION **********
    jQuery('.pl-print article').hover(function () {
        jQuery(this).children('.title').slideToggle('fast');
        // jQuery(this).children('.title').hover(function () {
        //     jQuery(this).parent().children('.post-thumbnail').children().toggleClass('grayscale-0');
        // });
    });

    // ********** BRANDING PRINT BOX ANIMATION **********
    jQuery('.pl-branding article').hover(function () {
        jQuery(this).children('.title').slideToggle('fast');
        // jQuery(this).children('.title').hover(function () {
        //     jQuery(this).parent().children('.post-thumbnail').children().toggleClass('grayscale-0');
        // });
    });



    // ********** MULTIMEDIA EMBED PLAY **********

    jQuery('.embed-front').click(function () {
        jQuery(this).toggle();
        var id = jQuery(this).parent().children('iframe').attr('id');
        var iframe = document.getElementById(id);
        iframe.setAttribute('autoplay', true);
        var player = new Vimeo.Player(iframe);
        player.play();
    });

    jQuery("#scroll-to-top").click(function() {
        // jQuery("html, body").animate({ scrollTop: 0 }, "slow");
        window.scrollTo({top: 0, behavior: 'smooth'});

    });

});