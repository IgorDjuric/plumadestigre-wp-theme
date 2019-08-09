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

    jQuery("#scroll-to-top").click(function () {
        // jQuery("html, body").animate({ scrollTop: 0 }, "slow");
        window.scrollTo({top: 0, behavior: 'smooth'});

    });


    // ********** BACK TO TOP ARROW ANIMATION **********
    var backToTopAnimationRunning = false;
    jQuery('#g1-back-to-top').mouseover(function () {
        if (!backToTopAnimationRunning) {
            jQuery('#g1-back-to-top i').animate({marginTop: "-12"}, 100).animate({marginTop: "10"}, 0).animate({marginTop: "0"}, 100);
            backToTopAnimationRunning = true;
        }
    });
    jQuery('#g1-back-to-top').mouseleave(function () {
        backToTopAnimationRunning = false;
    });
    jQuery("#g1-back-to-top").click(function () {
        // jQuery("html, body").animate({ scrollTop: 0 }, "slow");
        window.scrollTo({top: 0, behavior: 'smooth'});
    });

    var showed = false;
    jQuery(document).scroll(function () {
        if (!showed && jQuery(window).scrollTop() !== 0) {
            jQuery("#g1-back-to-top").slideToggle();
            showed = true;
        }
        if (showed && jQuery(window).scrollTop() === 0) {
            jQuery("#g1-back-to-top").slideToggle();
            showed = false;
        }
    });

// PHOTOGRAPHY GALLERY MASONARY
    var grid = jQuery('.grid').masonry({
        itemSelector: '.grid-item',
        percentPosition: true,
        columnWidth: '.grid-sizer'
    });

// layout Masonry after each image loads
    grid.imagesLoaded().progress(function () {
        grid.masonry();
    });




    var maxHeight = jQuery(window).height();
    jQuery(document).on('click', '[data-toggle="lightbox"]', function (event) {
        event.preventDefault();
        jQuery(this).ekkoLightbox({
            alwaysShowClose: true,
            leftArrow: '<div class="lightbox-left-arrow"></div>',
            rightArrow: '<div class="lightbox-right-arrow"></div>',
            maxHeight: maxHeight
        });
    });


});

// jQuery('.swipebox').swipebox();

// jQuery('.grid-item').click(function () {
//     jQuery('.pl-swipebox-bg').addClass('d-block');
// });
// jQuery('#swipebox-close').click(function () {
//    jQuery('.pl-swipebox-bg').();
// });