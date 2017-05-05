<?php
/**
 * Default helper functions for Wireframe_Plugin.
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
 * Wireframe Plugin Admin Check Screen.
 *
 * @since 1.0.0 Wireframe_Plugin
 */
function wireframe_plugin_admin_check_screen() {

	$toplevel = 'toplevel_page_wireframe';
	$screen   = get_current_screen();

	if ( $screen->id = $toplevel ) {
		$css = 'toplevel';
	} else {
		switch ( $screen->id ) {
			case 'wireframe-plugin_page_wireframe-plugin-page2':
				$css = 'page2';
				break;
			case 'wireframe-plugin_page_wireframe-plugin-page3':
				$css = 'page3';
				break;
			case 'wireframe-plugin_page_wireframe-plugin-page4':
				$css = 'page4';
				break;
			default:
				$css = 'toplevel_page_wireframe-plugin';
				break;
		}
	}
}

/**
 * Wireframe Plugin Admin Check.
 *
 * Check if the current user has Admin permmissions.
 *
 * @since 1.0.0 Wireframe_Plugin
 */
function wireframe_plugin_admin_check() {
	if ( ! is_admin() ) {
		wp_die( 'You are not authorized to access this page.' );
	}
}
