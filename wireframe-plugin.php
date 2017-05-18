<?php
/**
 * Plugin Name: Wireframe Plugin
 * Plugin URI:  https://github.com/mixatheme/wireframe-plugin
 * Description: Wireframe Plugin is an OOP WordPress plugin boilerplate. Wireframe Plugin enables WordPress Developers to rapidly wire GPL and WordPress Coding Standards compliant plugins for professional client projects or for selling premium plugins in any marketplace. Wireframe Plugin is part of the Wireframe Suite for WordPress by MixaTheme.
 * Version:     1.0.0
 * Text Domain: wireframe-plugin
 * Domain Path: /languages
 * Author:      MixaTheme, Tada Burke
 * Author URI:  https://mixatheme.com
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 *
 * @package   Wireframe_Plugin
 * @copyright 2016 MixaTheme
 * @see       https://github.com/mixatheme/Wireframe
 *
 * This software is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this software. If not, see <http://www.gnu.org/licenses/>.
 *
 * Table of Contents:
 *
 *    § 01. Constants
 *    § 02. Compatibility
 *
 * (New sections are separated by lines.)
 */

/**
 * §.01. Constant: Plugin text-domain.
 * =============================================================================
 *
 * Plugin text-domain (must match slug).
 *
 * @since 1.0.0 Wireframe
 * @since 1.0.0 Wireframe_Plugin
 */
define( 'WIREFRAME_PLUGIN_TEXTDOMAIN', 'wireframe-plugin' );

/**
 * §.01. Constant: Plugin product name.
 *
 * Official product name for your plugin. This is used in various headings,
 * titles and menus. Your official product name should be consistent.
 *
 * @since 1.0.0 Wireframe
 * @since 1.0.0 Wireframe_Plugin
 */
define( 'WIREFRAME_PLUGIN_PRODUCT', 'Wireframe Plugin' );

/**
 * §.01. Constant: Plugin prefix.
 *
 * A prefix for various strings, handles and helpers. This is primarily used
 * for keeping names short and helps avoid clashes. 3-5 characters preferred.
 *
 * @since 1.0.0 Wireframe
 * @since 1.0.0 Wireframe_Plugin
 */
define( 'WIREFRAME_PLUGIN_PREFIX', 'wireframe_plugin' );

/**
 * §.01. Constant: Plugin version.
 *
 * Tagged version number for this release. This is used throughout many
 * dependencies, especially when you enqueue your styles & scripts.
 * This can also be used for version checking backwards compatibility.
 *
 * @since 1.0.0 Wireframe
 * @since 1.0.0 Wireframe_Plugin
 */
define( 'WIREFRAME_PLUGIN_VERSION', '1.0.0' );

/**
 * §.01. Constant: Plugin directory.
 *
 * Plugin directory path. Retrieves the absolute path to the directory
 * of the current plugin. Returns an absolute server path, for example:
 * `/srv/www/wp/htdocs/wp-content/plugins/wireframe-plugin/` - not a URI.
 *
 * @since 1.0.0 Wireframe
 * @since 1.0.0 Wireframe_Plugin
 */
