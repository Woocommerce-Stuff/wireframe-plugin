<?php
/**
 * Core_Language is a Wireframe class.
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
use WP_Error;

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
if ( ! class_exists( 'MixaTheme\Wireframe\Plugin\Core_Language' ) ) :
	/**
	 * Core_Language is a core Wireframe class for i18n & l10n translation.
	 *
	 * @since 1.0.0 Wireframe_Plugin
	 * @see   https://github.com/mixatheme/Wireframe
	 * @todo  There's zero reason for this to be a class.
	 */
	final class Core_Language extends Core_Module_Abstract implements Core_Language_Interface {
		/**
		 * Relative path to ABSPATH of a folder, where the .mo file resides.
		 * Deprecated, but still functional until 2.7.
		 *
		 * @access protected
		 * @since  1.0.0 Wireframe_Plugin
		 * @var    array $abs_rel_path
		 */
		protected $abs_rel_path;

		/**
		 * Relative path to WP_PLUGIN_DIR. This is the preferred argument to use.
		 * It takes precedence over .
		 *
		 * @access protected
		 * @since  1.0.0 Wireframe_Plugin
		 * @var    array $plugin_rel_path
		 */
		protected $plugin_rel_path;

		/**
		 * Constructor runs when this class is instantiated.
		 *
		 * @since 1.0.0 Wireframe_Plugin
		 * @param array $config Data via config file.
		 */
		public function __construct( $config ) {

			// Custom properties required for this class.
			$this->abs_rel_path    = $config['abs_rel_path'];
			$this->plugin_rel_path = $config['plugin_rel_path'];

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
			if ( isset( $this->wired ) && true === $this->wired ) {
				$this->wire_actions( $this->_actions );
				$this->wire_filters( $this->_filters );
			}
		}

		/**
		 * Load plugin textdomain.
		 *
		 * @since  3.1.0 WordPress
		 * @since  1.0.0 Wireframe_Plugin
		 * @see    load_plugin_textdomain( $domain, $abs_rel_path, $plugin_rel_path )
		 */
		public function textdomain() {
			if ( isset( $this->prefix ) && isset( $this->plugin_rel_path ) ) {
				load_plugin_textdomain(
					$this->prefix,
					$this->abs_rel_path,
					$this->plugin_rel_path
				);
			}
		}

	} // Core_Language.

endif; // Thanks for using MixaTheme products!
