(function($) {
"use strict";

/* ==============================================
LOADER -->
=============================================== */

    $(window).load(function() {
        $('#loader').delay(300).fadeOut('slow');
        $('#loader-container').delay(200).fadeOut('slow');
        $('body').delay(300).css({'overflow':'visible'});
    })

/* ==============================================
ANIMATION -->
=============================================== */

    new WOW({
      boxClass:     'wow',      // default
      animateClass: 'animated', // default
      offset:       0,          // default
      mobile:       true,       // default
      live:         true        // default
    }).init();


/* ==============================================
TOOLTIP -->
=============================================== */

	$('body').tooltip({
		selector: "[data-tooltip=tooltip]",
		container: "body"
	});

/* ==============================================
CAROUSEL -->
=============================================== */

    $('#owl-team').owlCarousel({
        loop:true,
        margin:30,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    })

/* ==============================================
ROTATE TEXT -->
=============================================== */

	$(".rotate").textrotator({
		animation: "fade",
		speed: 1000
	});

/* ==============================================
ACCORDION -->
=============================================== */

    function toggleChevron(e) {
        $(e.target)
            .prev('.panel-heading')
            .find("i.indicator")
            .toggleClass('fa-minus fa-plus');
    }
    $('#accordion').bind('hidden.bs.collapse', toggleChevron);
    $('#accordion').bind('shown.bs.collapse', toggleChevron);

/* ==============================================
JS WINDOW HEIGHT -->
=============================================== */

    $(".js-height-full").height($(window).height());
        $(".js-height-parent").each(function(){
        $(this).height($(this).parent().first().height());
    });

/* ==============================================
TESTIMONIAL -->
=============================================== */
  $('#quote-carousel').carousel({
    pause: true,
    interval: 4000,
  });

})(jQuery);