define( 'WIREFRAME_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

/**
 * §.01. Constant: Plugin path to developer files.
 *
 * Absolute path to the `wireframe_dev` directory. This directory is specifically
 * for Developers and contains functions, classes, JS, SCSS, etc.
 *
 * @since 1.0.0 Wireframe
 * @since 1.0.0 Wireframe_Plugin
 */
define( 'WIREFRAME_PLUGIN_DEV', WIREFRAME_PLUGIN_DIR . 'wireframe_dev/' );

/**
 * §.01. Constant: Plugin path to client files.
 *
 * Absolute path to the `wireframe_client` directory. This directory primarily
 * holds front-end assets, such as: images, fonts, scripts, stylesheets, etc.
 *
 * @since 1.0.0 Wireframe
 * @since 1.0.0 Wireframe_Plugin
 */
define( 'WIREFRAME_PLUGIN_CLIENT', 'wireframe_client/' );

/**
 * §.01. Constant: Plugin URI for assets, etc.
 *
 * Plugin URI. Retrieve plugin directory URI. Checks for SSL. Returns URI with
 * a trailing slash following the directory address. This is primarily used for
 * loading your plugin assets.
 *
 * @since 1.0.0 Wireframe
 * @since 1.0.0 Wireframe_Plugin
 */
define( 'WIREFRAME_PLUGIN_URI', plugin_dir_url( __FILE__ ) );

/**
 * §.01. Constant: Plugin path to the Wireframe API.
 *
 * Absolute path to the Wireframe API. This directory holds core classes,
 * module classes, helper functions, utilities, config data, etc.
 * NO leading slash. HAS trailing slash.
 *
 * @since 1.0.0 Wireframe
 * @since 1.0.0 Wireframe_Plugin
 */
define( 'WIREFRAME_PLUGIN_API', WIREFRAME_PLUGIN_DEV . 'wireframe/' );

/**
 * § 03. Constant: Wireframe Objects.
 *
 * Absolute path to the Wireframe API for loading class files. This should
 * only be used if you choose to NOT use Composer's autoloading feature.
 *
 * @since 1.0.0 Wireframe
 * @since 1.0.0 Wireframe_Plugin
 */
define( 'WIREFRAME_PLUGIN_OBJECTS', WIREFRAME_PLUGIN_DIR . '/wireframe_dev/wireframe/' );

/**
 * §.01. Constant: Plugin path to template files (optional).
 *
 * @since 1.0.0 Wireframe
 * @since 1.0.0 Wireframe_Plugin
 */
define( 'WIREFRAME_PLUGIN_TPL', WIREFRAME_PLUGIN_DIR . WIREFRAME_PLUGIN_CLIENT . 'tpl/' );

/**
 * §.01. Constant: Plugin URI for CSS files (optional).
 *
 * @since 1.0.0 Wireframe
 * @since 1.0.0 Wireframe_Plugin
 */
define( 'WIREFRAME_PLUGIN_CSS', WIREFRAME_PLUGIN_URI . WIREFRAME_PLUGIN_CLIENT . 'css/' );

/**
 * §.01. Constant: Plugin URI for images (optional).
 *
 * @since 1.0.0 Wireframe
 * @since 1.0.0 Wireframe_Plugin
 */
define( 'WIREFRAME_PLUGIN_IMG', WIREFRAME_PLUGIN_URI . WIREFRAME_PLUGIN_CLIENT . 'img/' );

/**
 * §.01. Constant: Plugin URI for JavaScript files (optional).
 *
 * @since 1.0.0 Wireframe
 * @since 1.0.0 Wireframe_Plugin
 */
define( 'WIREFRAME_PLUGIN_JS', WIREFRAME_PLUGIN_URI . WIREFRAME_PLUGIN_CLIENT . 'js/' );

/**
 * §.01. Constant: Plugin URI for language files.
 *
 * @since 1.0.0 Wireframe
 * @since 1.0.0 Wireframe_Plugin
 */
define( 'WIREFRAME_PLUGIN_LANG', WIREFRAME_PLUGIN_TEXTDOMAIN . '/' . WIREFRAME_PLUGIN_CLIENT . 'lang/' );

/**
 * § 02. Compatibility: Checker.
 * =============================================================================
 *
 * If WordPress version is incompatible, load backwards compatibility helpers;
 * else continue bootstrapping wireframe.php.
 *
 * Note: Whenever WordPress releases a new update, we will always sync this
 * file on GitHub to reflect the latest WordPress version ;-)
 *
 * @since 1.0.0 Wireframe
 * @since 1.0.0 Wireframe_Plugin
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7.5', '<' ) ) {

	// Incompatible version, but you still need the translation file.
	load_plugin_textdomain( WIREFRAME_PLUGIN_TEXTDOMAIN, false, WIREFRAME_PLUGIN_TEXTDOMAIN );

	// Load any backwards compatibility handlers.
	require WIREFRAME_PLUGIN_API . 'functions/functions-compat.php';

	// Finally, hook any Admin notices to alert your customers.
	add_action( 'admin_notices', 'wireframe_plugin_compat_wordpress' );

} else {

	// Version looks good! Bootstrap your Wireframe_Plugin...
	require_once WIREFRAME_PLUGIN_DEV . 'wireframe.php';

}

/** ADD YOUR CUSTOM FUNCTIONS BELOW THIS LINE... */
/** ------------------------------------------------------------------------- */
