<?php
/**
 * Core_Plugin is a Wireframe class.
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
if ( ! class_exists( 'MixaTheme\Wireframe\Plugin\Core_Plugin' ) ) :
	/**
	 * Core_Plugin is a core Wireframe class for DI plugin objects.
	 *
	 * @since 1.0.0 Wireframe_Plugin
	 * @see   object Theme
	 * @see   https://github.com/mixatheme/Wireframe
	 */
	final class Core_Plugin implements Core_Plugin_Interface {
		/**
		 * Controller object.
		 *
		 * @access private
		 * @since  1.0.0 Wireframe_Plugin
		 * @var    object $_controller
		 */
		private $_controller;

		/**
		 * Admin object.
		 *
		 * @access private
		 * @since  1.0.0 Wireframe_Plugin
		 * @var    object $_admin
		 */
		private $_admin;

		/**
		 * UI object.
		 *
		 * @access private
		 * @since  1.0.0 Wireframe_Plugin
		 * @var    object $_ui
		 */
		private $_ui;

		/**
		 * Constructor runs when this class is instantiated.
		 *
		 * @since 1.0.0 Wireframe_Plugin
		 * @param object $controller Interface for controller.
		 * @param object $admin      Interface for admin screens.
		 * @param object $ui         Interface for front-end UI.
		 */
		public function __construct( Core_Controller_Interface $controller, Plugin_Admin_Interface $admin, Plugin_UI_Interface $ui ) {

			// Default properties required for this class.
			$this->_controller = $controller;
			$this->_admin      = $admin;
			$this->_ui         = $ui;
		}

		/**
		 * Get Controller.
		 *
		 * @since 1.0.0 Wireframe_Plugin
		 */
		public function controller() {
			if ( isset( $this->_controller ) ) {
				return $this->_controller;
			}
		}

		/**
		 * Get Admin.
		 *
		 * @since 1.0.0 Wireframe_Plugin
		 */
		public function admin() {
			if ( isset( $this->_admin ) ) {
				return $this->_admin;
			}
		}

		/**
		 * Get UI.
		 *
		 * @since 1.0.0 Wireframe_Plugin
		 */
		public function ui() {
			if ( isset( $this->_ui ) ) {
				return $this->_ui;
			}
		}

	} // Core_Plugin.

endif; // Thanks for using MixaTheme products!
