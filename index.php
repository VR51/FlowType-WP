<?php
/*
Plugin Name: FlowType WP
Plugin URI: http://journalxtra.com/
Description: Alpha Version. Make font size responsive. Responsive web typography at its finest: font-size based on element width.
Version: 1.1
Author: Lee Hodson
Author URI: http://journalxtra.com/
Contributors: leehodson,simplefocus
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
      });
    });
</script>

<script> 
        $j = jQuery.noConflict();
        $j(document).ready(function($j) {
            $j(".entry-content").flowtype({
                minFont: 12,
                maxWidth: 800
            });
            $j(".entry-content *").flowtype({
                minFont: 12
            });
            $j("p *").flowtype({
                minFont: 12
            });
            $j("ul").flowtype({
                minFont: 12
            });
            $j("ul *").flowtype({
                minFont: 12
            });
             $j(".site-title").flowtype({
                minFont: 30,
                maxFont: 43,
                fontRatio : 15,
                minWidth : 1,
                maxWidth : 450
            });
             $j(".site-title *").flowtype({
                minFont: 30,
                maxFont: 43,
                fontRatio : 15,
                minWidth : 1,
                maxWidth : 450
            });
            $j("h2").flowtype({
                minFont: 24,
                maxFont: 30
            });
            $j(".entry-title").flowtype({
                minFont: 24,
                maxFont: 30
            });
            $j(".entry-title *").flowtype({
                minFont: 24,
                maxFont: 30
            });
        });
   
</script>
  
  
  <?php
}

add_action('wp_footer', 'vr_flowtype_settings', 99);

?>