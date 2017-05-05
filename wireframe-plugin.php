<?php
/**
 * Plugin Name: Wireframe Plugin
 * Plugin URI:  https://github.com/mixatheme/wireframe-plugin
 * Description: Wireframe Plugin is an OOP boilerplate starter plugin for WordPress. Wireframe Plugin enables WordPress Developers to rapidly wire GPL and WordPress Coding Standards compliant plugins for professional client projects or for selling premium plugins in any marketplace. Wireframe Plugin is part of the Wireframe Suite for WordPress by MixaTheme.
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
 */

/**
 * Compatibility Checker.
 *
 * Checks WordPress version, then initializes wireframe.php. In this example,
 * Wireframe_Plugin only works with WordPress 4.7.4 or later. If the version is
 * incompatible, load any backwards compatibility helpers; else continue setup.
 *
 * @since 1.0.0 Wireframe_Plugin
 * @todo  Probably a better way to do this?
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7.4', '<' ) ) {

	// Load our backwards compatibility handlers.
	require plugin_dir_path( __FILE__ ) . 'wireframe_dev/wireframe/functions/functions-compat.php';

	// Hook any Admin notices.
	add_action( 'admin_notices', 'wireframe_plugin_notice_compat' );

	// Stop processing.
	return;

} else {

	// Bootstrap your Wireframe plugin.
	require_once plugin_dir_path( __FILE__ ) . 'wireframe_dev/wireframe.php';
}

/** ADD YOUR CUSTOM FUNCTIONS BELOW THIS LINE... */
/** ------------------------------------------------------------------------- */
