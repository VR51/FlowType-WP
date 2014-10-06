<?php
/*
Plugin Name: FlowType WP
Plugin URI: http://journalxtra.com/
Make font size responsive. Responsive web typography at its finest using the FlowType.js script. This is the WP alpha version (see readme file)
Version: 1.1.1
Author: Lee Hodson
Author URI: http://journalxtra.com/
Contributors: leehodson
Tags: responsive,font,text,responsive text
Donate link: http://journalxtra.com
Requires at least: 3.0
Tested up to: 4.0
Stable tag: 1.1.1
License: GPLv2
License URI: http://wordpress.org/about/gpl/

---------------------------------------------------------------------------

Copyright 2014  Lee Hodson  (email : leehodson@vizred.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

---------------------------------------------------------------------------

*/
?>
<?php

// Prevent direct access to this file
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
*	Define Functions
*/

// Register Scripts
function vr_flowtype_wp() {

	wp_enqueue_script( 'jquery' );
	wp_register_script( 'vr_flowtype_wp', plugins_url( '/', __FILE__ ) . 'include/flowtype.js', false, '1.1.1', true );
	wp_enqueue_script( 'vr_flowtype_wp' );
}

// FlowType Settings function

function vr_flowtype_settings() {
  ?>
  
    <script>
    /* These are the default settings for FlowType.
    *  The options shown here can be applied to any page element. See next script (below) to get an idea of how to use the options.
    */
      $j = jQuery.noConflict();
      $j(document).ready(function($) {
	  $('body').flowtype({
	    /* minimum   : 500,
	      maximum   : 1200,
	      minFont   : 12,
	      maxFont   : 40,
	      fontRatio : 30 */
	  });
	});
    </script>

    <script>
    /* These settings tell FlowType which HTML elements to affect and how to affect them.
    *  Adjust, add or remove tags or selectors as needed
    */
	    $j = jQuery.noConflict();
	    $j(document).ready(function($j) {
	    // Apply settings to your site header
		$j(".site-header").flowtype({
		    minFont: 14,
		    maxFont: 18
		});
		$j(".site-header *").flowtype({
		    minFont: 14,
		    maxFont: 18
		});
	    // Apply settings to your site primary menu
		$j(".nav-primary li").flowtype({
		    minFont: 16,
		    maxFont: 20
		});
		$j(".nav-primary li a").flowtype({
		    minFont: 16,
		    maxFont: 20
		});
		$j(".nav-primary li li a").flowtype({
		    minFont: 16,
		    maxFont: 20
		});
	    // Apply settings to your site's main content
		$j(".content").flowtype({
		    minFont: 14,
		    maxFont: 18,
		    maxWidth: 1400
		});
		$j(".content *").flowtype({
		    minFont: 14,
		    maxFont: 18
		});
	    // Apply settings to your site's sidebar
		$j(".sidebar").flowtype({
		    minFont: 14,
		    maxFont: 18,
		    fontRatio : 15
		});
		$j(".sidebar *").flowtype({
		    minFont: 14,
		    maxFont: 18,
		    fontRatio : 15
		});
		$j(".site-footer").flowtype({
		    minFont: 12,
		    maxFont: 16
		});
		$j(".site-footer *").flowtype({
		    minFont: 12,
		    maxFont: 16
		});
	    // Apply settings to specific elements
		$j(".site-title").flowtype({
		    minFont: 50,
		    maxFont: 60,
		    fontRatio : 15,
		    minWidth : 1,
		    maxWidth : 510
		});
		$j(".site-title *").flowtype({
		    minFont: 50,
		    maxFont: 60,
		    fontRatio : 15,
		    minWidth : 1,
		    maxWidth : 510
		});
		$j(".site-inner h2").flowtype({
		    minFont: 30,
		    maxFont: 34,
		    maxWidth: 1400
		});
		$j(".site-inner .entry-title").flowtype({
		    minFont: 30,
		    maxFont: 34,
		    maxWidth: 1400
		});
		$j(".site-inner .entry-title *").flowtype({
		    minFont: 30,
		    maxFont: 34,
		    maxWidth: 1400
		});
	    });
      
    </script>
  
  
  <?php
}

/**
*	Hook up the functions with WordPress
*/

if ( !is_admin() ) { // Load only when not in the admin area

    add_action( 'wp_enqueue_scripts', 'vr_flowtype_wp', 1 );
    add_action('wp_footer', 'vr_flowtype_settings', 99);
    
}
?>