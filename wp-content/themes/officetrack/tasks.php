<?php
/*
Template Name: Tasks
*/

get_header('tasks'); ?>

	<div class="section-inner">
		<div class="cta-container">
			<div class="splash">
				<h1>Tasks and Worker Order</h1>
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
		<div class="section-tasks">
			<div class="section-inner">
				<div class="section-inner-columnleft">
					<h2>Task management service of OfficeTrack allows you to manage all tasks of field workers, online, quickly and efficiently, from a single screen!</h2>
					<div class="mini-blue"></div>
				</div>
				<div class="section-inner-columnright">
					<h5 class="comment-gray comment-center">Using task management services, the user can intelligently assign tasks to employees, automatically or manually, based on skills, location and workload of specific agents. This is done simply by sending assignments with the required information to field agents' mobile phones on location. Task management also enables supervisors/managers to request back confirmation of tasks completed, or responses regarding issues that require management attention. Assigning tasks is a simple process, and can be done through the back office, or from the field. The task management module allows managers to receive a real time snapshots of field workers' location and tasks statuses at any point in time. These key capabilities of Task management provide managers with tools to make quick and effective decisions, allowing for significant savings in field workers management and data collection.</h5>
				</div>
				<div class="video">
					<iframe width="1088px" height="599px" src="https://www.youtube.com/embed/eSlfr9SrL2A" frameborder="0" allowfullscreen></iframe>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/shadow.png">
				</div>
			</div>
			<div class="columns">
				<div class="column left">
					<div class="title_mini-blue">
						<h3>Main Features</h3>
						<div class="mini-blue"></div>
					</div>
					<p style="display: block;">• Send tasks( service calls ) to field workers' mobile devices</p>
					<p style="display: block;">• Report and administer task completion details online by field workers.</p>
					<p style="display: block;">• Optimize field agents routes based on task loads, skills, and location.</p>
					<p style="display: block;">• Map view of field agents' current and historical locations.</p>
					<p style="display: block;">• Set points and areas of interest on a map and receive alerts when entry or exit is made.</p>
					<p style="display: block;">• Assign future tasks to agents on a daily, weekly monthly and yearly basis.</p>
					<p style="display: block;">• Present real-time inventory information to field agents based on integration to back-office inventory system</p>
					<p style="display: block;">• Define cellular reporting forms for each task to be filled by agents on their mobile devices.</p>
					<p style="display: block;">• Generate multi-dimensional reports, graphs, and summaries about tasks and employee efficiency.</p>
				</div>
				<div class="column right">
					<div class="title_mini-blue">
						<h3>Key Benefits</h3>
						<div class="mini-blue"></div>
					</div>
					<li>
						<i class="check"></i>
						<p>Online real-time tasks execution statuses.</p>
					</li>
					<li>
						<i class="check"></i>
						<p>Effective management of field agents tasks.</p>
					</li>
					<li>
						<i class="check"></i>
						<p>Significant savings in operational expenses such as call center representatives, number of phone calls, and manual data entry.</p>
					</li>
					<li>
						<i class="check"></i>
						<p>Better customer service - significant reduction in tasks related errors and inquiries, as a result of real-time updates of corporate information system from the field.</p>
					</li>
					<li>
						<i class="check"></i>
						<p>Monitoring field agents productivity and efficiency.</p>
					</li>
				</div>
			</div>
		</div>
	</section>
	<section class="case_study">
		<div class="content">
			<div class="center">
				<h1>View our Case Study of Task Management
					Implemetation</h1>
				<button class="button-blue">
					<span>View Case Study</span>
				</button>
			</div>
		</div>
	</section>
<?php
include("templates/request-demo.php");
?>
<?php get_footer(); ?>