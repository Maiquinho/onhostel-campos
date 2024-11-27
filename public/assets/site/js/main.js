(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();


    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 130) {
            $('.navbar.sticky-top').addClass('shadow-sm').css('top', '0px');
        } else {
            $('.navbar.sticky-top').removeClass('shadow-sm').css('top', '-100px');
        }
    });

    // Sticky Form
    $(window).scroll(function () {
        if ($(this).scrollTop() > 220) {
            $('aside.article-form .sticky-top').css('top', '100px');
        } else {
            $('aside.article-form .sticky-top').css('top', '0px');
        }
    });


    $(document).ready(function () {
        const backToTop = $('.back-to-top');

        function switchBackToTopDisplay() {
            if ($(window).scrollTop() > 250) {
                backToTop.show();
            } else {
                backToTop.hide();
            }
        }

        switchBackToTopDisplay();

        // Back to top button
        $(window).scroll(function () {
            switchBackToTopDisplay();
        });
        backToTop.click(function () {
            $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
            return false;
        });
    });

    function resizeGalleryCarousel() {
        const galleryCarousel = $('.gallery-carousel')
        const galleryCarouselStage = $('.gallery-carousel .owl-stage-outer')

        galleryCarousel.css({
            "height": "212px"
        })
        galleryCarouselStage.css({
            "height": "212px"
        })
    }

    $(document).ready(function() {
        resizeGalleryCarousel()
    });

    $(window).on("load", function () {
        resizeGalleryCarousel()
    });

    setTimeout(function() {
        resizeGalleryCarousel()
    }, 1000)

    // $(window).load(function () {
    // Gallery carousel
    $('.gallery-carousel').owlCarousel({
        stagePadding: 25,
        margin: 4,
        autoplay: true,
        autoplaySpeed: 500,
        smartSpeed: 1000,
        loop: true,
        rtl:true,
        nav: false,
        dots: false,
        dotsData: false,
        items: 2,
        // onInitialize: function (e) {
        //     e.target.style.height = 212 + 'px!important'

        //     console.log(e.target.style)
        // },
        // responsive: {
        //     0: {
        //         items: 3
        //     },
        //     1000: {
        //         items: 2
        //     }
        // }
    });
    // })

    // Testimonials carousel
    $('.testimonial-carousel').owlCarousel({
        stagePadding: 50,
        margin: 25,
        autoplay: true,
        autoplaySpeed: 3000,
        smartSpeed: 1000,
        loop: true,
        nav: false,
        dots: false,
        dotsData: false,
        responsive: {
            0: {
                items: 1
            },
            1000: {
                items: 2
            }
        }
    });

    const servicesCarousel = $('.services-carousel')
    const paymentCarousel = $('.payments-carousel')

    // Services carousel
    servicesCarousel.owlCarousel({
        stagePadding: 50,
        margin: 25,
        autoplay: false,
        smartSpeed: 1000,
        loop: false,
        nav: false,
        dots: false,
        dotsData: false,
        responsive: {
            0: {
                items: 1,
                onInitialize: function (e) {
                    toggleTestimonialCarouselStagePadding(e)
                },
            },
            1000: {
                stagePadding: 80,
                items: 3,
                nav: true,
                navText: ['<span class="carousel-control-prev-icon" aria-hidden="true"></span>', '<span class="carousel-control-next-icon" aria-hidden="true"></span>'],
                onInitialize: function (e) {
                    toggleTestimonialCarouselPrevIcon(e)
                    toggleTestimonialCarouselNextIcon(e)
                    toggleTestimonialCarouselStagePadding(e)
                },
                onDragged: function (e) {
                    toggleTestimonialCarouselPrevIcon(e)
                    toggleTestimonialCarouselNextIcon(e)
                    toggleTestimonialCarouselStagePadding(e)
                },
                onChanged: function (e) {
                    toggleTestimonialCarouselPrevIcon(e)
                    toggleTestimonialCarouselNextIcon(e)
                    toggleTestimonialCarouselStagePadding(e)
                }
            }
        }
    });
    paymentCarousel.owlCarousel({
        stagePadding: 50,
        margin: 25,
        autoplay: true,
        smartSpeed: 1000,
        autoplayTimeout: 2000,
        loop: true,
        nav: false,
        dots: false,
        dotsData: false,
        responsive: {
            0: {
                items: 2,
                onInitialize: function (e) {
                    toggleTestimonialCarouselStagePadding(e)
                },
            },
            1000: {
                stagePadding: 80,
                items: 4,
                nav: false,
                // navText: ['<span class="carousel-control-prev-icon" aria-hidden="true"></span>', '<span class="carousel-control-next-icon" aria-hidden="true"></span>'],

            }
        }
    });

    function toggleTestimonialCarouselPrevIcon(e) {
        $('.services-carousel .owl-nav .owl-prev').css({
            "opacity": 1,
            "visibility": 1,
            "cursor": "pointer"
        })

        if (e.item.index < 1) {
            $('.services-carousel .owl-nav .owl-prev').css({
                "opacity": 0,
                "visibility": 0,
                "cursor": "context-menu"
            })
        }
    }

    function toggleTestimonialCarouselNextIcon(e) {
        $('.services-carousel .owl-nav .owl-next').css({
            "opacity": 1,
            "visibility": 1,
            "cursor": "pointer"
        })

        if ((e.item.count / 2) == e.item.index) {
            $('.services-carousel .owl-nav .owl-next').css({
                "opacity": 0,
                "visibility": 0,
                "cursor": "context-menu"
            })
        }
    }

    function toggleTestimonialCarouselStagePadding(e) {
        $('.services-carousel .owl-stage').removeClass('ps-0')

        if (e.item.index < 1) {
            $('.services-carousel .owl-stage').addClass('ps-0')
        }
    }

    const myCarousel = document.querySelector('#header-carousel')

    if (myCarousel) {
        const carousel = new bootstrap.Carousel(myCarousel, {
            interval: 6000,
        })
    }


    // Isotope Layout

    jQueryBridget('isotope', Isotope, $);
    jQueryBridget('imagesLoaded', imagesLoaded, $);

    $(function () {

        if ($().isotope) {
            var $container = $('.grid');
            $container.imagesLoaded(function () {
                $container.isotope({
                    itemSelector: '.grid-item',
                    percentPosition: true,
                    transitionDuration: '1s',
                    masonry: {
                        columnWidth: '.grid-sizer'
                    },
                });
            });


            $('.portfolio-filter li').on('click', function () {
                var selector = $(this).find("a").attr('data-filter');
                $('.portfolio-filter li').removeClass('active');
                $(this).addClass('active');
                $container.isotope({ filter: selector });
                resizeGalleryCarousel()
                return false;
            });
        };

    });

    // Magnific Popup

    $('.grid').magnificPopup({
        delegate: 'a', // child items selector, by clicking on it popup will open
        type: 'image',
        gallery: { enabled: true }
        // other options
    });


    // Toggle article content

    const articleToggleButton = $('[data-article="toggle-content"]')

    if (articleToggleButton) {
        articleToggleButton.on('click', function (e) {
            const articleContent = $('[data-article="content"]')
            articleContent.toggleClass('article-content-wrapper--hidden')

            if (articleContent.hasClass('article-content-wrapper--hidden')) {
                articleToggleButton.text('Continuar lendo')
            } else {
                articleToggleButton.text('Ocultar texto')
            }
        })
    }


    const mobileHomePageVideo = document.getElementById('mobile-video')

    if (mobileHomePageVideo) {
        mobileHomePageVideo.play();
    }

})(jQuery);

