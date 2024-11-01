<?php
/*
Plugin Name: WP Really Simple Discovery Link Remover
Plugin URI: https://wordpress.org/plugins/wp-really-simple-discovery-link-remover/
Description: This plugin will remove the Really Simple Discovery links that gets appended to the header. If you are not using any Really Simple Discovery services such as pingbacks then you can remove the link to hide the fact that you are using WordPress.
Author: Pankaj Kumar Mondal
Author URI: http://pankajmondal.com
Tags: remove, rsd, rsd_link, really simple discovery, discovery, header
Version: 0.1
License: GPLv2 or later.
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

remove_action('wp_head', 'rsd_link');

?>