<?php
/*
Template Name: Location
*/

get_header('location'); ?>

    <div class="section-inner">
        <div class="cta-container">
            <div class="splash">
                <h1>Location and Geo Coding</h1>
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
                <p class="comment-gray comment-center">OfficeTrack's mobile employees location module provides a comprehensive online information regarding location, activities and progress of work of field workers. With the location module, managers can view this information using any online platform connected to the Internet (computer, mobile or tablet). The system also provides managers with push notification/alert capability for quick and urgent action to be taken. Using the module, supervisors can manage all field workers from a single system, having a global view of all field workers. The location module also lets managers respond quickly to specific events, preventing the occurrences of unnecessary escalations and processes before they even start. The capabilities of the system enhance significantly managerial and operational efficiency, and allows for considerable savings.</p>
                <div class="video">
                    <iframe width="1088px" height="599px" src="https://www.youtube.com/embed/uEKJClvJCb4" frameborder="0" allowfullscreen></iframe>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/shadow.png">
                </div>
            </div>
            <div class="columns">
                <div class="column left">
                    <div class="title_mini-blue">
                        <h3>Main Features</h3>
                        <div class="mini-blue"></div>
                    </div>
                    <p style="display: block;">• View locations of field workers and vehicles on a map in real-time.</p>
                    <p style="display: block;">• Receive alerts whenever field workers enter and/or leave customers / suppliers.</p>
                    <p style="display: block;">• Monitor employees work progress in defined working areas.</p>
                    <p style="display: block;">• Receive distress messages, and updates (available, busy, etc.) from field workers.</p>
                    <p style="display: block;">• Recover historic routes and location data - up to three months back.</p>
                    <p style="display: block;">• Set points of interest and polygons, and ascribed them to employees.</p>
                    <p style="display: block;">• Produce a variety of reports and graphs that allow you to investigate and measure the efficiency of work perform by employee(s).</p>
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
                        <p>Significant savings in operational expenses such as call center representatives number of phone calls, and manual data entry.</p>
                    </li>
                    <li>
                        <i class="check"></i>
                        <p>Better customer service - significant reduction in tasks related errors and inquiries, as a result of real-time updates of corporate information system from the field.</p>
                    </li>
                    <li>
                        <i class="check"></i>
                        <p>Monitoring field agents productivity	and efficiency.</p>
                    </li>
                </div>
            </div>
        </div>
    </section>
<?php
include("templates/request-demo.php");
?>
<?php get_footer(); ?>