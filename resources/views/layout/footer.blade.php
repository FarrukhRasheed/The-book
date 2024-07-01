<!-- footer -->
<div class="footer-bot">
    <div class="container">
        <div class="logo2">
            <h3>
                <a href="index.html">Author
                    <div class="img-logo2">
                        <img class="img-responsive" src="asset/images/logo2.png" alt="" />
                    </div>
                </a>
            </h3>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- copyright -->
<div class="copy-right">
    <div class="agileinfo_social_icons">
        <ul class="agileits_social_list">
            <li>
                <a href="#" class="w3_agile_facebook">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="#" class="agile_twitter">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="#" class="w3_agile_dribble">
                    <i class="fa fa-dribbble" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="#" class="w3_agile_google">
                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="container">
        <p> &copy; 2018 Author. All Rights Reserved | Design by
            <a href="http://w3layouts.com/"> W3layouts</a>
        </p>
    </div>
</div>
<!-- //copyright -->
<!-- //footer -->


<!-- js -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->

<!-- for bootstrap working -->
<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->

<!-- stats numscroller-js-file -->
<script src="js/numscroller-1.0.js"></script>
<!-- //stats numscroller-js-file -->

<!--  light box js -->
<script src="js/lightbox-plus-jquery.min.js"></script>
<!-- //light box js-->

<!-- flexisel (for special offers) -->
<script src="js/jquery.flexisel.js"></script>
<script>
    $(window).load(function () {
        $("#flexiselDemo1").flexisel({
            visibleItems: 3,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint: 640,
                    visibleItems: 2
                },
                tablet: {
                    changePoint: 768,
                    visibleItems: 2
                }
            }
        });

    });
</script>
<!-- //flexisel (for special offers) -->

<!-- pricing-tablel -->
<script src="js/jquery.magnific-popup.js"></script>
<script>
    $(document).ready(function () {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

    });
</script>
<!-- //pricing-tablel -->

<!-- smooth scrolling -->
<script src="js/SmoothScroll.min.js"></script>
<!-- //smooth scrolling -->

<!-- start-smoth-scrolling -->
<script src="js/move-top.js"></script>
<script src="js/easing.js"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->

<!-- smooth scrolling-bottom-to-top -->
<script>
    $(document).ready(function () {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */
        $().UItoTop({
            easingType: 'easeOutQuart'
        });
    });
</script>
<a href="#" id="toTop" style="display: block;">
    <span id="toTopHover" style="opacity: 1;"> </span>
</a>
<!-- //smooth scrolling-bottom-to-top -->

</body>

</html>
