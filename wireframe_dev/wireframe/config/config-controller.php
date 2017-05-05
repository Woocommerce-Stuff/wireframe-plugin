<?php
/**
 * Core_Controller config file for Wireframe plugins.
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
 * Namespaces.
 *
 * @since 5.3.0 PHP
 * @since 1.0.0 Wireframe_Plugin
 */
namespace MixaTheme\Wireframe\Plugin;

/**
 * Stores array of default config data for passing into objects.
 *
 * Option #1: We use a function so the config data can be called and reused
 *            easily when you neeed it.
 *
 * Option #2: Put your array data inside a Service closure (see wireframe-plugin.php).
 *            Another alternative is putting all your object configs into one
 *            single config file to minimize your file count.
 *
 * @since  1.0.0 Wireframe_Plugin
 * @see    object Core_Controller
 * @return array  Default configuration values.
 */
function wireframe_plugin_config_controller() {
	/**
	 * Wired.
	 *
	 * Wires the Core_Controller actions & filters at runtime.
	 *
	 * Note: Most objects can be wired to hook actions & filters when an object
	 * is instantiated. This is optional, because some objects do not need any
	 * actions or filters.
	 *
	 * @since 1.0.0 Wireframe_Plugin
	 * @var   bool $wired Wire hooks via __construct(). Default: false
	 */
	$wired = false;

	/**
	 * Prefix for handles.
	 *
	 * @since 1.0.0 Wireframe_Plugin
	 * @var   string $prefix Default: WIREFRAME_PLUGIN_PREFIX
	 */
	$prefix = WIREFRAME_PLUGIN_PREFIX;

	/**
	 * Actions to hook.
	 *
	 * @since 1.0.0 Wireframe_Plugin
	 * @var   array $actions Requires $enabled = true.
	 */
	$actions = array();

	/**
	 * Filters to hook.
	 *
	 * @since 1.0.0 Wireframe_Plugin
	 * @var   array $filters Requires $enabled = true.
	 * @todo  WIP.
	 */
	$filters = array();

	/**
	 * DB tables.
	 *
	 * @since 1.0.0 Wireframe_Plugin
	 * @var   object Plugin_DBTables( @param callable )
	 */
	// $dbtables = new Plugin_DBTables( wireframe_plugin_config_dbtables() );
	$dbtables = null;

	/**
	 * CPT.
	 *
	 * @since 1.0.0 Wireframe_Plugin
	 * @var   object Plugin_CPT( @param callable )
	 */
	// $cpt = new Plugin_CPT( wireframe_plugin_config_cpt() );
	$cpt = null;

	/**
	 * CPT.
	 *
	 * @since 1.0.0 Wireframe_Plugin
	 * @var   object Plugin_Taxonomy( @param callable )
	 */
	// $taxonomy = new Plugin_Taxonomy( wireframe_plugin_config_taxonomy() );
	$taxonomy = null;

	/**
	 * CPT.
	 *
	 * @since 1.0.0 Wireframe_Plugin
	 * @var   object Plugin_Shortcode( @param callable )
	 */
	// $shortcode = new Plugin_Shortcode( wireframe_plugin_config_shortcode() );
	$shortcode = null;

	/**
	 * Options.
	 *
	 * @since 1.0.0 Wireframe_Plugin
	 * @var   object Plugin_Options( @param callable )
	 */
	// $options = new Plugin_Options( wireframe_plugin_config_options() );
	$options = null;

	/**
	 * Settings.
	 *
	 * @since 1.0.0 Wireframe_Plugin
	 * @var   object Plugin_Settings( @param callable )
	 */
	// $settings = new Plugin_Settings( wireframe_plugin_config_settings() );
	$settings = null;

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
		'wired'     => $wired,
		'prefix'    => $prefix,
		'actions'   => $actions,
		'filters'   => $filters,
		'dbtables'  => $dbtables,
		'cpt'       => $cpt,
		'taxonomy'  => $taxonomy,
		'shortcode' => $shortcode,
		'options'   => $options,
		'settings'  => $settings,
	);
}