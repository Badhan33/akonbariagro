;(function ($) {
    $(document).ready(function () {

        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
        });

        /*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear'
			};
		*/

        $().UItoTop({easingType: 'easeOutQuart'});


        $('.example1').wmuSlider();

        // Header scroll class
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('#header').addClass('header-scrolled');
            } else {
                $('#header').removeClass('header-scrolled');
            }
        });

        if ($(window).scrollTop() > 100) {
            $('#header').addClass('header-scrolled');
        }

        // Smooth scroll for the navigation and links with .scrollto classes
        $('ul#primary li a').on('click', function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                if (target.length) {
                    var top_space = 0;

                    if ($('#header').length) {
                        top_space = $('#header').outerHeight();

                        if (! $('#header').hasClass('header-scrolled')) {
                            top_space = top_space - 20;
                        }
                    }

                    $('html, body').animate({
                        scrollTop: target.offset().top - top_space
                    }, 1500, 'easeInOutExpo');

                    if ($(this).parents('.main-nav, .mobile-nav').length) {
                        $('.main-nav .active, .mobile-nav .active').removeClass('active');
                        $(this).closest('li').addClass('active');
                    }

                    if ($('body').hasClass('mobile-nav-active')) {
                        $('body').removeClass('mobile-nav-active');
                        $('.mobile-nav-toggle i').toggleClass('fa-times fa-bars');
                        $('.mobile-nav-overly').fadeOut();
                    }
                    return false;
                }
            }
        });

    });

    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "slide",
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });
})(jQuery);