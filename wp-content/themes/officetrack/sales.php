<?php
/*
Template Name: Sales
*/

get_header('sales'); ?>

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
    <section id="content" class="info">
        <div class="section-justify">
            <div class="section-inner">
                <div class="title_mini-blue">
                    <h3><?php the_field("caracteristicas_titulo"); ?></h3>
                    <div class="mini-blue"></div>
                </div>
                <div class="main-comment">
                    <p class="comment-gray"><?php the_field("caracteristicas_contenido"); ?></p>
                </div>

                <h5><?php the_field("funcionalidad_titulo"); ?></h5>
                <?php
                    $funcionalidad_list = get_field("funcionalidad_list");
                    if (!empty($funcionalidad_list)){
                        foreach ($funcionalidad_list as $item){
                            ?>
                                <p class="comment-gray">• <?php echo $item["descripcion"]; ?></p>
                            <?php
                        }
                        ?>
                        <br>
                        <br>
                        <?php
                    }
                ?>

                <h5><?php the_field("manager_titulo"); ?></h5>
                <?php
                    $manager_list = get_field("manager_list");
                    if (!empty($manager_list)){
                        foreach ($manager_list as $item){
                            ?>
                            <p class="comment-gray">• <?php echo $item["descripcion"]; ?></p>
                            <?php
                        }
                        ?>
                        <br>
                        <br>
                        <?php
                    }
                ?>

                <h5><?php the_field("sales_titulo"); ?></h5>
                <?php
                $security_list = get_field("sales_list");
                if (!empty($security_list)){
                    foreach ($security_list as $item){
                        ?>
                        <p class="comment-gray">• <?php echo $item["descripcion"]; ?></p>
                        <?php
                    }
                    ?>
                    <br>
                    <br>
                    <?php
                }
                ?>

                <div class="title_mini-blue">
                    <h3><?php the_field("benefits_titulo"); ?></h3>
                    <div class="mini-blue"></div>
                </div>
                <h5><?php the_field("benefits_subtitulo"); ?></h5>
                <?php
                    $benefits_list = get_field("benefits_list");
                    if (!empty($benefits_list)){
                        ?>
                        <ul class="check_list">
                            <?php
                                foreach ($benefits_list as $item){
                                    ?>
                                    <li>
                                        <i class="check"></i>
                                        <p class="comment-gray"><?php echo $item["benefit"]; ?></p>
                                    </li>
                                    <?php
                                }
                            ?>
                        </ul>
                        <?php
                    }
                ?>
            </div>
        </div>
    </section>

<?php
include("templates/request-demo.php");
?>
<?php get_footer(); ?>