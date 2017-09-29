<?php
/*
Template Name: news
*/
get_header("news"); ?>
	<div class="section-inner">
				<div class="cta-container">
					<div class="splash">
						<h1><?php the_title();?></h1>
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
		<div class="container">
			<div class="content_debout">
				<?php while ( have_posts() ) : the_post(); 

					the_content();

				endwhile; // end of the loop. ?>
			</div>
		</div>
	</section>
<?php get_footer(); ?>