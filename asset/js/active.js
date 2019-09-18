(function($) {
    'use strict';
    if ($.fn.menumaker) {
        $("#cssmenu").menumaker({
            title: "Menu",
            breakpoint: 991,
            format: "multitoggle"
        });
    }
    
    // Declare Carousel jquery object
    var owl = $('.active-main-slider');
    // Carousel initialization
    owl.owlCarousel({
        items: 1,
        nav: true,
        loop: true,
        dots: false,
        autoplay: false,
        navText: ["<i></i>", "<i></i>"],
        smartSpeed: 1000
    });

    // add animate.css class(es) to the elements to be animated
    function setAnimation(_elem, _InOut) {
        // Store all animationend event name in a string.
        // cf animate.css documentation
        var animationEndEvent = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

        _elem.each(function() {
            var $elem = $(this);
            var $animationType = 'animated ' + $elem.data('animation-' + _InOut);

            $elem.addClass($animationType).one(animationEndEvent, function() {
                $elem.removeClass($animationType); // remove animate.css Class at the end of the animations
            });
        });
    }

    // Fired before current slide change
    owl.on('change.owl.carousel', function(event) {
        var $currentItem = $('.owl-item', owl).eq(event.item.index);
        var $elemsToanim = $currentItem.find("[data-animation-out]");
        setAnimation($elemsToanim, 'out');
    });

    // Fired after current slide has been changed
    var round = 0;
    owl.on('changed.owl.carousel', function(event) {

        var $currentItem = $('.owl-item', owl).eq(event.item.index);
        var $elemsToanim = $currentItem.find("[data-animation-in]");

        setAnimation($elemsToanim, 'in');
    });

    $('.blog-slider-active').owlCarousel({
        items: 3,
        nav: true,
        autoplay: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        smartSpeed: 1000,
        margin: 30,
        rewind: true,
        responsive: {

            0: {
                items: 1,
            },
            // breakpoint from 480 up
            480: {
                items: 1,
                margin: 15
            },
            // breakpoint from 768 up
            768: {
                items: 2,
            },
            992: {
                items: 3,
            }
        }

    });
    $('.project-slider-active').owlCarousel({
        items: 3,
        nav: true,
        autoplay: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        smartSpeed: 1000,
        margin: 30,
        rewind: true,
        responsive: {

            0: {
                items: 1,
            },
            // breakpoint from 480 up
            480: {
                items: 1,
                margin: 15
            },
            // breakpoint from 768 up
            768: {
                items: 2,
            },
            992: {
                items: 3,
            }
        }

    });
    
    
    jQuery('.testimonial-slider-active').owlCarousel({
        items: 1, 
        nav: false,
        autoplay: true,
        smartSpeed: 1000,
        margin:0,
        animateOut: 'slideOutDown',
        animateIn: 'flipInX',

    });
    $('.brand-slider-active').owlCarousel({
        items: 5,
        nav: true,
        autoplay: true,
        navText: ["", ""],
        smartSpeed: 1000,
        margin: 30,
        rewind: true,
        dots: false,
        responsive: {

            0: {
                items: 2,
            },
            // breakpoint from 480 up
            480: {
                items: 3,
                margin: 15
            },
            // breakpoint from 768 up
            768: {
                items: 5,
            },
            992: {
                items: 5,
            }
        }

    });
    $('.team-slider-active').owlCarousel({
        items: 4,
        nav: true,
        autoplay: true,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        smartSpeed: 1000,
        margin: 30,
        rewind: true,
        dots: true,
        responsive: {

            0: {
                items: 1,
                margin: 0,
            },
            // breakpoint from 480 up
            480: {
                items: 2,
                margin: 15
            },
            // breakpoint from 768 up
            768: {
                items: 3,
            },
            992: {
                items: 4,
            }
        }

    });

    $('.project-gallery-slider').owlCarousel({
        items: 1,
        nav: true,
        autoplay: true,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        smartSpeed: 1000,
        margin: 30,
        loop: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
    });

    if ($.fn.counterUp) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    }

    if ($.fn.isotope) {

        $('.project-nav ul li').on('click', function() {
            $(".project-nav ul li").removeClass("active");
            $(this).addClass("active");
            var selector = $(this).attr('data-filter');
            $(".projectactive").isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false,
                }
            });
            return false;
        });
    }

    $(window).on('load', function() {
        $(".projectactive").isotope({
            filter: '*',
        });
    });
    // 3. Style a DIV and chage cursor color:
    jQuery(window).on('scroll', function() {
        var topspace = $(this).scrollTop();
        if (topspace > 1) {
            $('.menu-area').addClass("sticky-menu");
        } else {
            $('.menu-area').removeClass("sticky-menu");
        }
        if (topspace > 300) {
            $('.scrooltotop').css('display', 'block');
        } else {
            $('.scrooltotop').css('display', 'none');
        }
    });
    // jQuery('.testimonial-section ').append('<div class="foroverlay"></div>');
    jQuery(window).on('load', function() {
        $('#preloader').fadeOut('slow', function() {
            $(this).remove();
        });
        $('.scrooltotop').css('display', 'none');

    });
    $('.scrooltotop').click(function() {
        $('html,body').animate({ scrollTop: 0 }, 'slow');
        return false;
    });

    $('.searchbtn').on('click', function() {
        $('.popup-search-form').addClass('searchopen');
    });
    $('.closebtn').on('click', function() {
        $('.popup-search-form').removeClass('searchopen');
    });


})(jQuery);