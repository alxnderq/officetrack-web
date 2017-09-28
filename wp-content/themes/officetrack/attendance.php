<?php
/*
Template Name: Attendance
*/

get_header('attendance'); ?>

    <div class="section-inner">
        <div class="cta-container">
            <div class="splash">
                <h1><?php the_field("titulo");?></h1>
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
        <div class="section-assistance">
            <div class="section-inner">
                <p class="comment-gray comment-center"><?php the_field("contenido"); ?></p>
                <div class="video">
                    <iframe width="1088px" height="599px" src="<?php the_field("video"); ?>" frameborder="0" allowfullscreen></iframe>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/shadow.png">
                </div>
            </div>
            <div>
                <div class="columns">
                    <div class="column left">
                        <div class="title_mini-blue">
                            <h3><?php the_field("features_titulo"); ?></h3>
                            <div class="mini-blue"></div>
                        </div>
	                    <?php
	                    $features_list = get_field("features_list");
	                    if (!empty($features_list)){
		                    foreach ($features_list as $item){
			                    ?>
                                <p style="display: block;">• <?php echo $item["feature"]; ?></p>
			                    <?php
		                    }
	                    }
	                    ?>
                    </div>
                    <div class="column right">
                        <div class="title_mini-blue">
                            <h3><?php the_field("benefits_titulo"); ?></h3>
                            <div class="mini-blue"></div>
                        </div>
	                    <?php
	                    $benefits_list = get_field("benefits_list");
	                    if (!empty($benefits_list)){
		                    foreach ($benefits_list as $item){
			                    ?>
                                <li>
                                    <i class="check"></i>
                                    <p><?php echo $item["benefit"] ?></p>
                                </li>
			                    <?php
		                    }
	                    }
	                    ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
include("templates/request-demo.php");
?>
<?php get_footer(); ?>