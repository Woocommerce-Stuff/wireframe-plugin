<?php
/**
 * Plugin_Admin config file for Wireframe plugins.
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
 * @see    object Plugin_Admin
 * @return array  Default configuration values.
 */
function wireframe_plugin_config_admin() {
	/**
	 * Wired.
	 *
	 * Wires the Plugin_Admin actions & filters at runtime. Since all plugins
	 * should have an admin/about page, this should always be set to true.
	 *
	 * Note: Most objects can be wired to hook actions & filters when an object
	 * is instantiated. This is optional, because some objects do not need any
	 * actions or filters.
	 *
	 * @since 1.0.0 Wireframe_Plugin
	 * @var   bool $wired Wire hooks via __construct(). Default: true
	 */
	$wired = true;

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
	$actions = array(
		'menu_pages' => array(
			'tag'      => 'admin_menu',
			'function' => 'menu_pages',
			'priority' => 10,
			'args'     => 1,
		),
		'submenu_pages' => array(
			'tag'      => 'admin_menu',
			'function' => 'submenu_pages',
			'priority' => 10,
			'args'     => 1,
		),
	);

	/**
	 * Filters to hook.
	 *
	 * @since 1.0.0 Wireframe_Plugin
	 * @var   array $filters Requires $enabled = true.
	 * @todo  WIP.
	 */
	$filters = array();

	/**
	 * Top-level Admin pages.
	 *
	 * @since 1.0.0 Wireframe_Plugin
	 * @var   array $menu_pages
	 */
	$menu_pages = array(
		'page1' => array(
			'page_title' => 'Wireframe Plugin',
			'menu_title' => 'Wireframe Plugin',
			'capability' => 'manage_options',
			'menu_slug'  => sanitize_title( WIREFRAME_PLUGIN_TEXTDOMAIN ),
			'callback'   => 'wireframe_plugin_view_quickstart',
			'icon_url'   => esc_url( '' ),
			'position'   => 9999,
		),
	);

	/**
	 * Submenu Admin pages.
	 *
	 * @since 1.0.0 Wireframe_Plugin
	 * @var   array $submenu_pages
	 */
	$submenu_pages = array(
		'page2' => array(
			'parent_slug' => sanitize_title( WIREFRAME_PLUGIN_TEXTDOMAIN ),
			'page_title'  => 'Submenu Page 1',
			'menu_title'  => 'Page 2',
			'capability'  => 'manage_options',
			'menu_slug'   => sanitize_title( WIREFRAME_PLUGIN_TEXTDOMAIN . '-page2' ),
			'callback'    => 'wireframe_plugin_view_sub2',
		),
		'page3' => array(
			'parent_slug' => sanitize_title( WIREFRAME_PLUGIN_TEXTDOMAIN ),
			'page_title'  => 'Submenu Page 2',
			'menu_title'  => 'Page 3',
			'capability'  => 'manage_options',
			'menu_slug'   => sanitize_title( WIREFRAME_PLUGIN_TEXTDOMAIN . '-page3' ),
			'callback'    => 'wireframe_plugin_view_sub3',
		),
		'page4' => array(
			'parent_slug' => sanitize_title( WIREFRAME_PLUGIN_TEXTDOMAIN ),
			'page_title'  => 'Submenu Page 3',
			'menu_title'  => 'Page 4',
			'capability'  => 'manage_options',
			'menu_slug'   => sanitize_title( WIREFRAME_PLUGIN_TEXTDOMAIN . '-page4' ),
			'callback'    => 'wireframe_plugin_view_sub4',
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
		'wired'         => $wired,
		'prefix'        => $prefix,
		'actions'       => $actions,
		'filters'       => $filters,
		'menu_pages'    => $menu_pages,
		'submenu_pages' => $submenu_pages,
	);
}
