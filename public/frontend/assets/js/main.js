/* ==========================================================================================
  Theme Name: JD
  Author: vs-themes
  Support: visakhinkollam@gmail.com
  Description: JD - Photography Portfolio html Template
  Version: 1.0
========================================================================================== */


/** =============== JS Index

01. Preloader fade out
02. Gallery filtering
03. Owl carousel Sliders
04. Wow animation
05. Menu submenu dropmenu
06. Cout up number on scroll
07. Magnific pop up
08. Mobile menu integration
09. Menu open close
10. header fixing
11. Coming soon time count
12. Other js scripts


=============== */
(function($) {
    "use strict";


    $(window).on('load', function() {

        /*------------------------------------------------------------------------------*/
        /*01. Preloader fade out
/*------------------------------------------------------------------------------*/

        $('.blobs').delay('100').fadeOut(1000);
        /*------------------------------------------------------------------------------*/
        /*02. Gallery filtering
/*------------------------------------------------------------------------------*/

        // masonry gallery listing
        var $portfolioGrid = $('.portfolio-filter').isotope({
            itemSelector: '.grid-item',
            percentPosition: true,
            masonry: {
                columnWidth: '.grid-sizer'
            }
        });
        // masonry work 2 listing
        var $gridworks = $('.work-masonry-div').isotope({
            itemSelector: '.work-grid-item',
            percentPosition: true
        });

        // gallery filtering option
        $('.gallery-filter').on('click', 'button', function() {
            var filterValueGallery = $(this).attr('data-filter');
            $portfolioGrid.isotope({
                filter: filterValueGallery
            });
        });


        // gallery page button active style
        $('.btn-filter').on('click', function(e) {
            $(this).siblings('.active').removeClass('active');
            $(this).addClass('active');
            event.preventDefault();
        });
    });

    /*------------------------------------------------------------------------------*/
    /*03. Owl carousel Sliders
/*------------------------------------------------------------------------------*/
    // Banner slider
    var banner1 = $('.slider-1');
    banner1.owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 6000,
        autoplayHoverPause: true,
        margin: 0,
        nav: true,
        navText: ["<i class='fas fa-long-arrow-alt-left'></i>", "<i class='fas fa-long-arrow-alt-right'></i>"],
        dots: false
    });
    banner1.on('changed.owl.carousel', function(event) {
        var item = event.item.index - 2; // Position of the current item
        $('.banner-content').removeClass('wow fadeInUp');
        $('.owl-item').not('.cloned').eq(item).find('.banner-content').addClass('wow fadeInUp');
    });


    // Banner slider 2
    var banner2 = $('.main-slider');
    banner2.owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 6000,
        autoplayHoverPause: true,
        margin: 0,
        nav: true,
        navText: ["<i class='fas fa-long-arrow-alt-left'></i>", "<i class='fas fa-long-arrow-alt-right'></i>"],
        dots: false
    });
    // Relative product slider
        var reprdtSlider = $('.relative-prdt-slider');
        reprdtSlider.owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            dots:false,
            autoplay: true,
            autoplayTimeout: 4000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
        });

    // Banner slider 3
    var banner3 = $('.main-slider-2');
    banner3.owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 6000,
        autoplayHoverPause: true,
        smartSpeed: 450,
        margin: 0,
        nav: true,
        navText: ["<i class='fas fa-arrow-left'></i>", "<i class='fas fa-arrow-right'></i>"],
        dots: false
    });


    // Inner Banner slider 3
    var innerBanner = $('.inner-banner-slider');
    innerBanner.owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        animateOut: 'fadeOut',
        smartSpeed: 450,
        margin: 0,
        nav: true,
        navText: ["<i class='fas fa-arrow-left'></i>", "<i class='fas fa-arrow-right'></i>"],
        dots: false
    });


    // Post image slider
    var postSlider = $('.post-image-slider');
    postSlider.owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 4000,
        margin: 0,
        nav: true,
        navText: ["<i class='fas fa-arrow-left'></i>", "<i class='fas fa-arrow-right'></i>"],
        dots: false
    });



    // Testimonial slider
    $('.testimonial-slide').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        dots: false,
        autoplay: true,
        navText: ["<i class='fas fa-long-arrow-alt-left'></i>", "<i class='fas fa-long-arrow-alt-right'></i>"],
        autoplayTimeout: 6000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    // Client logo slider
    $('.client-slider').owlCarousel({
        loop: true,
        margin: 90,
        autoplay: true,
        nav: false,
        dots: false,
        slideTransition: 'linear',
        autoplayTimeout: 5000,
        autoplaySpeed: 5000,
        responsive: {
            0: {
                items: 2,
                margin: 30
            },
            576: {
                items: 2,
                margin: 20
            },
            600: {
                items: 3
            },
            800: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });


    // Client logo slider
    $('.client-slider-2').owlCarousel({
        loop: true,
        margin: 110,
        autoplay: true,
        nav: false,
        dots: false,
        slideTransition: 'linear',
        autoplayTimeout: 5000,
        autoplaySpeed: 5000,
        responsive: {
            0: {
                items: 2,
                margin: 60
            },
            576: {
                items: 2,
                margin: 40
            },
            600: {
                items: 3,
                margin: 50
            },
            1000: {
                items: 3
            }
        }
    });


    // Blog slider
    var blogSlider = $('.blog-slider');
    blogSlider.owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        dots:false,
        autoplay: true,
        autoplayTimeout: 4000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
    // Custom blog nav buttons
    $('.blog-nav-left').on('click', function() {
        event.preventDefault();
        blogSlider.trigger('prev.owl.carousel');
    });
    $('.blog-nav-right').on('click', function() {
        event.preventDefault();
        blogSlider.trigger('next.owl.carousel');
    });


    // Relative blog slider
    var relativeSlider = $('.relative-slider');
    relativeSlider.owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 4000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 2
            }
        }
    });

    // Custom blog nav buttons
    $('.relative-nav-left').on('click', function() {
        event.preventDefault();
        relativeSlider.trigger('prev.owl.carousel');
    });
    $('.relative-nav-right').on('click', function() {
        event.preventDefault();
        relativeSlider.trigger('next.owl.carousel');
    });



    // Relative1 blog slider
    var relativeSlider1 = $('.relative-slider1');
    relativeSlider1.owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 4000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    });

    // Custom blog nav buttons
    $('.relative-nav-left').on('click', function() {
        event.preventDefault();
        relativeSlider1.trigger('prev.owl.carousel');
    });
    $('.relative-nav-right').on('click', function() {
        event.preventDefault();
        relativeSlider1.trigger('next.owl.carousel');
    });





    // full gallery slider
    var owlfullslide = $('.full-gallery-slide');
    owlfullslide.owlCarousel({
        loop: false,
        margin: 0,
        nav: true,
        dots: false,
        rewind: true,
        navText: ["<i class='fas fa-long-arrow-alt-left'></i>", "<i class='fas fa-long-arrow-alt-right'></i>"],
        autoplay: true,
        autoplayTimeout: 3000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            800: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });


    // testimonial slider
    var testimonial2 = $('.testimonial-slide2');
    testimonial2.owlCarousel({
        loop: true,
        margin: 70,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
    // Custom blog nav buttons
    $('.quote-nav.left').on('click', function() {
        event.preventDefault();
        testimonial2.trigger('prev.owl.carousel');
    });
    $('.quote-nav.right').on('click', function() {
        event.preventDefault();
        testimonial2.trigger('next.owl.carousel');
    });



    // testimonial slider3
    var testimonial3 = $('.testimonial-slide3');
    testimonial3.owlCarousel({
        loop: true,
        margin: 70,
        nav: true,
        navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1000: {
                items: 2
            }
        }
    });

    // single project slider
    var singleProject = $('.single-prjt-slide');
    singleProject.owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 6000,
        margin: 0,
        nav: true,
        navText: ["<i class='fas fa-long-arrow-alt-left'></i>", "<i class='fas fa-long-arrow-alt-right'></i>"],
        dots: false
    });


    /*------------------------------------------------------------------------------*/
    /*04. Wow animation
/*------------------------------------------------------------------------------*/
    new WOW().init();


    /*------------------------------------------------------------------------------*/
    /*05.Menu submenu dropmenu
/*------------------------------------------------------------------------------*/
    // main menu drop down
    $('.has-sub').on('click', function() {
        $(this).toggleClass('opened');
        return false;
    });


    /*------------------------------------------------------------------------------*/
    /*06. Cout up number on scroll
/*------------------------------------------------------------------------------*/
    $('.counter').counterUp({
        time: 2000
    });

    /*------------------------------------------------------------------------------*/
    /*07. Magnific pop up
/*------------------------------------------------------------------------------*/
    $('.popup-video').magnificPopup({
        type: 'iframe'
    });

    // gallery pop up
    $('.gallery-links').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    /*------------------------------------------------------------------------------*/
    /*08. Mobile menu integration
/*------------------------------------------------------------------------------*/
    // Mobile menu integration index 1
    $('.main-menu-3').meanmenu({
        meanMenuContainer: '.mobile-menu',
        meanScreenWidth: "991"
    });
    /*------------------------------------------------------------------------------*/
    /*09. Menu open close
/*------------------------------------------------------------------------------*/

    // main Menu open close
    $('.menu-bars').on('click', function() {
        $(this).toggleClass('opened');
        $('.fx-menu-wrapper').toggleClass('visible');
        $('.bg-menu-overlay').toggleClass('visible');
        $('body,html').toggleClass('noscrol');
        return false;
    });
    $('.close-menu').on('click', function() {
        $('.menu-bars').removeClass('opened');
        $('.fx-menu-wrapper').removeClass('visible');
        $('.bg-menu-overlay').removeClass('visible');
        $('body,html').removeClass('noscrol');
        return false;
    });
    $('.bg-menu-overlay').on('click', function() {
        $('.menu-bars').removeClass('opened');
        $('.fx-menu-wrapper').removeClass('visible');
        $('.bg-menu-overlay').removeClass('visible');
        $('body,html').removeClass('noscrol');
        return false;
    });

    // sidebar menu open close

    $('.close-icon').on('click', function() {
        $('.sidebar-left').addClass('closed');
        $('.gallery-right').addClass('closed');
        $('.menu-open-toggle').addClass('show');
        return false;
    });

    $('.menu-open-toggle').on('click', function() {
        $('.sidebar-left').removeClass('closed');
        $('.gallery-right').removeClass('closed');
        $(this).removeClass('show');
        return false;
    });

    // closing side menu on responsive


    $(window).on("resize", function(e) {
        checkScreenSize();
    });

    checkScreenSize();

    function checkScreenSize() {
        var newWindowWidth = $(window).width();
        if (newWindowWidth < 768) {
            $('.sidebar-left').addClass('closed');
            $('.gallery-right').addClass('closed');
            $('.menu-open-toggle').addClass('show');
        } else {
            $('.sidebar-left').removeClass('closed');
            $('.gallery-right').removeClass('closed');
            $('.menu-open-toggle').removeClass('show');
        }
    }

    // changing menu to drop down
    $('.toggle-category').on('click', function() {
        $('.nav-links1.list-type2').toggleClass('open');
        return false;
    });




    /*------------------------------------------------------------------------------*/
    /*10 header fixing
/*------------------------------------------------------------------------------*/

    $(window).on('scroll', function() {
        //fix header1 on scroll
        var scroll1 = $(window).scrollTop();
        if (scroll1 < 100) {
            $(".header-1,.type-3,.type4").removeClass("fixed-nav");
        } else {
            $(".header-1,.type-3,.type4").addClass("fixed-nav");
        }

        ////fade in  footer button on scroll
        if ($(this).scrollTop() > 800) {
            $(".scroll-btn").addClass("opacity-10"); //showing scroll up button
        } else {
            $(".scroll-btn").removeClass("opacity-10"); //hiding scroll up button
        }

    });

    //scroll to top on cllick footer button
    $(".scroll-btn").on('click', function(event) {
        event.preventDefault();
        $("html, body").animate({
            scrollTop: 0
        }, 800);
    });

    /*------------------------------------------------------------------------------*/
    /*11. Coming soon time count
/*------------------------------------------------------------------------------*/
    //coming soon date count
    $('.clock').countdown('2020/10/10', function(event) {
        var $this = $(this).html(event.strftime('' +
            '<div class="week-count"><h1>%w <sup>Weeks</sup></h1></div>  ' +
            '<div class="hour-week d-flex  justify-content-center">  ' +
            '<div class="hour-count"><h1>%d <sup>Days</sup></h1></div>  ' +
            '<div class="hour-count"><h1>%H <sup>Hours</sup></h1></div>  ' +
            '<div class="min-count"> <h1>%M <sup>Mins</sup></h1> </div>  ' +
            '<div class="sec-count"> <h1>%S <sup>Sec</sup></h1> </div> ' +
            '</div>  '));
    });


    /*------------------------------------------------------------------------------*/
    /*11a. Event countdown timer
/*------------------------------------------------------------------------------*/
    //Event countdown timer
    if ($('.time-countdown').length) {
        $('.time-countdown').each(function() {
            var $this = $(this),
                finalDate = $(this).data('countdown');
            $this.countdown(finalDate, function(event) {
                var $this = $(this).html(event.strftime('' + '<div class="counter-column"><span class="count">%D</span>Days</div> ' + '<div class="counter-column"><span class="count">%H</span>Hours</div>  ' + '<div class="counter-column"><span class="count">%M</span>Minutes</div>  ' + '<div class="counter-column"><span class="count">%S</span>Second</div>'));
            });
        });
    }

    /*------------------------------------------------------------------------------*/
