<script src="assets/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.js"></script> -->

<link
  rel="stylesheet"
  href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
/>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <!-- <script src="assets/js/lightgallery.js"></script> -->
    <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/js/lightgallery.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-pager.js/master/dist/lg-pager.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-autoplay.js/master/dist/lg-autoplay.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-fullscreen.js/master/dist/lg-fullscreen.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-zoom.js/master/dist/lg-zoom.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-hash.js/master/dist/lg-hash.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-share.js/master/dist/lg-share.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> -->

<script src="assets/js/masonary/masonry.pkgd.js"></script>
<script src="assets/js/masonary/imagesloaded.pkgd.js"></script>
    <script>
        jQuery(document).ready(function() {  
            var swiper = new Swiper('.swiper-container', {
                loop: true,
                autoplay: true,
                effect: 'fade',

                breakpoints: {
                    767: {
                        autoplay: true,
                    },
                },
                navigation: {
                    nextEl: '.swiper-button-next-big',
                    prevEl: '.swiper-button-prev-big',
                },
            });

            var swiper = new Swiper('.swiper-container-small', {
                loop: true,
                slidesPerView: 2,
                spaceBetween: 30,
                autoplay: true,

                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        //spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 4,
                        //spaceBetween: 40,
                    },
                    1024: {
                        //spaceBetween: 50,
                        slidesPerView: 4,
                    },
                },
				navigation: {
                    nextEl: '.swiper-button-next-small',
                    prevEl: '.swiper-button-prev-small',
                },
            });

            var swiper = new Swiper('.swiper-container-small1', {
                loop: true,
                slidesPerView: 5,
                spaceBetween: 25,
                autoplay: true,

                breakpoints: {
                    365: {
                        slidesPerView: 1,
                    },
                    640: {
                        slidesPerView: 2,
                    },
                    768: {
                        slidesPerView: 3,
                    },
                    1024: {
                        //spaceBetween: 50,
                        slidesPerView: 4,
                    },
                },
				navigation: {
                    nextEl: '.swiper-button-next-small1',
                    prevEl: '.swiper-button-prev-small1',
                },
            });

            var swiper = new Swiper('.swiper-container-small2', {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 25,
                //autoplay: true,

                navigation: {
                    nextEl: '.swiper-button-next-small2',
                    prevEl: '.swiper-button-prev-small2',
                },
            });

            lightGallery(document.getElementById('lightgallery'));
            // lightGallery(document.getElementById('lightgallery1'));

            $('.searchIcon').click(function() {
                $('body').toggleClass('showsearchsection');
            });
            
            $('.body_overlay').click(function() {
                $(this).next( '.navbar-collapse' ).removeClass('show');
                $(this).prev( '.navbar-toggler' ).attr("aria-expanded","false");
            });
            
            $('.btn-play').click(function() {
                $(this).parents( '.contentBlockVideo' ).addClass('showvideo');
            });
            $('.btn-close').click(function() {
                $(this).parents( '.contentBlockVideo' ).removeClass('showvideo');
            });

            var $grid = $('.grid').masonry({
                // set itemSelector so .grid-sizer is not used in layout
                itemSelector: '.grid-item',
                // use element for option
                columnWidth: '.col-sm-4',
                percentPosition: true
            })

            // layout Masonry after each image loads
            $grid.imagesLoaded().progress( function() {
                $grid.masonry('layout');
            });

            
        });

        //Get the button:
        mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }

        var header = $("body");
        jQuery(window).scroll(function() {
            var scroll = $(window).scrollTop();
            // if (scroll >= 100 && $(this).width() > 769) {
            if (scroll >= 150) {
            header.addClass("navbar-fixed-top");
            } else {
            header.removeClass('navbar-fixed-top');
            }
        });

        var swiper = new Swiper('.swiper-container-video', {
            loop: true,
            slidesPerView: 1,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });

        /*is visible*/
        (function($) {
        /**
        * Copyright 2012, Digital Fusion
        * Licensed under the MIT license.
        * http://teamdf.com/jquery-plugins/license/
        *
        * @author Sam Sehnert
        * @desc A small plugin that checks whether elements are within
        *     the user visible viewport of a web browser.
        *     only accounts for vertical position, not horizontal.
        */
        $.fn.visible = function(partial) {
            
            var $t            = $(this),
                $w            = $(window),
                viewTop       = $w.scrollTop(),
                viewBottom    = viewTop + $w.height(),
                _top          = $t.offset().top,
                _bottom       = _top + $t.height(),
                compareTop    = partial === true ? _bottom : _top,
                compareBottom = partial === true ? _top : _bottom;
            
            return ((compareBottom <= viewBottom) && (compareTop >= viewTop));
        };
            
        })(jQuery);
        var allMods = $('.animation__start-block');
        var allTexts = $('.animation__text-block');
        $(document).ready( function() {
            
            // Already visible modules
            allMods.each(function(i, el) {
                var el = $(el);
                if (el.visible(true)) {
                    el.addClass('animate');
                }
            });
            allTexts.each(function(i, el) {
                var el = $(el);
                if (el.visible(true)) {
                    //el.addClass('animated fadeInUp');
                    el.addClass('animatetext');
                }
            });
        })
        $(window).on('scroll', function() {
            allMods.each(function(i, el) {
                var el = $(el);
                if (el.visible(true)) {
                    el.addClass('animate');
                }
            });
            allTexts.each(function(i, el) {
                var el = $(el);
                if (el.visible(true)) {
                    //el.addClass('animated fadeInUp');
                    el.addClass('animatetext');
                }
            });
        });
    </script>

