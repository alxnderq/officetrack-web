<?php
/*
Template Name: Help center faq downloads
*/

get_header('help-center-faq'); ?>

        <div class="section-inner">
            <div class="cta-container">
                <div class="splash">
                    <h1><?php the_field("titulo"); ?></h1>
                    <div class="container-button">
                        <a href="<?php the_field("link-faq") ?>"><button class="button-blue"><?php the_field("btn-faq") ?></button></a>
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
    <section id="content" class="section-downloads info info-backgroundcolor">
        <div class="column-left">
            <h3><?php the_field("technical-material-titulo"); ?></h3>
            <?php
                $technical_material_list = get_field("technical-material-list");
                if (!empty($technical_material_list)){
                    ?>
                    <div class="column">
                        <?php
                            foreach ($technical_material_list as $item){
                                ?>
                                <span><a href="<?php echo $item["link"]; ?>"><?php echo $item["titulo"]; ?></a></span>
                                <?php
                            }
                        ?>
                    </div>
                    <?php
                }
            ?>
        </div>
        <div class="column-right">
            <h3><?php the_field("user-guide-titulo"); ?></h3>
            <?php
            $user_guide_list = get_field("user-guide-list");
            if (!empty($user_guide_list)){
                ?>
                <div class="column">
                    <?php
                    foreach ($user_guide_list as $item){
                        ?>
                        <span><a href="<?php echo $item["link"]; ?>"><?php echo $item["titulo"]; ?></a></span>
                        <?php
                    }
                    ?>
                </div>
                <?php
            }
            ?>
        </div>
    </section>

<?php
include("templates/request-demo.php");
?>
<?php get_footer(); ?>