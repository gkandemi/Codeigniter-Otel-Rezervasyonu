// StarHotel Javascripts
jQuery(document).ready(function () {
    "use strict";

	
    //Gmap
    if (jQuery().gMap) {
        jQuery('#map').gMap({
            zoom: 16, //Integer: Level of zoom in to the map
            markers: [{
                address: "Calle Hamburgo, Las Palmas, Spanje", //Address of the company
                html: "<h4>Our hotel</h4><p>This is our hotel</p>", //Quicktip
                popup: false, //Boolean	
                scrollwheel: false, //Boolean
                maptype: 'TERRAIN', //Choose between: 'HYBRID', 'TERRAIN', 'SATELLITE' or 'ROADMAP'.
                icon: {
                    image: "images/ui/gmap-icon.png",
                    iconsize: [42, 53],
                    iconanchor: [12, 46]
                },

                controls: {
                    panControl: false, //Boolean
                    zoomControl: false, //Boolean
                    mapTypeControl: true, //Boolean
                    scaleControl: true, //Boolean
                    streetViewControl: true, //Boolean
                    overviewMapControl: false //Boolean
                }
            }]
        });
    }


    // Owl sliders
    if (jQuery().owlCarousel) {
        jQuery("#owl-gallery").owlCarousel({
            autoPlay: 3000,
            //Set AutoPlay to 3 seconds
            items: 3,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 3],
            pagination: false
        });

        jQuery("#owl-reviews").owlCarousel({
            navigation: true,
            // Show next and prev buttons
            slideSpeed: 800,
            paginationSpeed: 400,
            singleItem: true,
            pagination: false,
            navigationText: ['<i class="fa fa-angle-left fa-3x"></i>', '<i class="fa fa-angle-right fa-3x"></i>'],
            // "singleItem:true" is a shortcut for:
            // items : 1, 
            // itemsDesktop : false,
            // itemsDesktopSmall : false,
            // itemsTablet: false,
            // itemsMobile : false
        });

        jQuery("#owl-standard").owlCarousel({
            navigation: true,
            // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            pagination: false,
            navigationText: ['<i class="fa fa-angle-left fa-3x"></i>', '<i class="fa fa-angle-right fa-3x"></i>'],
            responsive: true,
            responsiveRefreshRate: 200,
            responsiveBaseWidth: window,
            // "singleItem:true" is a shortcut for:
            // items : 1, 
            // itemsDesktop : false,
            // itemsDesktopSmall : false,
            // itemsTablet: false,
            // itemsMobile : false
        });
    }


    // Revolution slider
    if (jQuery().revolution) {
        jQuery('.banner').revolution({
            delay: 9000,
            startwidth: 1170,
            startheight: 449,
            autoHeight:"off",
			fullScreenAlignForce:"off",
            
            onHoverStop: "on",

            thumbWidth: 100,
            thumbHeight: 50,
            thumbAmount: 3,

            hideThumbsOnMobile: "on",
            hideBulletsOnMobile: "on",
            hideArrowsOnMobile: "on",
            hideThumbsUnderResoluition: 0,
			
			hideThumbs:0,
			hideTimerBar:"on",

			keyboardNavigation:"on",
			
            navigationType: "none",
            navigationArrows: "solo",
            navigationStyle: "round",

            navigationHAlign: "center",
            navigationVAlign: "bottom",
            navigationHOffset: 30,
            navigationVOffset: 30,

            soloArrowLeftHalign: "left",
            soloArrowLeftValign: "center",
            soloArrowLeftHOffset: 20,
            soloArrowLeftVOffset: 0,

            soloArrowRightHalign: "right",
            soloArrowRightValign: "center",
            soloArrowRightHOffset: 20,
            soloArrowRightVOffset: 0,

            touchenabled: "on",
			swipe_velocity:"0.7",
			swipe_max_touches:"1",
			swipe_min_touches:"1",
			drag_block_vertical:"false",

            stopAtSlide: -1,
            stopAfterLoops: -1,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            hideSliderAtLimit: 0,

            dottedOverlay: "none",

			fullWidth:"off",
			forceFullWidth:"off",
            fullScreen: "off",
            fullScreenOffsetContainer: "#topheader-to-offset",

            shadow: 0

        });
    }


    //PrettyPhoto
    if (jQuery().prettyPhoto) {
        jQuery('a[data-rel]').each(function () {
            jQuery(this).attr('rel', jQuery(this).data('rel'));
        });

        jQuery("a[rel^='prettyPhoto']").prettyPhoto({
            social_tools: false,
            animation_speed: 'normal', // fast/slow/normal 
            slideshow: 5000, // false OR interval time in ms
            autoplay_slideshow: false, // true/false
            opacity: 0.80, // Value between 0 and 1 
            show_title: true, // true/false            
			allow_resize: true, // Resize the photos bigger than viewport. true/false
            default_width: 500,
            default_height: 344,
            counter_separator_label: '/', // The separator for the gallery counter 1 "of" 2
            theme: 'pp_default', // light_rounded / dark_rounded / light_square / dark_square / facebook
            horizontal_padding: 20, // The padding on each side of the picture 
            hideflash: false, // Hides all the flash object on a page, set to TRUE if flash appears over prettyPhoto
            wmode: 'opaque', // Set the flash wmode attribute
            autoplay: true, // Automatically start videos: True/False 
            modal: false, // If set to true, only the close button will close the window
            deeplinking: true, // Allow prettyPhoto to update the url to enable deeplinking. 
            overlay_gallery: true, // If set to true, a gallery will overlay the fullscreen image on mouse over 
            keyboard_shortcuts: true, // Set to false if you open forms inside prettyPhoto 
            changepicturecallback: function () {}, // Called everytime an item is shown/changed 
            callback: function () {}, // Called when prettyPhoto is closed
        });
    }


    //Waypoints
    if (jQuery().waypoint) {
        jQuery('.bounce,.flash,.pulse,.shake,.swing,.tada,.wobble,.bounceIn,.bounceInDown,.bounceInLeft,.bounceInRight,.bounceInUp,.bounceOut,.bounceOutDown,.bounceOutLeft,.bounceOutRight,.bounceOutUp,.fadeIn,.fadeInDown,.fadeInDownBig,.fadeInLeft,.fadeInLeftBig,.fadeInRight,.fadeInRightBig,.fadeInUp,.fadeInUpBig,.fadeOut,.fadeOutDown,.fadeOutDownBig,.fadeOutLeft,.fadeOutLeftBig,.fadeOutRight,.fadeOutRightBig,.fadeOutUp,.fadeOutUpBig,.flip,.flipInX,.flipInY,.flipOutX,.flipOutY,.lightSpeedIn,.lightSpeedOut,.rotateIn,.rotateInDownLeft,.rotateInDownRight,.rotateInUpLeft,.rotateInUpRight,.rotateOut,.rotateOutDownLeft,.rotateOutDownRight,.rotateOutUpLeft,.rotateOutUpRight,.slideInDown,.slideInLeft,.slideInRight,.slideOutLeft,.slideOutRight,.slideOutUp,.hinge,.rollIn,.rollOut').waypoint(function () {

            var t = jQuery(this);

            if (jQuery(window).width() < 767) {
                t.delay(jQuery(this).data(1));
                t.addClass("animated");
            } else {
                t.delay(jQuery(this).data("start")).queue(function () {
                    t.addClass("animated");
                });
            }
        }, {
            offset: '75%',
            triggerOnce: true,
        });
    }


    // GO TOP
    //Show or hide "#go-top"
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 300) {

            jQuery('#go-top').fadeIn(200);

        } else {
            jQuery('#go-top').fadeOut(800);
        }
    });
    // Animate "#go-top"
    jQuery('#go-top').click(function (event) {
        event.preventDefault();
        jQuery('html, body').animate({
            scrollTop: 0
        }, '2000', 'swing');
    })

	
    //niceScroll
    if (jQuery().niceScroll) {
         $(".parallax-effect").niceScroll();
		 };
		 

    // Isotope
 window.onload = function () {	
    if (jQuery().isotope) {
        // cache container
        var jQuerycontainer1 = jQuery('.room-list');
        // initialize isotope
        jQuerycontainer1.isotope({
            filter: '*',
            masonry: {
                columnWidth: 1
            }
        });

        // filter items when filter link is clicked
        jQuery('#filters a').click(function () {
            var selector = jQuery(this).attr('data-filter');
            jQuerycontainer1.isotope({
                filter: selector
            });
            return false;
        });
        // set selected menu items
        var jQueryfilters = jQuery('#filters'),
            jQueryfiltersLinks = jQueryfilters.find('a');

        jQueryfiltersLinks.click(function () {
            console.log(this);
            var jQuerythis = jQuery(this).parent(this);
            // don't proceed if already selected
            if (jQuerythis.hasClass('active')) {
                return false;
            }
            var jQueryfilterLink = jQuerythis.parents('#filters');
            jQueryfilterLink.find('.active').removeClass('active');
            jQuerythis.addClass('active');
        });

        var jQuerycontainer2 = jQuery('.gallery');
        // initialize isotope
        jQuerycontainer2.isotope({
            filter: '*',
            masonry: {
                columnWidth: 1,
                gutterWidth: 0
            }
        });

        // filter items when filter link is clicked
        jQuery('#filters a').click(function () {
            var selector = jQuery(this).attr('data-filter');
            jQuerycontainer2.isotope({
                filter: selector
            });
            return false;
        });
        // set selected menu items
        var jQueryfilters = jQuery('#filters'),
            jQueryfiltersLinks = jQueryfilters.find('a');

        jQueryfiltersLinks.click(function () {
            console.log(this);
            var jQuerythis = jQuery(this).parent(this);
            // don't proceed if already selected
            if (jQuerythis.hasClass('active')) {
                return false;
            }
            var jQueryfilterLink = jQuerythis.parents('#filters');
            jQueryfilterLink.find('.active').removeClass('active');
            jQuerythis.addClass('active');
        });
    }
}

    // Sticky Navigation
    if (jQuery().sticky) {
        jQuery(".navbar").sticky({
            topSpacing: 0,
        });;
    }
    var shrinkHeader = 100;
    jQuery(window).scroll(function () {
        var scroll = getCurrentScroll();
        if (scroll >= shrinkHeader) {
            jQuery('.navbar').addClass('shrink');
        } else {
            jQuery('.navbar').removeClass('shrink');
        }
    });

    function getCurrentScroll() {
        return window.pageYOffset || document.documentElement.scrollTop;
    }


    // Dropdown hover
    if (jQuery().dropdownHover) {
        jQuery('.js-activated').dropdownHover().dropdown();
        jQuery(document).on('click', '.yamm .dropdown-menu', function (e) {
            e.stopPropagation()
        })
    }


    // Reservation Form	
    //jQueryUI - Datepicker
    if (jQuery().datepicker) {
        jQuery('#checkin').datepicker({
            showAnim: "drop",
            dateFormat: "dd/mm/yy",
            minDate: "-0D",
        });

        jQuery('#checkout').datepicker({
            showAnim: "drop",
            dateFormat: "dd/mm/yy",
            minDate: "-0D",
            beforeShow: function () {
                var a = jQuery("#checkin").datepicker('getDate');
                if (a) return {
                    minDate: a
                }
            }
        });
        jQuery('#checkin, #checkout').on('focus', function () {
            jQuery(this).blur();
        }); // Remove virtual keyboard on touch devices
    }


    //Popover
    jQuery('[data-toggle="popover"]').popover();


    // Guests
    // Show guestsblock onClick
    var guestsblock = jQuery(".guests");
    var guestsselect = jQuery(".guests-select");
    var save = jQuery(".button-save");
    guestsblock.hide();

    guestsselect.click(function () {
        guestsblock.show();
    });

    save.click(function () {
        guestsblock.fadeOut(120);
    });


    // Count guests script
    var opt1;
    var opt2;
    var total;
    jQuery('.adults select, .children select').change(

        function () {
            opt1 = jQuery('.adults').find('option:selected');
            opt2 = jQuery('.children').find('option:selected');

            total = +opt1.val() + +opt2.val();
            jQuery(".guests-select .total").html(total);
        });


});