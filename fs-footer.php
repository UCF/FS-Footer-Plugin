<?php
/*
Plugin Name: UCF FS Footer
Description: Adds a standard UCF F&S footer to UCF F&S sites.
Github Plugin URI: UCF/FS-Footer-Plugin
Version: 1.0.8
Author: Mike Setzer
License: GPL3
*/
if ( ! defined( 'WPINC' ) ) {
	die;
}


define( 'FS_FOOTER__PLUGIN_FILE', __FILE__ );

require_once 'includes/fs-footer-config.php';
require_once 'includes/fs-footer-feed.php';
require_once 'includes/fs-footer-common.php';


/**
 * Activation/deactivation hooks
 **/
if ( !function_exists( 'FS_FOOTER_plugin_activation' ) ) {
	function FS_FOOTER_plugin_activation() {
		return FS_FOOTER_Config::add_options();
	}
}

if ( !function_exists( 'FS_FOOTER_plugin_deactivation' ) ) {
	function FS_FOOTER_plugin_deactivation() {
		return;
	}
}

register_activation_hook( FS_FOOTER__PLUGIN_FILE, 'FS_FOOTER_plugin_activation' );
register_deactivation_hook( FS_FOOTER__PLUGIN_FILE, 'FS_FOOTER_plugin_deactivation' );
