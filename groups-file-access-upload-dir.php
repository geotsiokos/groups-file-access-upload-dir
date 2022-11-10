<?php
/**
 * Plugin Name: Groups File Access Upload Dir
 * Plugin URI: https://www.netpad.gr
 * Description: Modifies the upload dir for GFA plugin
 * Version: 1.0.0
 * Author: gtsiokos
 * Author URI: https://www.netpad.gr
 * Text Domain: groups-file-access
 * Domain Path: /languages
 * License: Proprietary or GPLv3 with extensions and exceptions
 *
 * groups-file-access-upload-dir.php
 *
 * @author gtsiokos
 * @package groups-file-access-upload-dir
 * @since groups-file-access-upload-dir 1.0.0
 */
if ( !defined( 'ABSPATH' ) ) {
	exit;
}
add_filter( 'groups_file_access_uploads_dir', 'gfaud_groups_file_access_uploads_dir' );
function gfaud_groups_file_access_uploads_dir( $gfa_uploads_dir ) {
	return untrailingslashit( WP_CONTENT_DIR ) . '/uploads/groups-file-access';
}