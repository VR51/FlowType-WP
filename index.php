<?php
/*
Plugin Name: FlowType WP
Plugin URI: http://journalxtra.com/
Description: Alpha Version. Make font size responsive. Responsive web typography at its finest: font-size based on element width. Uses FlowType.JS (see readme file)
Version: 1.1
Author: Lee Hodson
Author URI: http://journalxtra.com/
Contributors: leehodson
Tags: responsive,font,text,responsive text
Donate link: http://journalxtra.com
Requires at least: 3.0
Tested up to: 4.0
Stable tag: 1.1
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

//avoid direct calls to this file where wp core files not present
if (!function_exists('add_action')) {
    header('Status: 403 Forbidden');
    header('HTTP/1.1 403 Forbidden');
    exit();
}

// Register Script
function vr_flowtype_wp() {

	$plugin_name='FlowType';
	$plugind = plugins_url( '/', __FILE__ );
	wp_register_script( 'vr_flowtype_wp', $plugind.'include/flowtype.js', false, '1.1', true );
	wp_enqueue_script( 'vr_flowtype_wp' );
}

// Hook into the 'wp_enqueue_scripts' action
add_action( 'wp_enqueue_scripts', 'vr_flowtype_wp', 1 );

// Add Settings to Footer

function vr_flowtype_settings() {
  ?>
  
<script>
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
/* Written with Genesis and Dynamik in mind. Adjust, add or remove tags/selectors as needed */
        $j = jQuery.noConflict();
        $j(document).ready(function($j) {
        /* Apply settings to your site header */
            $j(".site-header").flowtype({
                minFont: 14,
                maxFont: 18
            });
            $j(".site-header *").flowtype({
                minFont: 14,
                maxFont: 18
            });
        /* Apply settings to your site's main content */
            $j(".content").flowtype({
                minFont: 14,
                maxFont: 18,
                maxWidth: 800
            });
            $j(".content *").flowtype({
                minFont: 14,
                maxFont: 18
            });
        /* Apply settings to your site's sidebar */
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
        /* Apply settings to specific elements */
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
                maxWidth: 800
            });
            $j(".site-inner .entry-title").flowtype({
                minFont: 30,
                maxFont: 34,
                maxWidth: 800
            });
            $j(".site-inner .entry-title *").flowtype({
                minFont: 30,
                maxFont: 34,
                maxWidth: 800
            });
            $j("#ez-fat-footer-container").flowtype({
                minFont: 14,
                maxFont: 22,
                maxWidth: 400
            });
            $j("#ez-fat-footer-container *").flowtype({
                minFont: 14,
                maxFont: 22,
                maxWidth: 400
            });
            $j("#ez-fat-footer-container .widgettitle").flowtype({
                minFont: 20,
                maxFont: 24,
                maxWidth: 400
            });
            $j("#ez-fat-footer-container .widgettitle *").flowtype({
                minFont: 20,
                maxFont: 24,
                maxWidth: 400
            });
            $j(".site-footer").flowtype({
                minFont: 12,
                maxFont: 16
            });
            $j(".site-footer *").flowtype({
                minFont: 12,
                maxFont: 16
            });
        });
   
</script>
  
  
  <?php
}

add_action('wp_footer', 'vr_flowtype_settings', 99);

?>