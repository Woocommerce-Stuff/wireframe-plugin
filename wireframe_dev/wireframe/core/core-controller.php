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
 * Check if the class exists.
 *
 * @since 1.0.0 Wireframe
 * @since 1.0.0 Wireframe_Plugin
 */
if ( ! class_exists( 'MixaTheme\Wireframe\Plugin\Core_Controller' ) ) :
	/**
	 * Core_Controller core Wireframe class for plugin activation.
	 *
	 * @since 1.0.0 Wireframe
	 * @since 1.0.0 Wireframe_Plugin
	 * @see   https://github.com/mixatheme/Wireframe
	 */
	final class Core_Controller extends Core_Module_Abstract implements Core_Controller_Interface {
		/**
		 * Notices.
		 *
		 * @access private
		 * @since  1.0.0 Wireframe
		 * @since  1.0.0 Wireframe_Plugin
		 * @var    object $_notices
		 */
		private $_notices;

		/**
		 * Taxonomy.
		 *
		 * @access private
		 * @since  1.0.0 Wireframe
		 * @since  1.0.0 Wireframe_Plugin
		 * @var    object $_taxonomy
		 */
		private $_taxonomy;

		/**
		 * CPT.
		 *
		 * @access private
		 * @since  1.0.0 Wireframe
		 * @since  1.0.0 Wireframe_Plugin
		 * @var    object $_cpt
		 */
		private $_cpt;

		/**
		 * DB Tables.
		 *
		 * @access private
		 * @since  1.0.0 Wireframe
		 * @since  1.0.0 Wireframe_Plugin
		 * @var    object $_dbtables
		 */
		private $_dbtables;

		/**
		 * Options.
		 *
		 * @access private
		 * @since  1.0.0 Wireframe
		 * @since  1.0.0 Wireframe_Plugin
		 * @var    object $_options
		 */
		private $_options;

		/**
		 * Settings.
		 *
		 * @access private
		 * @since  1.0.0 Wireframe
		 * @since  1.0.0 Wireframe_Plugin
		 * @var    object $_settings
		 */
		private $_settings;

		/**
		 * Shortcode.
		 *
		 * @access private
		 * @since  1.0.0 Wireframe
		 * @since  1.0.0 Wireframe_Plugin
		 * @var    object $_shortcode
		 */
		private $_shortcode;

		/**
		 * Admin.
		 *
		 * @access private
		 * @since  1.0.0 Wireframe
		 * @since  1.0.0 Wireframe_Plugin
		 * @var    object $_admin
		 */
		private $_admin;

		/**
		 * UI.
		 *
		 * @access private
		 * @since  1.0.0 Wireframe
		 * @since  1.0.0 Wireframe_Plugin
		 * @var    object $_ui
		 */
		private $_ui;

		/**
		 * Constructor runs when this class is instantiated.
		 *
		 * @since 1.0.0 Wireframe
		 * @since 1.0.0 Wireframe_Plugin
		 * @param array $config Required array of config variables.
		 * @todo  WIP. Needs work.
		 */
		public function __construct( $config ) {

			// Declare custom properties required for this class.
			$this->_notices  = $config['notices'];
			$this->_dbtables = $config['dbtables'];

			// Get parent Constructor.
			parent::__construct( $config );
		}

		/**
		 * Activate.
		 *
		 * @since 1.0.0 Wireframe
		 * @since 1.0.0 Wireframe_Plugin
		 * @todo  WIP. Needs work.
		 */
		public function activate() {
			// $this->_create_dbtables();
		}

		/**
		 * Deactivate.
		 *
		 * @since 1.0.0 Wireframe
		 * @since 1.0.0 Wireframe_Plugin
		 * @todo  WIP. Needs work.
		 */
		public function deactivate() {}

		/**
		 * Uninstall.
		 *
		 * @since 1.0.0 Wireframe
		 * @since 1.0.0 Wireframe_Plugin
		 * @todo  WIP. Needs work.
		 */
		public static function uninstall() {}

		/**
		 * Get Notices.
		 *
		 * @since 1.0.0 Wireframe
		 * @since 1.0.0 Wireframe_Plugin
		 * @todo  WIP. Needs work.
		 */
		public function notices() {
			if ( isset( $this->_notices ) ) {
				return $this->_notices;
			}
		}


		/**
		 * Create DB Tables.
		 *
		 * Checks if the DBTables object is instantiated with SQl statement(s)
		 * passed-in, then creates database tables. If the DBTables object is not
		 * instantiated or missing a valid SQL statement, no tables are created.
		 *
		 * @access private
		 * @since  1.0.0 Wireframe
		 * @since  1.0.0 Wireframe_Plugin
		 * @see    object DBTables
		 * @see    wireframe_plugin_config_controller()
		 * @todo   WIP. Needs work.
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
		 * @since  1.0.0 Wireframe
		 * @since  1.0.0 Wireframe_Plugin
		 * @see    object DBTables
		 * @see    wireframe_plugin_config_controller()
		 * @todo   WIP. Needs work.
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
