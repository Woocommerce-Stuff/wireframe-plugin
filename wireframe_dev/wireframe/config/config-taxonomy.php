<?php
/**
 * Plugin_Taxonomy config file for Wireframe plugins.
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
 * @see    object Plugin_Taxonomy
 * @return array  Default configuration values.
 */
function wireframe_plugin_config_taxonomy() {
	/**
	 * Wired.
	 *
	 * Wires the Plugin_Taxonomy actions & filters at runtime.
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
	$actions = array(
		'example' => array(
			'tag'      => 'init',
			'function' => 'register',
			'priority' => 0,
			'args'     => null,
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
	 * Object type.
	 *
	 * (array/string) (required) Name of the object type for the taxonomy object.
	 * Object-types can be built-in Post Type or any Custom Post Type that may be
	 * registered. Default: None
	 *
	 * Example object types:
	 *
	 *    - post
	 *    - page
	 *    - attachment
	 *    - revision
	 *    - nav_menu_item
	 *
	 * @since 1.0.0 Wireframe_Plugin
	 * @var   array $object_type
	 */
	$object_type = array(
		'example' => array(
			'post',
		),
	);

	/**
	 * Labels.
	 *
	 * @since 1.0.0 Wireframe_Plugin
	 * @var   array $labels
	 */
	$labels = array(
		'example' => array(
			'name'                       => _x( 'Wireframe Plugin Taxonomies', 'Taxonomy General Name', 'wireframe_plugin' ),
			'singular_name'              => _x( 'Wireframe Plugin Taxonomy', 'Taxonomy Singular Name', 'wireframe_plugin' ),
			'menu_name'                  => __( 'Wireframe Plugin Taxonomy', 'wireframe_plugin' ),
			'all_items'                  => __( 'All Items', 'wireframe_plugin' ),
			'parent_item'                => __( 'Parent Item', 'wireframe_plugin' ),
			'parent_item_colon'          => __( 'Parent Item:', 'wireframe_plugin' ),
			'new_item_name'              => __( 'New Item Name', 'wireframe_plugin' ),
			'add_new_item'               => __( 'Add New Item', 'wireframe_plugin' ),
			'edit_item'                  => __( 'Edit Item', 'wireframe_plugin' ),
			'update_item'                => __( 'Update Item', 'wireframe_plugin' ),
			'view_item'                  => __( 'View Item', 'wireframe_plugin' ),
			'separate_items_with_commas' => __( 'Separate items with commas', 'wireframe_plugin' ),
			'add_or_remove_items'        => __( 'Add or remove items', 'wireframe_plugin' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'wireframe_plugin' ),
			'popular_items'              => __( 'Popular Items', 'wireframe_plugin' ),
			'search_items'               => __( 'Search Items', 'wireframe_plugin' ),
			'not_found'                  => __( 'Not Found', 'wireframe_plugin' ),
			'no_terms'                   => __( 'No items', 'wireframe_plugin' ),
			'items_list'                 => __( 'Items list', 'wireframe_plugin' ),
			'items_list_navigation'      => __( 'Items list navigation', 'wireframe_plugin' ),
		),
	);

	/**
	 * Defaults. This is just a placeholder array for you to modify.
	 *
	 * @since 1.0.0 Wireframe_Plugin
	 * @var   array $options Your custom defaults for this config.
	 */
	$defaults = array(
		'example' => array(
			'object_type'       => $object_type['example'],
			'labels'            => $labels['example'],
			'hierarchical'      => true,
			'public'            => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'show_tagcloud'     => true,
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
		'wired'    => $wired,
		'prefix'   => $prefix,
		'actions'  => $actions,
		'filters'  => $filters,
		'defaults' => $defaults,
	);
}