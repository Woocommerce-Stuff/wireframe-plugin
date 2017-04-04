<?php
/**
 * Plugin_DBTables config file for Wireframe plugins.
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
 * @see    object Plugin_DBTables
 * @return array  Default configuration values.
 */
function wireframe_plugin_config_dbtables() {
	/**
	 * Default SQL statements.
	 *
	 * Use single-quotes for key/values. If your SQL statement requires quotes,
	 * use double-quotes inside the single-quoted string value.
	 *
	 * Example SQL statement:
	 *
	 * 	+ 'your_key' => 'time datetime DEFAULT "0000-00-00 00:00:00" NOT NULL',
	 *
	 * Example dbDelta() notes:
	 *
	 * 	+ You must put each field on its own line in your SQL statement.
	 *  + You must have two spaces between the words PRIMARY KEY and the
	 *    definition of your primary key.
	 * 	+ You must use the keyword KEY rather than its synonym INDEX and you
	 * 	  must include at least one KEY.
	 *  + KEY must be followed by a SINGLE SPACE, then the key name, then a space,
	 *    then open parenthesis with the field name, then a closed parenthesis.
	 *  + You must not use any apostrophes or backticks around field names.
	 *  + Field types must be all lowercase.
	 *  + SQL keywords, like CREATE TABLE and UPDATE, must be uppercase.
	 *  + You must specify the length of all fields that accept a length
	 *    parameter, for example: int(11).
	 *
	 * @since 1.0.0 Wireframe_Plugin
	 * @var   array
	 * @see   https://codex.wordpress.org/Creating_Tables_with_Plugins
	 *
	 * @internal THIS SHOULD CREATE A NEW TABLE IN YOUR DB: `wp_wireframe_plugin_example`
	 */
	$defaults = array(
		'wireframe_plugin_example' => array(
			'id'          => 'id mediumint(9) NOT NULL AUTO_INCREMENT',
			'time'        => 'time datetime DEFAULT "0000-00-00 00:00:00" NOT NULL',
			'name'        => 'name tinytext NOT NULL',
			'text'        => 'text text NOT NULL',
			'url'         => 'url varchar(55) DEFAULT "" NOT NULL',
			'primary_key' => 'PRIMARY KEY  (id)',
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
		'defaults' => $defaults,
	);
}
