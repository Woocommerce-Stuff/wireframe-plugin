<?php
/**
 * Theme_Notices config data file for Wireframe objects.
 *
 * PHP version 5.6.0
 *
 * @package   Wireframe_Theme
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
 * Namespaces.
 *
 * You should namespace configs to access to your objects.
 *
 * @since 5.3.0 PHP
 * @since 1.0.0 Wireframe
 * @since 1.0.0 Wireframe_Plugin
 */
namespace MixaTheme\Wireframe\Plugin;

/**
 * No direct access to this file.
 *
 * @since 1.0.0 Wireframe
 * @since 1.0.0 Wireframe_Plugin
 */
defined( 'ABSPATH' ) or die();

/**
 * Stores array of default config data for passing into objects.
 *
 * Option #1: We use a function so the config data can be called and reused
 *            easily when you neeed it.
 *
 * Option #2: Put your array data inside a Service closure (see wireframe.php).
 *            Another alternative is putting all your object configs into one
 *            single config file to minimize your file count.
 *
 * @since  1.0.0 Wireframe_Plugin
 * @see    object Theme_Notices
 * @return array  Default configuration values.
 */
function wireframe_plugin_cfg_notices() {
	/**
	 * Wired.
	 *
	 * Wires the Module_Notices actions & filters at runtime. Since all plugins
	 * & themes should have some notices, this should always be set to true.
	 *
	 * Enable this configuration file:
	 *
	 *      1. In this config file, set: $wired = true.
	 *      2. In this config file, modify any default `$notices` data you need.
	 *      3. When you need a notice, hook any public method in Module_Notices.
	 *
	 * @since 1.0.0 Wireframe
	 * @since 1.0.0 Wireframe_Plugin
	 * @see   object Module_Notices
	 * @see   module-notices.php
	 * @var   bool $wired Wire hooks via __construct(). Default: true
	 */
	$wired = true;

	/**
	 * Prefix.
	 *
	 * Many objects use a prefix for various strings, handles, scripts, etc.
	 * Generally, you should use a constant defined in wireframe.php. However,
	 * you can change it here if needed. Default: WIREFRAME_PLUGIN_PREFIX
	 *
	 * @since 1.0.0 Wireframe_Plugin
	 * @var   string $prefix Prefix for handles.
	 */
	$prefix = WIREFRAME_PLUGIN_PREFIX;

	/**
	 * Actions.
	 *
	 * @since 1.0.0 Wireframe_Plugin
	 * @var   array $actions Actions to hook.
	 */
	$actions = array();

	/**
	 * Filters.
	 *
	 * @since 1.0.0 Wireframe_Plugin
	 * @var   array $filters Filters to hook.
	 */
	$filters = array();

	/**
	 * Notices.
	 *
	 * The keys must match the method names in Module_Notices class.
	 *
	 * Note: Your notices will echo data passed through wp_kses_post(). We do it
	 * this way to allow HTML. You may wish to modify Module_Notices->build_notice().
	 *
	 * @since 1.0.0 Wireframe_Plugin
	 * @see   object Module_Notices
	 * @see   module-notices.php
	 * @var   array $notices Array of notices available to hook.
	 */
	$notices = array(
		// Generic notice when init fails.
		'error_init' => array(
			'selectors' => 'notice notice-error',
			'subject'   => '<strong>Wireframe Plugin:</strong>',
			'message'   => 'Initialization Error. Please deactivate Wireframe Plugin, verify any modifications you made, then re-activate when you find the problem.',
		),
	);

	/**
	 * Option #1: Return (array) of config data for passing into objects.
	 *
	 * Option #2: Cast array as an (object) and use object/property sytnax
	 *            vs array syntax. If you choose to cast this array as an (object),
	 *            then you will need to modify the syntax in your class files.
	 *
	 * PRO-TIP: Most of Wireframe's object properties are protected or private
	 * and should not be set outside of this config file. However, you may wish
	 * to use `apply_filters` or `wp_json_encode` or `add_setting` or `add_option`
	 * whenever appropriate. Consider Admin pages for modifying settings & options.
	 *
	 * @since  1.0.0 Wireframe_Plugin
	 * @return array|object
	 */
	return array(
		'wired'   => $wired,
		'prefix'  => $prefix,
		'actions' => $actions,
		'filters' => $filters,
		'notices' => $notices,
	);

} // Thanks for using MixaTheme products!
