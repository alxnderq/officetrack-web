<?php
/**
 * @package officetrack
 */

register_nav_menu( 'primary', __( 'Default', 'officetrack' ) );
add_theme_support( 'post-thumbnails', array( 'post' ) ); // Add it for posts
add_theme_support( 'post-thumbnails', array( 'page' ) ); // Add it for pages