<?php
/**
 * Handles uninstallation logic.
 **/
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    die;
}


require_once 'includes/fs-footer-config.php';

// Delete options
FS_FOOTER_Config::delete_options();
