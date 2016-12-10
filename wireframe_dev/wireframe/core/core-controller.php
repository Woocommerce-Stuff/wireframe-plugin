<?php
/**
 * Core_Controller is a Wireframe class.
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
 * No direct access to this file.
 *
 * @since 1.0.0 Wireframe_Plugin
 */
defined( 'ABSPATH' ) or die();

/**
 * Check if the class exists.
 *
 * @since 1.0.0 Wireframe_Plugin
 */
if ( ! class_exists( 'MixaTheme\Wireframe\Plugin\Core_Controller' ) ) :
	/**
	 * Core_Controller is a core Wireframe class for plugin activation.
	 *
	 * @since 1.0.0 Wireframe_Plugin
	 * @see   https://github.com/mixatheme/Wireframe
	 */
	final class Core_Controller extends Core_Module_Abstract implements Core_Controller_Interface {
		/**
		 * DB Tables.
		 *
		 * @access private
		 * @since  1.0.0 Wireframe_Plugin
		 * @var    object $_dbtables
		 */
		private $_dbtables;

		/**
		 * CPT.
		 *
		 * @access private
		 * @since  1.0.0 Wireframe_Plugin
		 * @var    object $_cpt
		 */
		private $_cpt;

		/**
		 * Taxonomy.
		 *
		 * @access private
		 * @since  1.0.0 Wireframe_Plugin
		 * @var    object $_taxonomy
		 */
		private $_taxonomy;

		/**
		 * Shortcode.
		 *
		 * @access private
		 * @since  1.0.0 Wireframe_Plugin
		 * @var    object $_shortcode
		 */
		private $_shortcode;

		/**
		 * Options.
		 *
		 * @access private
		 * @since  1.0.0 Wireframe_Plugin
		 * @var    object $_options
		 */
		private $_options;

		/**
		 * Settings.
		 *
		 * @access private
		 * @since  1.0.0 Wireframe_Plugin
		 * @var    object $_settings
		 */
		private $_settings;

		/**
		 * Constructor runs when this class is instantiated.
		 *
		 * @since 1.0.0 Wireframe_Plugin
		 * @param array $config Required array of config variables.
		 */
		public function __construct( $config ) {

			// Custom properties required for this class.
			$this->_dbtables = $config['dbtables'];

			// Default properties via Wireframe abstract class.
			$this->wired    = $config['wired'];
			$this->prefix   = $config['prefix'];
			$this->_actions = $config['actions'];
			$this->_filters = $config['filters'];

			/**
			 * Most objects are not required to be wired (hooked) when instantiated.
			 * In your object config file(s), you can set the `$wired` value
			 * to true or false. If false, you can decouple any hooks and declare
			 * them elsewhere. If true, then objects fire hooks onload.
			 *
			 * Config data files are located in: `wireframe_dev/wireframe/config/`
			 */
			if ( isset( $this->wired ) ) {
				$this->wire_actions( $this->_actions );
				$this->wire_filters( $this->_filters );
			}
		}

		/**
		 * Activate.
		 *
		 * @since 1.0.0 Wireframe_Plugin
		 */
		public function activate() {
			// $this->_create_dbtables();
		}

		/**
		 * Deactivate.
		 *
		 * @since 1.0.0 Wireframe_Plugin
		 */
		public function deactivate() {}

		/**
		 * Uninstall.
		 *
		 * @since 1.0.0 Wireframe_Plugin
		 */
		public static function uninstall() {}


		/**
		 * Create DB Tables.
		 *
		 * Checks if the DBTables object is instantiated with SQl statement(s)
		 * passed-in, then creates database tables. If the DBTables object is not
		 * instantiated or missing a valid SQL statement, no tables are created.
		 *
		 * @access private
		 * @since  1.0.0 Wireframe_Plugin
		 * @see    object DBTables
		 * @see    wireframe_plugin_config_controller()
		 */
		private function _create_dbtables() {
			if ( isset( $this->_dbtables ) && null !== $this->_dbtables->get_defaults() ) {
				foreach ( $this->_dbtables->get_defaults() as $id => $sql ) {
					$this->_dbtables->create( $id, $sql );
				}
			}
		}

		/**
		 * Drop DB Tables.
		 *
		 * @access private
		 * @since  1.0.0 Wireframe_Plugin
		 * @see    object DBTables
		 * @see    wireframe_plugin_config_controller()
		 */
		private function _drop_dbtables() {
			if ( isset( $this->_dbtables ) && null !== $this->_dbtables->get_defaults() ) {
				foreach ( $this->_dbtables->get_defaults() as $id => $sql ) {
					$this->_dbtables->drop( $id, $sql );
				}
			}
		}

	} // Core_Controller.

endif; // Thanks for using MixaTheme products!
