<?php
/**
 * Core_Plugin is a Wireframe class.
 *
 * PHP version 5.6.0
 *
 * @package   Wireframe_Plugin
 * @author    MixaTheme, Tada Burke
 * @version   1.0.0 Wireframe
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
if ( ! class_exists( 'MixaTheme\Wireframe\Plugin\Core_Plugin' ) ) :
	/**
	 * Core_Plugin core Wireframe class for DI plugin objects.
	 *
	 * @since 1.0.0 Wireframe
	 * @since 1.0.0 Wireframe_Plugin
	 * @see   object Theme
	 * @see   https://github.com/mixatheme/Wireframe
	 */
	final class Core_Plugin implements Core_Plugin_Interface {
		/**
		 * Controller object.
		 *
		 * @access private
		 * @since  1.0.0 Wireframe
		 * @since  1.0.0 Wireframe_Plugin
		 * @var    object $_controller
		 */
		private $_controller;

		/**
		 * Plugins must wire Core_Language.
		 *
		 * @access private
		 * @since  1.0.0 Wireframe
		 * @since  1.0.0 Wireframe_Plugin
		 * @var    object $_language
		 */
		private $_language;

		/**
		 * Taxonomy object.
		 *
		 * @access private
		 * @since  1.0.0 Wireframe
		 * @since  1.0.0 Wireframe_Plugin
		 * @var    object $_taxonomy
		 */
		private $_taxonomy;

		/**
		 * CPT object.
		 *
		 * @access private
		 * @since  1.0.0 Wireframe
		 * @since  1.0.0 Wireframe_Plugin
		 * @var    object $_cpt
		 */
		private $_cpt;

		/**
		 * DBTables object.
		 *
		 * @access private
		 * @since  1.0.0 Wireframe
		 * @since  1.0.0 Wireframe_Plugin
		 * @var    object $_dbtables
		 */
		private $_dbtables;

		/**
		 * Options object.
		 *
		 * @access private
		 * @since  1.0.0 Wireframe
		 * @since  1.0.0 Wireframe_Plugin
		 * @var    object $_options
		 */
		private $_options;

		/**
		 * Settings object.
		 *
		 * @access private
		 * @since  1.0.0 Wireframe
		 * @since  1.0.0 Wireframe_Plugin
		 * @var    object $_settings
		 */
		private $_settings;

		/**
		 * Shortcode object.
		 *
		 * @access private
		 * @since  1.0.0 Wireframe
		 * @since  1.0.0 Wireframe_Plugin
		 * @var    object $_shortcode
		 */
		private $_shortcode;

		/**
		 * Admin object.
		 *
		 * @access private
		 * @since  1.0.0 Wireframe
		 * @since  1.0.0 Wireframe_Plugin
		 * @var    object $_admin
		 */
		private $_admin;

		/**
		 * UI object.
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
		 * @param object $controller Core_Controller_Interface.
		 */
		public function __construct( Core_Controller_Interface $controller ) {

			// Default properties required for this class.
			$this->_controller = $controller;
		}

		/**
		 * Get Controller.
		 *
		 * @since 1.0.0 Wireframe
		 * @since 1.0.0 Wireframe_Plugin
		 */
		public function controller() {
			if ( isset( $this->_controller ) ) {
				return $this->_controller;
			}
		}

		/**
		 * Get Language.
		 *
		 * @since  1.0.0 Wireframe
		 * @since  1.0.0 Wireframe_Plugin
		 * @return object $_language
		 */
		public function language() {
			if ( isset( $this->_language ) ) {
				return $this->_language;
			}
		}

		/**
		 * Get Taxonomy.
		 *
		 * @since  1.0.0 Wireframe
		 * @since  1.0.0 Wireframe_Plugin
		 * @return object $_taxonomy
		 */
		public function taxonomy() {
			if ( isset( $this->_taxonomy ) ) {
				return $this->_taxonomy;
			}
		}

		/**
		 * Get CPT.
		 *
		 * @since  1.0.0 Wireframe
		 * @since  1.0.0 Wireframe_Plugin
		 * @return object $_cpt
		 */
		public function cpt() {
			if ( isset( $this->_cpt ) ) {
				return $this->_cpt;
			}
		}

		/**
		 * Get DBTables.
		 *
		 * @since  1.0.0 Wireframe
		 * @since  1.0.0 Wireframe_Plugin
		 * @return object $_dbtables
		 */
		public function dbtables() {
			if ( isset( $this->_dbtables ) ) {
				return $this->_dbtables;
			}
		}

		/**
		 * Get Options.
		 *
		 * @since  1.0.0 Wireframe
		 * @since  1.0.0 Wireframe_Plugin
		 * @return object $_options
		 */
		public function options() {
			if ( isset( $this->_options ) ) {
				return $this->_options;
			}
		}

		/**
		 * Get Settings.
		 *
		 * @since  1.0.0 Wireframe
		 * @since  1.0.0 Wireframe_Plugin
		 * @return object $_settings
		 */
		public function settings() {
			if ( isset( $this->_settings ) ) {
				return $this->_settings;
			}
		}

		/**
		 * Get Shortcode.
		 *
		 * @since  1.0.0 Wireframe
		 * @since  1.0.0 Wireframe_Plugin
		 * @return object $_shortcode
		 */
		public function shortcode() {
			if ( isset( $this->_shortcode ) ) {
				return $this->_shortcode;
			}
		}

		/**
		 * Get Admin.
		 *
		 * @since 1.0.0 Wireframe
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
		 * @since 1.0.0 Wireframe
		 * @since 1.0.0 Wireframe_Plugin
		 */
		public function ui() {
			if ( isset( $this->_ui ) ) {
				return $this->_ui;
			}
		}

	} // Core_Plugin.

endif; // Thanks for using MixaTheme products!
