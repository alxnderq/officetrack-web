<?php
/*
Template Name: Contact us
*/

get_header('contact-us'); ?>

        <div class="section-inner">
            <div class="cta-container">
                <div class="splash">
                    <h1><?php the_field("titulo"); ?></h1>
                </div>
            </div>
            <div class="cta-container-bottom">
                <a href="#content" id="scrolling-bottom"><span class="arrow-slide"></span></a>
                <div class="bottom-right">
                    <div class="social">
                        <?php
                        $social = get_field("social",25);
                        if (!empty($social)){
                            foreach ($social as $item) {
                                ?>
                                <a href="<?php echo $item["link"];?>">
                                    <img src="<?php echo $item["imagen"];?>" width="30" height="30" hspace="5">
                                </a>
                                <?php
                            }
                        }
                        ?>
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
    <section id="content" class="info info-backgroundcolor">
        <div class="section-assistance">
            <div class="section-inner">
                <div class="form">
                    <h2><?php the_field("form-titulo"); ?></h2>
                    <p class="comment-gray comment-center"><?php the_field("form-descripcion"); ?></p>
                    <div class="form-content">
                        <?php
                            get_shortcode_regex('[contact-form-7 id="126" title="Contact us"]')
                        ?>
                    </div>
                    <div class="container">
                        <?php
                            $form_country_list = get_field("form-country-list");
                            if (!empty($form_country_list)){
                                foreach ($form_country_list as $item){
                                    ?>
                                    <div class="telefons">
                                        <img src="<?php echo $item["imagen"];?>" width="44" height="25" vspace="13">
                                        <h5><?php echo $item["titulo"];?></h5>
                                        <p><?php echo $item["descripcion"];?></p>
                                    </div>
                                    <?php
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>