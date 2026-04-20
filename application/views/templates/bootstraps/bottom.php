<!-- Contact -->
<section id="contact" class="tm-section-pad-top tm-parallax-2">
    <div class="container tm-container-contact">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-4 tm-section-title">Contact Us</h2>
                <div class="mb-5 tm-underline">
                    <div class="tm-underline-inner"></div>
                </div>
                <!-- <p class="mb-5">
                    There is no tincidunt, the lacus a suscipit luctus, the elit turpis tincidunt dui, no time sem
                    turpis vitae lorem. Maecenas needs hate in the game of life cartoons or leo. Curabitur at elit eu
                    risus pharetra pellentesque at at velit.
                </p> -->
            </div>

            <div class="col-sm-6 col-md-6 d-flex align-items-center tm-contact-item">
                <a href="tel:0210000000" class="tm-contact-item-link">
                    <i class="fas fa-3x fa-phone mr-4"></i>
                    <span class="mb-0">021-000-0000</span>
                </a>
            </div>
            <div class="col-sm-6 col-md-6 d-flex align-items-center tm-contact-item">
                <a href="mailto:info@perkota.com" class="tm-contact-item-link">
                    <i class="fas fa-3x fa-envelope mr-4"></i>
                    <span class="mb-0">info@perkota.com</span>
                </a>
            </div>
            <div class="col-sm-6 col-md-6 d-flex align-items-center tm-contact-item">
                <a href="https://maps.app.goo.gl/SQsFWwB43gXKokud9" class="tm-contact-item-link" target="_blank">
                    <i class="fas fa-3x fa-map-marker-alt mr-4"></i>
                    <span class="mb-0">Location on Maps</span>
                </a>
            </div>
            <div class="col-sm-6 col-md-6 d-flex align-items-center tm-contact-item">
                <form action="" method="get">
                    <input name="email" type="email" placeholder="Subscribe your email" class="tm-input" required />
                    <button type="submit" class="btn tm-btn-submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <footer class="text-center small tm-footer">
        <p class="mb-0">
            Copyright &copy; 2026 PERKOTA

            - Design: <a rel="nofollow" href="https://terabytee.my.id" class="tm-footer-link">terabytee</a>
        </p>
    </footer>
</section>

<!-- Theme Custom -->
<script src="<?= base_url() ?>assets_perkota/js/jquery-1.9.1.min.js"></script>
<script src="<?= base_url() ?>assets_perkota/slick/slick.min.js"></script>
<script src="<?= base_url() ?>assets_perkota/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url() ?>assets_perkota/js/jquery.singlePageNav.min.js"></script>
<script src="<?= base_url() ?>assets_perkota/js/bootstrap.min.js"></script>

<script src="<?= base_url() ?>assets_perkota/js/terabytee.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
    $(".carousel").owlCarousel({
        margin: 20,
        loop: true,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 4,
                nav: false
            }
        }
    });
</script>

<script>
    function getOffSet() {
        var _offset = 450;
        var windowHeight = window.innerHeight;

        if (windowHeight > 500) {
            _offset = 400;
        }
        if (windowHeight > 680) {
            _offset = 300
        }
        if (windowHeight > 830) {
            _offset = 210;
        }

        return _offset;
    }

    function setParallaxPosition($doc, multiplier, $object) {
        var offset = getOffSet();
        var from_top = $doc.scrollTop(),
            bg_css = 'center ' + (multiplier * from_top - offset) + 'px';
        $object.css({
            "background-position": bg_css
        });
    }

    // Parallax function
    // Adapted based on https://codepen.io/roborich/pen/wpAsm        
    var background_image_parallax = function ($object, multiplier, forceSet) {
        multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
        multiplier = 1 - multiplier;
        var $doc = $(document);
        // $object.css({"background-attatchment" : "fixed"});

        if (forceSet) {
            setParallaxPosition($doc, multiplier, $object);
        } else {
            $(window).scroll(function () {
                setParallaxPosition($doc, multiplier, $object);
            });
        }
    };

    var background_image_parallax_2 = function ($object, multiplier) {
        multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
        multiplier = 1 - multiplier;
        var $doc = $(document);
        $object.css({
            "background-attachment": "fixed"
        });
        $(window).scroll(function () {
            var firstTop = $object.offset().top,
                pos = $(window).scrollTop(),
                yPos = Math.round((multiplier * (firstTop - pos)) - 186);

            var bg_css = 'center ' + yPos + 'px';

            $object.css({
                "background-position": bg_css
            });
        });
    };

    $(function () {
        // Hero Section - Background Parallax
        background_image_parallax($(".tm-parallax"), 0.30, false);
        background_image_parallax_2($("#contact"), 0.80);

        // Handle window resize
        window.addEventListener('resize', function () {
            background_image_parallax($(".tm-parallax"), 0.30, true);
        }, true);

        // Detect window scroll and update navbar
        $(window).scroll(function (e) {
            if ($(document).scrollTop() > 120) {
                $('.tm-navbar').addClass("scroll");
            } else {
                $('.tm-navbar').removeClass("scroll");
            }
        });

        // Close mobile menu after click 
        $('#tmNav a').on('click', function () {
            $('.navbar-collapse').removeClass('show');
        })

        // Scroll to corresponding section with animation
        $('#tmNav').singlePageNav();

        // Add smooth scrolling to all links
        // https://www.w3schools.com/howto/howto_css_smooth_scroll.asp
        $("a").on('click', function (event) {
            if (this.hash !== "") {
                event.preventDefault();
                var hash = this.hash;

                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 400, function () {
                    window.location.hash = hash;
                });
            } // End if
        });

        // Pop up
        $('.tm-gallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery: {
                enabled: true
            }
        });

        // Gallery
        $('.tm-gallery').slick({
            dots: true,
            infinite: false,
            slidesToShow: 5,
            slidesToScroll: 2,
            responsive: [{
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });
</script>

<!-- <script src="<?php echo base_url() ?>assets/js/limonte-sweetalert2/sweetalert2.all.min.js"></script> -->

</body>

</html>