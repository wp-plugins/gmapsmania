<?php
/*
Plugin Name: GmapsMania
Plugin URI: http://www.wordpressmania.it/google-maps-mania-plugin/
Description: This plugin allows you to directly embed Gmaps code in your posts or pages using the [gmap] shortcode. 1. Add a custom field with key <i>gmap</i> and value the whole gmap code that you obtain from google, 2. Write [gmap] in your page or post, where you want the map to appear. Save and publish!
Version: 1.0
Author: Stefano Garuti 
Author URI: http://www.wordpressmania.it

This plugin is licensed under the terms of the General Public License. Please see the file license.txt.

*/

function quick_gmaps_func($atts) {
  global $post;
  $post_id = $post->ID;
  $map_code=stripslashes(get_post_meta($post_id, 'gmap', true));
  return $map_code;
}

add_shortcode('gmap', 'quick_gmaps_func');
?>
