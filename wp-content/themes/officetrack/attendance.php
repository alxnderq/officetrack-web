<?php
/*
Template Name: Attendance
*/

get_header('attendance'); ?>

    <div class="section-inner">
        <div class="cta-container">
            <div class="splash">
                <h1>Attendance</h1>
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
                <p class="comment-gray comment-center">The Attendance module of OfficeTrack allows workers to report work hours from the field, using their mobile phone. Attendance reporting is done through OfficeCore application, OfficeCore IVR service, or by sending SMS through Office Core SMSC. Using this service, managers receive a complete and up-to-date attendance overview of all his/her workers. The reports are displayed in managerial Internet site, witch information about the location & time where and when the attendance report was made.This information can be exported and displayed on a number of various reports. The service includes automatic export of the attendance reports to the organizational payroll system.</p>
                <div class="video">
                    <iframe width="1088px" height="599px" src="https://www.youtube.com/embed/awFfvWFGQCU" frameborder="0" allowfullscreen></iframe>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/shadow.png">
                </div>
            </div>
            <div>
                <div class="columns">
                    <div class="column left">
                        <div class="title_mini-blue">
                            <h3>Main Features</h3>
                            <div class="mini-blue"></div>
                        </div>
                        <p style="display: block;">• Employees Sign in / Sign Out entries location based.</p>
                        <p style="display: block;">• Mobile reporting per Customer or per Project.</p>
                        <p style="display: block;">• Mobile view of attendance history and option to add previous entries.</p>
                        <p style="display: block;">• On line Alerts and exception reports for missing attendance entries.</p>
                        <p style="display: block;">• Option to block entry not in predefined polygon or area.</p>
                    </div>
                    <div class="column right">
                        <div class="title_mini-blue">
                            <h3>Key Benefits</h3>
                            <div class="mini-blue"></div>
                        </div>
                        <li>
                            <i class="check"></i>
                            <p>The system present all attendance reporting on a single screen.</p>
                        </li>
                        <li>
                            <i class="check"></i>
                            <p>Report attendance by sending SMS, using IVR voice system, and using the mobile application.</p>
                        </li>
                        <li>
                            <i class="check"></i>
                            <p>Attendance reporting includes: time and date, name of employee, location, project code, name of customer visited, and others.</p>
                        </li>
                        <li>
                            <i class="check"></i>
                            <p>Report from the field different events and occasions, such as: beginning and ending a workday, start and finish and activity in a certain site and/or at a particular customer, reporting on a sickness, vacation, training, or any special call of duty.</p>
                        </li>
                        <li>
                            <i class="check"></i>
                            <p>Identify easily and in real-time, missing, reporting, and exceptional or unusual reporting.</p>
                        </li>
                        <li>
                            <i class="check"></i>
                            <p>Supervisors can generate attendance management reports, and define automatic generation of reports in a certain time to their email address.</p>
                        </li>
                        <li>
                            <i class="check"></i>
                            <p>Management can define daily or monthly work hours for each employee, and then follow on actual hours performed up to date.</p>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
include("templates/request-demo.php");
?>
<?php get_footer(); ?>