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
			<div class="section-news">
				<div class="section-inner">
					<div class="section-news-card">
						<?php
							// query en wordpresss para jalarte lso blog.
							$args = array(
							  'numberposts' => -1,
							  'post_type'   => 'post',
							  'order' => 'asc'
							);				 
							$posts = get_posts( $args );
							if(!empty($posts)){
								foreach ($posts as $post) {
							?>
							<li class="news-card">
								<a href="<?php the_permalink();?>">
									<?php the_post_thumbnail();?>
									<div class="text">
										<div class="title"> 
											<p><?php the_title();?></p>
										</div>
										<div class="time-text">
											<p><?php echo get_the_date( 'M, Y' ); ?></p>
										</div>
									</div>
								</a>
							</li>
							<?php
							}
						}
						?>
					</div>
					
				</div>
				
					
			</div>
		</section>
		<section class="readmore">
			<div class="center">
				<h1><?php the_field("titulo_readmore");?></h1>
				<a href="<?php the_field("contact");?>">
					<button class="button-blue">
						<span><?php the_field("btn_readmore");?></span>
					</button>
				</a>
			</div>
		</section>

<?php get_footer(); ?>