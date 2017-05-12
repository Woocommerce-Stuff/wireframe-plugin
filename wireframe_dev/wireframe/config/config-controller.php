<?php
/**
 * Core_Controller config file for Wireframe themes & plugins.
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
 * @since 1.0.0 Wireframe
 * @since 1.0.0 Wireframe_Plugin
 */
namespace MixaTheme\Wireframe\Plugin;

/**
 * Stores array of default config data for passing into objects.
 *
 * Option #1: We use a function so the config data can be called and reused
 *            easily when you need it.
 *
 * Option #2: Put your array data inside a Service closure (see wireframe.php).
 *            Another alternative is putting all your object configs into one
 *            single config file to minimize your file count.
 *
 * @since  1.0.0 Wireframe
 * @since  1.0.0 Wireframe_Plugin
 * @see    object Core_Controller
 * @return array  Default configuration values.
 */
function wireframe_plugin_config_controller() {
	/**
	 * Wired.
	 *
	 * Wires the Core_Plugin actions & filters at runtime. If this is ever set to
	 * false, then this config will be disabled. This config defaults to `true`
	 * because most plugins will need at least 1 plugin module enabled.
	 *
	 * PRO-TIP: Even if this config sets $wired = true, you can still disable
	 * any plugin module by setting $wired = false in your desired config file(s).
	 *
	 * @since 1.0.0 Wireframe
	 * @since 1.0.0 Wireframe_Plugin
	 * @see   object Core_Plugin
	 * @see   wireframe.php The Core_Plugin gets instantiated with this config.
	 * @var   bool $wired Wire hooks via __construct(). Default: true
	 */
	$wired = true;

	/**
	 * Prefix for handles.
	 *
	 * @since 1.0.0 Wireframe
	 * @since 1.0.0 Wireframe_Plugin
	 * @var   string $prefix Default: WIREFRAME_PLUGIN_PREFIX
	 */
	$prefix = WIREFRAME_PLUGIN_PREFIX;

	/**
	 * Actions to hook.
	 *
	 * @since 1.0.0 Wireframe
	 * @since 1.0.0 Wireframe_Plugin
	 * @var   array $actions Requires $wired = true. Default: array()
	 */
	$actions = array();

	/**
	 * Filters to hook.
	 *
	 * @since 1.0.0 Wireframe
	 * @since 1.0.0 Wireframe_Plugin
	 * @var   array $filters Requires $wired = true. Default: array()
	 * @todo  WIP.
	 */
	$filters = array();

	/**
	 * Language core.
	 *
	 * Enables the Core_Language object for registering custom language files.
	 * In your `config-language.php` config file you MUST also set $wired = true.
	 *
	 * Example:
	 *
	 * 		1. $language = null;
	 * 		2. $language = new Core_Language( wireframe_plugin_config_language() );
	 *
	 * @since 1.0.0 Wireframe
	 * @since 1.0.0 Wireframe_Plugin
	 * @var   null|object Core_Language( @param callable ). Default: null
	 */
	$language = new Core_Language( wireframe_plugin_config_language() );

	/**
	 * Taxonomy module.
	 *
	 * Enables the Module_Taxonomy module for registering custom taxonomies.
	 * If enabled, this creates a custom taxonomy called `Wireframe Tax` in
	 * your `Admin/Posts` menu. In your `config-taxonomy.php` config file you
	 * MUST also set $wired = true.
	 *
	 * Example:
	 *
	 * 		1. $taxonomy = null;
	 * 		2. $taxonomy = new Module_Taxonomy( wireframe_plugin_config_taxonomy() );
	 *
	 * @since 1.0.0 Wireframe
	 * @since 1.0.0 Wireframe_Plugin
	 * @var   null|object Module_Taxonomy( @param callable ). Default: null
	 */
	$taxonomy = new Module_Taxonomy( wireframe_plugin_config_taxonomy() );

	/**
	 * Custom Post Type module.
	 *
	 * Enables the Module_CPT module for registering custom post types. If enabled,
	 * this creates a custom post type called `Wireframe CPT` in your Admin menu.
	 * In your `config-cpt.php` config file you MUST also set $wired = true.
	 *
	 * Example:
	 *
	 * 		1. $cpt = null;
	 * 		2. $cpt = new Module_CPT( wireframe_plugin_config_cpt() );
	 *
	 * @since 1.0.0 Wireframe
	 * @since 1.0.0 Wireframe_Plugin
	 * @var   null|object Module_CPT( @param callable ). Default: null
	 */
	$cpt = new Module_CPT( wireframe_plugin_config_cpt() );

	/**
	 * Database tables.
	 *
	 * Enables the Module_DBTables module for adding custom Database tables.
	 * In your `config-dbtablespt.php` config file you MUST also set $wired = true.
	 *
	 * Example:
	 *
	 * 		1. $dbtables = null;
	 * 		2. $dbtables = new Module_DBTables( wireframe_plugin_config_dbtables() );
	 *
	 * @since 1.0.0 Wireframe
	 * @since 1.0.0 Wireframe_Plugin
	 * @var   null|object Module_DBTables( @param callable ). Default: null
	 */
	$dbtables = null;

	/**
	 * Options module.
	 *
	 * Enables the Module_Options module for adding custom plugin options.
	 * In your `config-options.php` config file you MUST also set $wired = true.
	 *
	 * Example:
	 *
	 * 		1. $options = null;
	 * 		2. $options = new Module_Options( wireframe_plugin_config_options() );
	 *
	 * @since 1.0.0 Wireframe
	 * @since 1.0.0 Wireframe_Plugin
	 * @var   null|object Module_Options( @param callable ). Default: null
	 */
	$options = null;

	/**
	 * Settings module.
	 *
	 * Enables the Module_Settings module for adding custom plugin settings.
	 * In your `config-settings.php` config file you MUST also set $wired = true.
	 *
	 * Example:
	 *
	 * 		1. $settings = null;
	 * 		2. $settings = new Module_Settings( wireframe_plugin_config_settings() );
	 *
	 * @since 1.0.0 Wireframe
	 * @since 1.0.0 Wireframe_Plugin
	 * @var   null|object Module_Settings( @param callable ). Default: null
	 */
	$settings = null;

	/**
	 * Shortcode module.
	 *
	 * Enables the Module_Shortcode module for loading custom plugin shortcodes.
	 * In your `config-shortcode.php` config file you MUST also set $wired = true.
	 *
	 * Example:
	 *
	 * 		1. $shortcode = null;
	 * 		2. $shortcode = new Module_Shortcode( wireframe_plugin_config_shortcode() );
	 *
	 * @since 1.0.0 Wireframe
	 * @since 1.0.0 Wireframe_Plugin
	 * @var   null|object Module_Shortcode( @param callable ). Default: null
	 */
	$shortcode = new Module_Shortcode( wireframe_plugin_config_shortcode() );

	/**
	 * Admin module.
	 *
	 * Enables the Module_Admin module for loading custom Admin menus and pages.
	 * In your `config-admin.php` config file you MUST also set $wired = true.
	 *
	 * Example:
	 *
	 * 		1. $settings = null;
	 * 		2. $settings = new Module_Admin( wireframe_plugin_config_admin() );
	 *
	 * @since 1.0.0 Wireframe
	 * @since 1.0.0 Wireframe_Plugin
	 * @var   null|object Module_Settings( @param callable ). Default: null
	 */
	$admin = new Module_Admin( wireframe_plugin_config_admin() );

	/**
	 * UI module.
	 *
	 * Enables the Module_UI module for loading custom front-end styles & scripts.
	 * In your `config-ui.php` config file you MUST also set $wired = true.
	 *
	 * Example:
	 *
	 * 		1. $settings = null;
	 * 		2. $settings = new Module_UI( wireframe_plugin_config_ui() );
	 *
	 * @since 1.0.0 Wireframe
	 * @since 1.0.0 Wireframe_Plugin
	 * @var   null|object Module_Settings( @param callable ). Default: null
	 */
	$ui = new Module_UI( wireframe_plugin_config_ui() );

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
	 * @since  1.0.0 Wireframe
	 * @since  1.0.0 Wireframe_Plugin
	 * @return array|object
	 */
	return array(
		'wired'     => $wired,
		'prefix'    => $prefix,
		'actions'   => $actions,
		'filters'   => $filters,
		'language'  => $language,
		'taxonomy'  => $taxonomy,
		'cpt'       => $cpt,
		'dbtables'  => $dbtables,
		'options'   => $options,
		'settings'  => $settings,
		'shortcode' => $shortcode,
		'admin'     => $admin,
		'ui'        => $ui,
	);

}
