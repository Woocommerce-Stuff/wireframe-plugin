<?php
/**
 * Module_Notices is a Wireframe module class.
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
 * @see       https://codex.wordpress.org/Plugin_API/Action_Reference/admin_notices
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
if ( ! class_exists( 'MixaTheme\Wireframe\Plugin\Module_Notices' ) ) :
	/**
	 * Module_Notices is a theme class for wiring notifications.
	 *
	 * @since 1.0.0 Wireframe
	 * @since 1.0.0 Wireframe_Plugin
	 * @see   https://github.com/mixatheme/Wireframe
	 */
	class Module_Notices extends Core_Module_Abstract implements Module_Notices_Interface {
		/**
		 * Notices.
		 *
		 * @access private
		 * @since  1.0.0 Wireframe
		 * @since  1.0.0 Wireframe_Plugin
		 * @var    array $_notices
		 */
		private $_notices;

		/**
		 * Constructor runs when this class instantiates.
		 *
		 * @since 1.0.0 Wireframe
		 * @since 1.0.0 Wireframe_Plugin
		 * @param array $config Config data.
		 */
		public function __construct( $config ) {

			// Declare custom properties required for this class.
			$this->_notices = $config['notices'];

			// Get parent Constructor.
			parent::__construct( $config );
		}

		/**
		 * Get Notice.
		 *
		 * @since 1.0.0 Wireframe
		 * @since 1.0.0 Wireframe_Plugin
		 * @param string $key The tag/method to call.
		 */
		public function get_notice( $key ) {

			// Defaults.
			$notice = '';
			$value  = '';

			// Get key from the array of notices.
			if ( isset( $key ) ) {
				$value = $this->_notices[ $key ];
			}

			// Build notice.
			$notice .= '<div class="' . $value['selectors'] . '"><p>';
			$notice .= $value['subject'] . '&nbsp;' . $value['message'];
			$notice .= '</p></div>';

			// The notice.
			echo wp_kses_post( $notice );

		}

		/**
		 * Error: Init.
		 *
		 * This notice is triggered if Wireframe_Plugin fails to initialize properly.
		 *
		 * @since 1.0.0 Wireframe
		 * @since 1.0.0 Wireframe_Plugin
		 */
		public function error_init() {
			if ( isset( $this->_notices ) ) {
				$this->get_notice( __FUNCTION__ );
			}
		}

		/**
		 * Warn: Activated.
		 *
		 * This notice is triggered when the Wireframe_Plugin parent theme is activated.
		 * You can greet customers, instruct customizers to use child themes,
		 * recommended plugins to install, etc.
		 *
		 * @since 1.0.0 Wireframe
		 * @since 1.0.0 Wireframe_Plugin
		 */
		public function warn_activated() {
			if ( false === is_child_theme() && isset( $this->_notices ) ) {
				$this->get_notice( __FUNCTION__ );
			}
		}

	} // Module_Notices.

endif; // Thanks for using MixaTheme products!
