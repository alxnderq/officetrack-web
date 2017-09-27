<?php
/*
Template Name: Contact us
*/

get_header('contact-us'); ?>

    <div class="section-inner">
        <div class="cta-container">
            <div class="splash">
                <h1>Contact Us</h1>
            </div>
        </div>
        <div class="cta-container-bottom">
            <a href="#content" id="scrolling-bottom"><span class="arrow-slide"></span></a>
            <div class="bottom-right">
                <div class="social">
                    <a href="https://www.youtube.com/watch?v=T3LhbC61p3g2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/youtube.png" width="30" height="30" hspace="5"></a>
                    <a href="https://www.linkedin.com/company/3173837/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/linkedin.png" width="30" height="30" hspace="5"  style="border-radius: 25px;"></a>
                    <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/twitter_1.png" width="30" height="30" hspace="5"></a>
                </div>
                <div class="change-language">
                    <button class="button-transparent">
                        <li class="english">
                            <h5>EN</h5>
                            <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/arrow.png" width="8" height="5"></span>
                        </li>
                    </button>
                </div>
            </div>
        </div>
    </div>
    </section>
    <?php
        get_shortcode_regex('[contact-form-7 id="126" title="Contact us"]')
    ?>

<?php get_footer(); ?>