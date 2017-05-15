<?php
/**
 * Notices functions for Wireframe_Plugin.
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
 * Wireframe Plugin Notice: Compatibility.
 *
 * This function is hooked via `wireframe-plugin.php` file if the version of
 * WordPress is not compatible with this plugin. Note: this Admin notice does
 * not use `is-dismissible` because the User should deactivate the plugin.
 *
 * Note: This should be hooked via `admin_notices` function.
 *
 * @since 1.0.0 Wireframe
 * @since 1.0.0 Wireframe_Plugin
 * @see   wireframe-plugin.php
 */
function wireframe_plugin_notice_compat() {
	?>
	<div class="notice notice-error">
		<h1><?php esc_html_e( 'Wireframe Plugin Notice: Compatibility', 'wireframe-plugin' ); ?></h1>
		<p><?php esc_html_e( 'Hey there! Sorry to bother you, but it looks like you are using an older version of WordPress. Wireframe Plugin is only compatible with WordPress 4.7.4 or later. Please deactivate Wireframe Plugin and update WordPress to dismiss this notice. Thank you for using MixaTheme products!', 'wireframe-plugin' ); ?></p>
	</div>
	<?php
}

/**
 * Wireframe Plugin Notice: Initialization Failure.
 *
 * Note: This should be hooked via `admin_notices` function.
 *
 * @since 1.0.0 Wireframe
 * @since 1.0.0 Wireframe_Plugin
 * @see   wireframe.php
 */
function wireframe_plugin_notice_init() {
	?>
	<div class="notice notice-error">
		<h1><?php esc_html_e( 'Wireframe Plugin Notice: Initialization', 'wireframe-plugin' ); ?></h1>
		<p><?php esc_html_e( 'Wireframe Plugin failed to initialize. Please verify your setup.', 'wireframe-plugin' ); ?></p>
	</div>
	<?php
}

/** ADD YOUR CUSTOM FUNCTIONS BELOW THIS LINE... */
/** ------------------------------------------------------------------------- */
