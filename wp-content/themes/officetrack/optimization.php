<?php
/*
Template Name: Planning and Optimization
*/

get_header('optimization'); ?>

    <div class="section-inner">
        <div class="cta-container">
            <div class="splash">
                <h1>Planning and Optimization</h1>
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
                <p class="comment-gray comment-center">The daily planning process of field agents routes, including order of tasks, and time slots scheduling, is an operational challenge which increases significantly the overhead costs of operations.<br><br>
                    The Office Track Optimizer interface allows users to easily define a set the distribution constraints mapped against organizational resources, in order to get optimal routes from the system. This is done by talking into account travel distances, vailable time slots, number of planned tasks, delivery capacity of a vehicle, special priorities if exists, and resource skills.<br><br>
                    In addition, the system allows agents to re-optimize his/her routs and tasks from the field, based on current conditions, using his/her Office Track mobile application. Managers can then investigate the gaps between planned and performed activities, in order to understand the gaps, and if needed, improve the balance of resources, transportation costs and overall performance.</p>
                <div class="video">
                    <iframe width="1088px" height="599px" src="https://www.youtube.com/embed/UIrGmEhVzig" frameborder="0" allowfullscreen></iframe>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/shadow.png">
                </div>
            </div>
            <div class="columns">
                <div class="column left">
                    <div class="title_mini-blue">
                        <h3>Main Features</h3>
                        <div class="mini-blue"></div>
                    </div>
                    <p style="display: block;">The optimization module plans optimal utilization of resources for any given workday, based on:</p>
                    <p style="display: block;">• Geographical distances to customers locations.</p>
                    <p style="display: block;">• Time slots provided by customers.</p>
                    <p style="display: block;">• Skills of agents.</p>
                    <p style="display: block;">• Capacity of vehicles.</p>
                    <p style="display: block;">• Expected duration of customers service time.</p>
                    <p style="display: block;">• Capital and variable costs of resources.</p>
                </div>
                <div class="column right">
                    <div class="title_mini-blue">
                        <h3>Key Benefits</h3>
                        <div class="mini-blue"></div>
                    </div>
                    <li>
                        <i class="check"></i>
                        <p>Major savings in time, expenses and resources.</p>
                    </li>
                    <li>
                        <i class="check"></i>
                        <p>Improved field work efficiency.</p>
                    </li>
                    <li>
                        <i class="check"></i>
                        <p>Optimal utilization of resources.</p>
                    </li>
                    <li>
                        <i class="check"></i>
                        <p>Improved long term work planning.</p>
                    </li>
                </div>
            </div>
        </div>
    </section>

    <?php
        include("templates/request-demo.php");
    ?>
<?php get_footer(); ?>