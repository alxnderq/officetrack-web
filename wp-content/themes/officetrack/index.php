<?php
/*
Template Name: Index
*/
get_header(); ?>

		<div class="section-inner">
			<div class="cta-container">
				<div class="splash">
					<h1>Innovative Mobile Workforce Management solution</h1>
					<p>solution to schedule, optimize and manage tasks and by  request service order for dynamic field managed operation</p>
					<div class="container-store">
						<a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/app_store.png" width="178" height="60" > </a>
						<a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/google_play.png" width="178" height="60"> </a>
					</div>
				</div>

			</div>
			<div class="cta-container-bottom">
				<a href="#content" id="scrolling-bottom"><span class="arrow-slide"></span></a>
				<div class="bottom-right">
					<div class="social">
						<a href="https://www.youtube.com/watch?v=T3LhbC61p3g2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/youtube.png" width="30" height="30" hspace="5"></a>
						<a href="https://www.linkedin.com/company/3173837/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/linkedin.png" width="30" height="30" hspace="5"  style="border-radius: 25px;"></a>
						<a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/twitter_1.png" width="30" height="30" hspace="5"></a>
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
				<div class="tutorial-card">
					<h4>Tasks and Work Order</h4>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tutorial04.png" width="251" height="348">
					<p class="comment-gray comment-center">Comprehensive view of task and complex work order management to ensure work is performed within SLA and customer is informed</p>
					<a href="<?php echo get_site_url();?>/tasks"><button class="button-blue">Learn more</button></a>
				</div>
				<div class="tutorial-card">
					<h4>Cellular Forms</h4>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tutorial05.png" width="251" height="348">
					<p class="comment-gray comment-center">Self design cellular forms to support various workflow and collect valuable data and prof of delivery</p>
					<a href="<?php echo get_site_url();?>/cellular-form"><button class="button-blue">Learn more</button></a>
				</div>
				<div class="tutorial-card">
					<h4>Planning and Optimization</h4>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tutorial03.png" width="251" height="348">
					<p class="comment-gray comment-center">Manage resource capacity, route planning and route optimization for all distribution models using business configurable rules to increase utilization of field service operation</p>
					<a href="<?php echo get_site_url();?>/routing-optimization"><button class="button-blue">Learn more</button></a>
				</div>
				<div class="tutorial-card">
					<h4>Location and Geo Coding</h4>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tutorial02.png" width="251" height="348">
					<p class="comment-gray comment-center">Advanced geocoding engine with multi-layer map to visualize field operation density and distance from customer location in real life</p>
					<a href="<?php echo get_site_url();?>/location"><button class="button-blue">Learn more</button></a>
				</div>
				<div class="tutorial-card">
					<h4>Attendance</h4>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tutorial01.png" width="251" height="348">
					<p class="comment-gray comment-center">Location based time and attendance solution to gather, track and effectively manage resource time</p>
					<a href="<?php echo get_site_url();?>/attendance"><button class="button-blue">Learn more</button></a>
				</div>
				<div class="tutorial-card">
					<h4>Proof of delivery</h4>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tutorial06.png" width="251" height="348">
					<p class="comment-gray comment-center">Boost efficiency with Real time proof of delivery and keep track of field pickups and deliveries.</p>
					<a href=""><button class="button-blue">Learn more</button></a>
				</div>
			</div>
			<div class="section-tutorial-video">
				<h2>How this works</h2>
				<div class="video">
					<iframe src="https://player.vimeo.com/video/160705081" width="900" height="510" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/shadow.png">
				</div>
			</div>
		</div>
	</section>
	<section class="section-tutorial2">
		<div class="section-tutorial-services">
			<div class="services">
				<div class="services-img">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logistic-1.png">
					<div class="text">
						<p>Industries</p>
						<strong>Logistic & Distribution</strong>
						<a href="logistic_distribution.html"><button class="button-blue">Learn More</button></a>
					</div>
				</div>

			</div>
			<div class="services">
				<div class="services-img">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/service_maintenance-1.png">
					<div class="text">
						<p>Industries</p>
						<strong>Service & Maintenance</strong>
						<a href="service_maintenance.html"><button class="button-blue">Learn More</button></a>
					</div>
				</div>

			</div>
			<div class="services">
				<div class="services-img">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/security-1.png">
					<div class="text">
						<p>Industries</p>
						<strong>Security</strong>
						<a href="security.html"><button class="button-blue">Learn More</button></a>
					</div>
				</div>

			</div>
			<div class="services">
				<div class="services-img">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sales-1.png">
					<div class="text">
						<p>Industries</p>
						<strong>Sales</strong>
						<a href="sales.html"><button class="button-blue">Learn More</button></a>
					</div>
				</div>

			</div>
		</div>
	</section>

<?php get_footer(); ?>