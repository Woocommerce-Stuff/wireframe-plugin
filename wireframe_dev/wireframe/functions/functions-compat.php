<?php
/**
 * Backwards compatibility functions for Wireframe_Plugin.
 *
 * PHP version 5.6.0
 *
 * @package   Wireframe_Plugin
 * @author    MixaTheme, Tada Burke
 * @version   1.0.0 Wireframe_Plugin
 * @copyright 2016 MixaTheme
 * @license   GPL-2.0+
 * @see       https://mixatheme.com
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
 * Wireframe Plugin Compatibility: WordPress.
 *
 * This function is hooked via `wireframe-plugin.php` file if the version of
 * WordPress is not compatible with this plugin. You need to use a helper function
 * because the Module_Notices class is not available yet.
 *
 * Note: This Admin notice does not use `is-dismissible` because the User
 * should deactivate the plugin, then update WordPress.
 *
 * Note: This should be hooked via `admin_notices` function.
 *
 * @since 1.0.0 Wireframe
 * @since 1.0.0 Wireframe_Plugin
 * @see   wireframe-plugin.php
 */
function wireframe_plugin_compat_wordpress() {
	$message = sprintf( __( '%1$s requires at least WordPress %2$s. You are running WordPress %3$s. Please upgrade WordPress and re-activate %1$s.', 'wireframe-plugin' ), WIREFRAME_PLUGIN_PRODUCT, WIREFRAME_PLUGIN_WP, $GLOBALS['wp_version'] );
	printf( __( '<div class="error"><p>%s</p></div>', 'wireframe-plugin' ), $message ); // XSS ok.
}

/** ADD YOUR CUSTOM FUNCTIONS BELOW THIS LINE... */
/** ------------------------------------------------------------------------- */
