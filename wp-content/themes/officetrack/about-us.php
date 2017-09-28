<?php
/*
Template Name: About us
*/

get_header('about'); ?>

		<div class="section-inner">
			<div class="cta-container">
				<div class="splash">
                    <h1><?php the_field("titular");?></h1>
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
								<span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images//arrow.png" width="8" height="5"></span>
							</li>
						</button>
					</div>
				</div>
			</div>
		</div>
	</section>
    <section id="content" class="info">
        <div class="section-information">
            <div class="section-inner">
                <div class="text comment-gray comment-center">
                    <p><?php the_field("content"); ?></p>
                </div>
                <div class="video">
                    <iframe width="1088px" height="599px" src="<?php the_field("video"); ?>" frameborder="0" allowfullscreen></iframe>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/shadow.png">
                </div>
            </div>
        </div>
        <div class="section-solution">
            <div class="text">
                <h2><?php the_field("solution-title"); ?></h2>
                <p class="comment-gray comment-center"><?php the_field("solution-content") ?></p>
            </div>
            <?php
                $list = get_field("solution-list");
                if (!empty($list)){
	                foreach ($list as $item){
	                    ?>
                        <div class="container">
					        <span class="icons-aboutus">
						        <img src="<?php echo $item["imagen"]; ?>"/>
					        </span>
                            <div class="text">
                                <h4><?php echo $item["titulo"] ?></h4>
                                <p class="comment-gray comment-center"><?php echo $item["contenido"] ?></p>
                            </div>
                        </div>
                        <?php
                    }
                }
            ?>
        </div>
    </section>
    <?php
        include("templates/request-demo.php");
    ?>
    <section class="partners">
        <div class="content comment-gray comment-center">
            <h2><?php the_field("customer-title"); ?></h2>
            <?php
                $customer_list = get_field("customer-list");
                if (!empty($customer_list)){
                    foreach ($customer_list as $customer){
                        ?>
                        <div class="section">
                            <p><?php echo $customer["titulo"]; ?></p>
                            <?php
                                $images = $customer["imagenes"];
                                if (!empty($images )){
                                    ?>
                                    <div class="container">
                                        <?php
                                            foreach ($images as $image){
                                                ?>
                                                <img src="<?php echo $image["imagen"]; ?>" width="<?php echo $image["width"]; ?>"
                                                     height="<?php echo $image["height"]; ?>" align="middle" hspace="<?php echo $image["horizontal-space"] ?>"
                                                     vspace="<?php echo $image["vertical-space"]; ?>"/>
                                                <?php
                                            }
                                        ?>
                                    </div>
                                    <?php
                                }
                            ?>
                        </div>
                        <?php
                    }
                }
            ?>
        </div>
    </section>
<?php get_footer(); ?>