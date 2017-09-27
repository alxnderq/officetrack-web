<?php
/*
Template Name: Cellular Form
*/

get_header('cellularform'); ?>

	<div class="section-inner">
		<div class="cta-container">
			<div class="splash">
				<h1>Cellular Form</h1>
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
	<section id="content" class="info">
		<div class="section-assistance">
			<div class="section-inner">
				<p class="comment-gray comment-center">The Cellular Forms service allows users to quickly create digital forms that are required to fill by field mobile agents during any particular task or activity. Also, OfficeTrack cellular forms, can provide Order service to allow sales person and agents. A type of form can also be an order. Forms can include requirement for digital signatures. Agents fill the required information on the forms using their handset, and send the forms with the required information to the back office or any specific manager.</p>
				<div class="video">
					<iframe width="1088px" height="599px" src="https://www.youtube.com/embed/Kv94MvjfWEE" frameborder="0" allowfullscreen></iframe>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/shadow.png">
				</div>
			</div>
			<div class="columns">
				<div class="column left">
					<div class="title_mini-blue">
						<h3>Main Features</h3>
						<div class="mini-blue"></div>
					</div>
					<p style="display: block;">• Cellular forms can be constructed to fit specific needs of any particular organization.</p>
					<p style="display: block;">• Publish and send forms to a specific employee or a group of employees.</p>
					<p style="display: block;">• Send filled forms directly to the organizational information system.</p>
					<p style="display: block;">• Update forms at any given time according to the needs of the organization.</p>
					<p style="display: block;">• Produce reports, and perform multi-dimensional analyze of reports.</p>
				</div>
				<div class="column right">
					<div class="title_mini-blue">
						<h3>Key Benefits</h3>
						<div class="mini-blue"></div>
					</div>
					<li>
						<i class="check"></i>
						<p>Significant improvement in work efficiency as a result of receiving real-time filled forms and reports from the field, and synchronizing the information with the back office systems.</p>
					</li>
					<li>
						<i class="check"></i>
						<p>Operational expenses savings - the forms service eliminates the need for scanning, typing, printing and archiving paper forms.</p>
					</li>
					<li>
						<i class="check"></i>
						<p>Also changes made to forms and forms updates are not involved is major waist of old forms.</p>
					</li>
					<li>
						<i class="check"></i>
						<p>The form service eliminates filling wrong data, and makes sure all required information is filled before sending.</p>
					</li>
				</div>
			</div>
		</div>
	</section>
<?php
include("templates/request-demo.php");
?>
<?php get_footer(); ?>