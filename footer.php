<footer class="footer-area section-padding-100-0 bg-img gradient-background-overlay" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/bg-img/about.jpg);">
    <!-- Main Footer Area -->
    <div class="main-footer-area">
        <div class="container">
            <div class="row">

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget-area mb-100">
                        <!-- Widget Title -->
                        <div class="widget-title">
                            <h6>About Us</h6>
                        </div>

                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/bg-img/footer.jpg" alt="">
                        <div class="footer-logo my-4">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.svg" alt="">
                        </div>
                        <p>Integer nec bibendum lacus. Suspen disse dictum enim sit amet libero males uada feugiat.
                            Praesent malesuada.</p>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget-area mb-100">
                        <!-- Widget Title -->
                        <div class="widget-title">
                            <h6>Hours</h6>
                        </div>
                        <!-- Office Hours -->
                        <div class="weekly-office-hours">
                            <ul>
                                <li class="d-flex align-items-center justify-content-between"><span>Monday -
                                        Friday</span> <span>09 AM - 19 PM</span></li>
                                <li class="d-flex align-items-center justify-content-between"><span>Saturday</span>
                                    <span>09 AM - 14 PM</span>
                                </li>
                                <li class="d-flex align-items-center justify-content-between"><span>Sunday</span>
                                    <span>Closed</span>
                                </li>
                            </ul>
                        </div>
                        <!-- Address -->
                        <div class="address">
                            <h6><i class="fa fa-phone" aria-hidden="true"></i> +45 677 8993000 223</h6>
                            <h6><i class="fa fa-envelope" aria-hidden="true"></i> office@template.com</h6>
                            <h6><i class="fa fa-map-marker" aria-hidden="true"></i> Calamba, Philippines</h6>
                        </div>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget-area mb-100">
                        <!-- Widget Title -->
                        <div class="widget-title">
                            <h6>Useful Links</h6>
                        </div>
                        <!-- Nav -->
                        <ul class="useful-links-nav d-flex align-items-center">
                            <li><a href="<?php echo home_url(); ?>">Home</a></li>
                            <li><a href="<?php echo get_permalink(get_page_by_path('model')); ?>">Model</a></li>
                            <li><a href="<?php echo get_permalink(get_page_by_path('about')); ?>">About us</a></li>
                            <li><a href="<?php echo get_permalink(get_page_by_path('contact')); ?>">Contact</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget-area mb-100">
                        <div class="widget-title">
                            <h6>Featured Properties</h6>
                        </div>
                        <div class="featured-properties-slides owl-carousel">
                            <div class="single-featured-properties-slide">
                                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/img/forsale-img/harper.jpg" alt=""></a>
                            </div>
                            <div class="single-featured-properties-slide">
                                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/img/forsale-img/ivy.jpg" alt=""></a>
                            </div>
                            <div class="single-featured-properties-slide">
                                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/img/forsale-img/sage.jpg" alt=""></a>
                            </div>
                            <div class="single-featured-properties-slide">
                                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/img/forsale-img/stella.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Copywrite Text -->
    <div class="copywrite-text d-flex align-items-center justify-content-center">
        <p>
            Copyright &copy;
            <script>
                document.write(new Date().getFullYear());
            </script> All rights reserved
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>