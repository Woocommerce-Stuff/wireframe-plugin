<?php
/**
 * Core_Enqueue is a Wireframe class.
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
if ( ! class_exists( 'MixaTheme\Wireframe\Plugin\Core_Enqueue' ) ) :
	/**
	 * Core_Enqueue is a core Wireframe class for loading styles & scripts
	 *
	 * @since 1.0.0 Wireframe_Plugin
	 * @see   https://github.com/mixatheme/Wireframe
	 */
	final class Core_Enqueue implements Core_Enqueue_Interface {
		/**
		 * Prefix.
		 *
		 * @access protected
		 * @since  1.0.0 Wireframe_Plugin
		 * @var    string $prefix
		 */
		protected $prefix = WIREFRAME_PLUGIN_PREFIX;

		/**
		 * Styles.
		 *
		 * @access protected
		 * @since  1.0.0 Wireframe_Plugin
		 * @var    array $styles
		 */
		protected $styles = array();

		/**
		 * Scripts.
		 *
		 * @access protected
		 * @since  1.0.0 Wireframe_Plugin
		 * @var    array $scripts
		 */
		protected $scripts = array();

		/**
		 * Media Modal.
		 *
		 * @access protected
		 * @since  1.0.0 Wireframe_Plugin
		 * @var    bool $mediamodal
		 */
		protected $mediamodal = false;

		/**
		 * Constructor runs when this class is instantiated.
		 *
		 * @since 1.0.0 Wireframe_Plugin
		 * @param string $prefix     Prefix for handles.
		 * @param array  $styles     Styles to hook.
		 * @param array  $scripts    Scripts to hook.
		 * @param bool   $mediamodal @todo Loads the Media Modal.
		 */
		public function __construct( $prefix, $styles = null, $scripts = null, $mediamodal = null ) {

			// Custom properties required for this class.
			$this->prefix     = $prefix;
			$this->styles     = $styles;
			$this->scripts    = $scripts;
			$this->mediamodal = $mediamodal;
		}

		/**
		 * Enqueue the custom CSS files passed via functions.php.
		 *
		 * @since 1.0.0 Wireframe_Plugin
		 * @see   wpwft_version() Optional WP_DEBUG helper.
		 */
		public function styles() {

			// No styles found.
			if ( ! isset( $this->styles ) ) {
				return;
			}

			// Loop CSS files.
			foreach ( $this->styles as $key => $value ) {

				// Set handle.
				$handle = $this->prefix . '_' . $key;

				// Register.
				wp_register_style(
					$handle,
					trailingslashit( $value['path'] ) . $value['file'] . '.css',
					$value['deps'],
					WIREFRAME_PLUGIN_VERSION,
					$value['media']
				);

				// Enqueue.
				wp_enqueue_style( $handle );
			}
		}

		/**
		 * Enqueue any custom JS files passed in.
		 *
		 * @since 1.0.0 Wireframe_Plugin
		 * @see   wpwft_version() Optional WP_DEBUG helper.
		 * @see   https://codex.wordpress.org/Function_Reference/wp_localize_script
		 */
		public function scripts() {

			// No scripts found.
			if ( ! isset( $this->scripts ) ) {
				return;
			}

			// Loop JS files.
			foreach ( $this->scripts as $key => $value ) {
				/**
				 * Set script handle and convert dashes to underscores.
				 *
				 * You must verify all references to this handle in your scripts
				 * use underscores/underlines. Dashes/hyphens are not allowed
				 * because JavaScript objects cannot contain dashes/hyphens.
				 *
				 * @see theme.js
				 */
				$handle = str_replace( '-', '_', $this->prefix . '_' . $key );

				// Register.
				wp_register_script(
					$handle,
					trailingslashit( $value['path'] ) . $value['file'] . '.js',
					$value['deps'],
					WIREFRAME_PLUGIN_VERSION,
					$value['footer']
				);

				// Enqueue.
				wp_enqueue_script( $handle );

				// Localize.
				if ( isset( $value['localize'] ) ) {
					$data = $value['localize'];
					wp_localize_script( $handle, $handle, $data );
				}
			}
		}

		/**
		 * Enqueue the Media modal script.
		 *
		 * @since 1.0.0 Wireframe_Plugin
		 * @todo  Should this be enqueued contextually somehow?
		 */
		public function mediamodal() {
			if ( isset( $this->mediamodal ) && true === $this->mediamodal ) {
				wp_enqueue_media();
			}
		}

	} // Core_Enqueue.

endif; // Thanks for using MixaTheme products!
