<?php
/*
Template Name: Help center faq
*/

get_header('help-center-faq'); ?>

        <div class="section-inner">
            <div class="cta-container">
                <div class="splash">
                    <h1><?php the_field("titulo"); ?></h1>
                    <div class="container-button">
                        <a href="<?php the_field("link-download-guides") ?>"><button class="button-blue"><?php the_field("btn-download-guides") ?></button></a>
                    </div>
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
    <section id="content" class="tabs info info-backgroundcolor">
        <h3><?php the_field("browse-titulo") ?></h3>
        <div >
            <button class="menu-container">
                <p><?php the_field("faq-menu-btn"); ?></p>
            </button>
        </div>
        <?php
            $faq_menu = get_field("faq-menu");
            if (!empty($faq_menu)){
                ?>
                <nav class="menu-container-inner">
                    <?php
                        foreach ($faq_menu as $item){
                            ?>
                            <li>
                                <a><?php echo $item["menu"];?></a>
                            </li>
                            <?php
                        }
                    ?>
                </nav>
                <?php
            }
            $faq_menu_contenido = get_field("faq-menu-contenido");
            if (!empty($faq_menu_contenido)){
                ?>
                <div class="container">
                    <?php
                        foreach ($faq_menu_contenido as $contenido){
                            $contenido_list = $contenido["contenido-list"];
                            if (!empty($contenido_list)){
                                ?>
                                <div class="content">
                                    <?php
                                        foreach ($contenido_list as $item){
                                            ?>
                                            <li>
                                                <h4><?php echo $item["titulo"]; ?></h4>
                                                <p><?php echo $item["contenido"]; ?></p>
                                            </li>
                                            <?php
                                        }
                                    ?>
                                </div>
                                <?php
                            }
                        }
                    ?>
                </div>
                <?php
            }
        ?>
    </section>

<?php
include("templates/request-demo.php");
?>
<?php get_footer(); ?>