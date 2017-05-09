<?php
/**
 * Core_Controller_Interface is a Wireframe interface.
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
if ( ! class_exists( 'MixaTheme\Wireframe\Plugin\Core_Controller_Interface' ) ) :
	/**
	 * Core_Controller_Interface is a core Wireframe contract for plugin activation.
	 *
	 * @since 1.0.0 Wireframe_Plugin
	 * @see   https://github.com/mixatheme/Wireframe
	 */
	interface Core_Controller_Interface {
		/**
		 * Activate.
		 *
		 * @since 1.0.0 Wireframe_Plugin
		 */
		public function activate();

		/**
		 * Deactivate.
		 *
		 * @since 1.0.0 Wireframe_Plugin
		 */
		public function deactivate();

		/**
		 * Uninstall.
		 *
		 * @since 1.0.0 Wireframe_Plugin
		 */
		public static function uninstall();

	} // Core_Controller_Interface.

endif; // Thanks for using MixaTheme products!
