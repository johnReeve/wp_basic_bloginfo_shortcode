<?php
/**
 * @package bloginfo_ShortCode
 * @version 1.6
 */
/*
Plugin Name: Bloginfo Short Code
Plugin URI: http://johnrreeve.com	
Description: Very Simple plug to make it so that I cna put the bloginfo into a short code
Author: John Reeve
Version: 1.0
Author URI: http://johnrreeve.com

-- usage --

Should be pretty obvious, but you just us it [bloginfop "siteURL"] or whatever

*/

function jreeve_bloginfo_shortcode( $atts ) {
   extract(shortcode_atts(array(
       'key' => '',
   ), $atts));
   return get_bloginfo($key);
}

add_shortcode('bloginfo', 'jreeve_bloginfo_shortcode');
