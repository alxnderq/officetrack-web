<?php
/*
Template Name: home
*/
get_header(); ?>

		<div class="section-inner">
			<div class="cta-container">
				<div class="splash">
					<h1><?php the_field("titular");?></h1>
					<p><?php the_field("bajada");?></p>
					<div class="container-store">
						<a href="<?php the_field("link_app_store");?>">
							<img src="<?php the_field("imagen_app_store");?>" width="178" height="60" >
						</a>
						<a href="<?php the_field("link_google_play");?>">
							<img src="<?php the_field("imagen_google_play");?>" width="178" height="60">
						</a>
					</div>
				</div>

			</div>
			<div class="cta-container-bottom">
				<a href="#content" id="scrolling-bottom"><span class="arrow-slide"></span></a>
				<div class="bottom-right">
					<div class="social">
						<?php
							$social = get_field("social");
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
	<section class="info" id="content">
		<div class="section-tutorial">
			<div class="section-tutorial-card">
				<?php
					$tutorial = get_field("tutorial");
					if (!empty($tutorial)){
						foreach ($tutorial as $item) {
				?>
					<div class="tutorial-card">
						<h4><?php echo $item["titulo"];?></h4>
						<img src="<?php echo $item["imagen"];?>" width="251" height="348">
						<p class="comment-gray comment-center"><?php echo $item["contenido"];?></p>
						<a href="<?php echo $item["link"];?>"><button class="button-blue"><?php echo $item["texto_btn"];?></button></a>
					</div>
				<?php
						}
					}
				?>				
			</div>
			<div class="section-tutorial-video">
				<h2><?php the_field("titular_video");?></h2>
				<div class="video">
					<iframe src="<?php the_field("video");?>" width="900" height="510" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/shadow.png">
				</div>
			</div>
		</div>
	</section>
	<section class="section-tutorial2">
		<div class="section-tutorial-services">
			<?php
				$services = get_field("services");
				if (!empty($services)){
					foreach ($services as $item) {
			?>
				<div class="services">
					<div class="services-img">
						<img src="<?php echo $item["imagen"];?>">
						<div class="text">
							<p><?php echo $item["titulo"];?></p>
							<strong><?php echo $item["bajada"];?></strong>
							<a href="<?php echo $item["link"];?>"><button class="button-blue"><?php echo $item["btn_texto"];?></button></a>
						</div>
					</div>
				</div>
			<?php
					}
				}
			?>	

		</div>
	</section>

<?php get_footer(); ?>