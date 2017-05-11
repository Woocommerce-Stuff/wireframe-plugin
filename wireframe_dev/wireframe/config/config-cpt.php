<?php
/**
 * Plugin_CPT config file for Wireframe plugins.
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
 * @see    object Plugin_CPT
 * @return array  Default configuration values.
 */
function wireframe_plugin_config_cpt() {
	/**
	 * Wired.
	 *
	 * Wires the Plugin_CPT actions & filters at runtime.
	 *
	 * Note: Most objects can be wired to hook actions & filters when an object
	 * is instantiated. This is optional, because some objects do not need any
	 * actions or filters.
	 *
	 * @since 1.0.0 Wireframe
	 * @since 1.0.0 Wireframe_Plugin
	 * @var   bool $wired Wire hooks via __construct(). Default: false
	 */
	$wired = false;

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
	 * @var   array $actions Requires $enabled = true.
	 */
	$actions = array(
		'example_cpt_1' => array(
			'tag'      => 'init',
			'function' => 'register',
			'priority' => 10,
			'args'     => null,
		),
	);

	/**
	 * Filters to hook.
	 *
	 * @since 1.0.0 Wireframe
	 * @since 1.0.0 Wireframe_Plugin
	 * @var   array $filters Requires $enabled = true. Default: array()
	 * @todo  WIP.
	 */
	$filters = array();

	/**
	 * Labels.
	 *
	 * @since 1.0.0 Wireframe
	 * @since 1.0.0 Wireframe_Plugin
	 * @var   array $labels
	 */
	$labels = array(
		'example_cpt_1' => array(
			'name'                  => _x( 'Wireframe Plugin CPT', 'Post Type General Name', 'wireframe-plugin' ),
			'singular_name'         => _x( 'Wireframe Plugin CPT', 'Post Type Singular Name', 'wireframe-plugin' ),
			'menu_name'             => __( 'Wireframe Plugin CPT', 'wireframe-plugin' ),
			'name_admin_bar'        => __( 'Wireframe Plugin CPT', 'wireframe-plugin' ),
			'archives'              => __( 'Item Archives', 'wireframe-plugin' ),
			'parent_item_colon'     => __( 'Parent Item:', 'wireframe-plugin' ),
			'all_items'             => __( 'All Items', 'wireframe-plugin' ),
			'add_new_item'          => __( 'Add New Item', 'wireframe-plugin' ),
			'add_new'               => __( 'Add New', 'wireframe-plugin' ),
			'new_item'              => __( 'New Item', 'wireframe-plugin' ),
			'edit_item'             => __( 'Edit Item', 'wireframe-plugin' ),
			'update_item'           => __( 'Update Item', 'wireframe-plugin' ),
			'view_item'             => __( 'View Item', 'wireframe-plugin' ),
			'search_items'          => __( 'Search Item', 'wireframe-plugin' ),
			'not_found'             => __( 'Not found', 'wireframe-plugin' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'wireframe-plugin' ),
			'featured_image'        => __( 'Featured Image', 'wireframe-plugin' ),
			'set_featured_image'    => __( 'Set featured image', 'wireframe-plugin' ),
			'remove_featured_image' => __( 'Remove featured image', 'wireframe-plugin' ),
			'use_featured_image'    => __( 'Use as featured image', 'wireframe-plugin' ),
			'insert_into_item'      => __( 'Insert into item', 'wireframe-plugin' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'wireframe-plugin' ),
			'items_list'            => __( 'Items list', 'wireframe-plugin' ),
			'items_list_navigation' => __( 'Items list navigation', 'wireframe-plugin' ),
			'filter_items_list'     => __( 'Filter items list', 'wireframe-plugin' ),
		),
	);

	/**
	 * Defaults.
	 *
	 * @since 1.0.0 Wireframe
	 * @since 1.0.0 Wireframe_Plugin
	 * @var   array $defaults Module defaults.
	 */
	 $defaults = array(
		'example_cpt_1' => array(
			'label'               => __( 'Wireframe Plugin CPT', 'wireframe-plugin' ),
			'description'         => __( 'Wireframe Plugin CPT Description', 'wireframe-plugin' ),
			'labels'              => $labels['example_cpt_1'],
			'supports'            => array(),
			'taxonomies'          => array( 'category', 'post_tag' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 999,
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
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
	 * @since  1.0.0 Wireframe
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

} // Thanks for using MixaTheme products!