/* 12 a. light slider
/*------------------------------------------------------------------------------*/

// product detail image slider
$('#image-gallery').lightSlider({
gallery: true,
item: 1,
thumbItem: 5,
slideMargin: 15,
speed: 500,
auto: false,
loop: true,
onSliderLoad: function() {
    $('#image-gallery').removeClass('cS-hidden');
}
});

    /*------------------------------------------------------------------------------*/
    /*12. Other js scripts
/*------------------------------------------------------------------------------*/
    // Tlt image effectt
    $('.js-tilt').tilt({
        glare: false,
        maxTilt: 3
    });

    $('.js-tilt2').tilt({
        glare: false,
        maxTilt: 7
    });

    $('.js-tilt3').tilt({
        glare: true,
        maxTilt: 3,
        maxGlare: 0.5,
        scale: 1.02
    });

    // banner scroll button
    $(".scroll-down").on('click', function(event) {
        $('html, body').animate({
            scrollTop: $(".filter-gallery").offset().top
        }, 1500);
    });

    // banner scroll button 2
    $(".scroll-down-2").on('click', function(event) {
        $('html, body').animate({
            scrollTop: $(".gallery-list").offset().top
        }, 1500);
    });

    // color switch
    $( ".each-color.co1" ).on('click', function(e) {
        var data1 = $(this).data('color');
        $(".color-changing").attr('href', data1);
    });

    $( ".each-color.co2" ).on('click', function(e) {
        var data1 = $(this).data('color');
        $(".color-changing").attr('href', data1);
    });

    $( ".each-color.co3" ).on('click', function(e) {
        var data1 = $(this).data('color');
        $(".color-changing").attr('href', data1);
    });

    $( ".each-color.co4" ).on('click', function(e) {
        var data1 = $(this).data('color');
        $(".color-changing").attr('href', data1);
    });

    $( ".each-color.co5" ).on('click', function(e) {
        var data1 = $(this).data('color');
        $(".color-changing").attr('href', data1);
    });

    $( ".each-color.co6" ).on('click', function(e) {
        var data1 = $(this).data('color');
        $(".color-changing").attr('href', data1);
    });

    $( ".each-color.co7" ).on('click', function(e) {
        var data1 = $(this).data('color');
        $(".color-changing").attr('href', data1);
    });

    $( ".each-color.co8" ).on('click', function(e) {
        var data1 = $(this).data('color');
        $(".color-changing").attr('href', data1);
    });

    $( ".each-color.co9" ).on('click', function(e) {
        var data1 = $(this).data('color');
        $(".color-changing").attr('href', data1);
    });

    $('.popup-video').magnificPopup({
            type: 'iframe'
        });

})(jQuery); // End jQuery
