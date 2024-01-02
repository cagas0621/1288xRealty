<footer class="footer-area section-padding-100-0 bg-img gradient-background-overlay" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/bg-img/about.jpg);">
    <!-- Main Footer Area -->
    <div class="main-footer-area">
        <div class="container">
            <div class="row">

                <div class="col-12 col-sm-6 col-xl-6">
                    <div class="footer-widget-area mb-100">
                        <div class="widget-title">
                            <h6>Contact Us</h6>
                        </div>
                        <div class="weekly-office-hours">
                            <ul>
                                <li class="d-flex align-items-center justify-content-between"><span><i class="fa fa-phone" aria-hidden="true"> </i> +45 677 8993000 223</span></li>
                                <li class="d-flex align-items-center justify-content-between"><span><i class="fa fa-envelope" aria-hidden="true"></i> office@template.com</span>
                                </li>
                                <li class="d-flex align-items-center justify-content-between"><span><i class="fa fa-map-marker" aria-hidden="true"></i> Calamba, Philippines</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-xl-6">
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
                        </ul>
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