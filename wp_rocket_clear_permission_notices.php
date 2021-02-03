<?php

/**
 * Plugin Name: WP Rocket | Clear Permission Notices
 * Description: Removes admin notices from displaying when related to host file permissions on .htaccess and advanced-cache.php files for WP Rocket.
 * Plugin URI:  https://github.com/nbbdoc/wp_rocket_clear_permissions_notices
 * Author:      WP Rocket Support Team
 * Author URI:  http://wp-rocket.me/
 * License:     GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Copyright SAS WP MEDIA 2021
 */


namespace WP_Rocket\Helpers\clear_permission_notices;

// Standard plugin security, keep this line in place.
defined( 'ABSPATH' ) or die();

// Disable .htaccess write permission notices

remove_action( 'admin_notices', 'rocket_warning_htaccess_permissions' );

// Disable advanced-cache.php write permission notices

remove_action( 'admin_notices', 'notice_advanced_cache_permissions' );