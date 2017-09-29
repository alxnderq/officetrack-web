<?php
/*
Template Name: Logistic Distribution
*/

get_header('logistic-distribution'); ?>

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
                    <h3><?php the_field("types-titulo"); ?></h3>
                    <div class="mini-blue"></div>
                </div>
                <div class="main-comment">
                    <p class="comment-gray"><?php the_field("types-contenido"); ?></p>
                </div>
                <div class="video">
                    <iframe width="1088px" height="599px" src="<?php the_field("video"); ?>" frameborder="0" allowfullscreen></iframe>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images//shadow.png">
                </div>
                <h5><?php the_field("functionality-titulo"); ?></h5>
                <?php
                    $functionality_list = get_field("functionality-list");
                    if (!empty($functionality_list)){
                        foreach ($functionality_list as $item){
                            ?>
                            <p class="comment-gray">• <?php echo $item["texto"] ?></p>
                            <?php
                        }
                    }
                ?>
                <br/>
                <br/>
                <h5><?php the_field("manager-titulo"); ?></h5>
                <?php
                    $manager_list = get_field("manager-list");
                    if (!empty($manager_list)){
                        foreach ($manager_list as $item){
                            ?>
                            <p class="comment-gray">• <?php echo $item["texto"] ?></p>
                            <?php
                        }
                    }
                ?>
                <br/>

                <div class="title_mini-blue">
                    <h3><?php the_field("benefits-titulo") ?></h3>
                    <div class="mini-blue"></div>
                </div>
                <h5><?php the_field("benefits-subtitulo") ?></h5>
                <?php
                    $benefits_list = get_field("benefits-list");
                    if (!empty($benefits_list)){
                        ?>
                        <ul class="check_list">
                            <?php
                                foreach ($benefits_list as $item){
                                    ?>
                                    <li>
                                        <i class="check"></i>
                                        <p class="comment-gray"><?php echo $item["benefit"] ?></p>
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