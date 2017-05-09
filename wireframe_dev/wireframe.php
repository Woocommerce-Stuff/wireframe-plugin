<?php
/**
 * Bootstrap file for Wireframe plugins.
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
 * @see       https://codex.wordpress.org/Functions_File_Explained
 *
 * This software is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this software. If not, see <http://www.gnu.org/licenses/>.
 *
 * Table of Contents:
 *
 *    §.01. Namespaces
 *    §.02. Access
 *    §.03. Constants
 *    §.04. Functions
 *    §.05. Autoload
 *    §.06. Container
 *    §.07. Configs
 *    §.08. Service
 *    §.09. Wireframe
 *    §.10. Housekeeping
 *    §.11. Hooks
 *
 * (New sections are separated by lines.)
 */

/**
 * §.01. Namespaces.
 * =============================================================================
 *
 * @since 5.3.0 PHP
 * @since 1.0.0 Wireframe_Plugin
 */
namespace MixaTheme\Wireframe\Plugin;

/**
 * §.02. Access.
 * =============================================================================
 *
 * No direct access to this file.
 *
 * @since 1.0.0 Wireframe_Plugin
 */
defined( 'ABSPATH' ) or die();

/**
 * §.03. Constant: Plugin text-domain.
 * =============================================================================
 *
 * Plugin text-domain (must match slug).
 *
 * @since 1.0.0 Wireframe_Plugin
 */
define( 'WIREFRAME_PLUGIN_TEXTDOMAIN', 'wireframe-plugin' );

/**
 * §.03. Constant: Plugin product name.
 *
 * Official product name for your plugin. This is used in various headings,
 * titles and menus. Your official product name should be consistent.
 *
 * @since 1.0.0 Wireframe_Plugin
 */
define( 'WIREFRAME_PLUGIN_PRODUCT', 'Wireframe Plugin' );

/**
 * §.03. Constant: Plugin prefix.
 *
 * A prefix for various strings, handles and helpers. This is primarily used
 * for keeping names short and helps avoid clashes. 3-5 characters preferred.
 *
 * @since 1.0.0 Wireframe_Plugin
 */
define( 'WIREFRAME_PLUGIN_PREFIX', 'wireframe_plugin' );

/**
 * §.03. Constant: Plugin version.
 *
 * Tagged version number for this release. This is used throughout many
 * dependencies, especially when you enqueue your styles & scripts.
 * This can also be used for version checking backwards compatibility.
 *
 * @since 1.0.0 Wireframe_Plugin
 */
define( 'WIREFRAME_PLUGIN_VERSION', '1.0.0' );

/**
 * §.03. Constant: Plugin directory.
 *
 * Plugin directory path. Retrieves the absolute path to the directory
 * of the current plugin. Returns an absolute server path, for example:
 * `/srv/www/wp/htdocs/wp-content/plugins/wireframe-plugin/` - not a URI.
 *
 * @since 1.0.0 Wireframe_Plugin
 */
define( 'WIREFRAME_PLUGIN_DIR', plugin_dir_path( __DIR__ ) );

/**
 * §.03. Constant: Plugin path to developer files.
 *
 * Absolute path to the `wireframe_dev` directory. This directory is specifically
 * for Developers and contains functions, classes, JS, SCSS, etc.
 *
 * @since 1.0.0 Wireframe_Plugin
 */
define( 'WIREFRAME_PLUGIN_DEV', WIREFRAME_PLUGIN_DIR . 'wireframe_dev/' );

/**
 * §.03. Constant: Plugin path to client files.
 *
 * Absolute path to the `wireframe_client` directory. This directory primarily
 * holds front-end assets, such as: images, fonts, scripts, stylesheets, etc.
 *
 * @since 1.0.0 Wireframe_Plugin
 */
define( 'WIREFRAME_PLUGIN_CLIENT', 'wireframe_client/' );

/**
 * §.03. Constant: Plugin URI for assets, etc.
 *
 * Plugin URI. Retrieve plugin directory URI. Checks for SSL. Returns URI with
 * a trailing slash following the directory address. This is primarily used for
 * loading your plugin assets.
 *
 * @since 1.0.0 Wireframe_Plugin
 */
define( 'WIREFRAME_PLUGIN_URI', plugin_dir_url( __DIR__ ) );

/**
 * §.03. Constant: Plugin path to the Wireframe API.
 *
 * Absolute path to the Wireframe API. This directory holds core classes,
 * module classes, helper functions, utilities, config data, etc.
 * NO leading slash. HAS trailing slash.
 *
 * @since 1.0.0 Wireframe_Plugin
 */
define( 'WIREFRAME_PLUGIN_API', WIREFRAME_PLUGIN_DEV . 'wireframe/' );

/**
 * § 03. Constant: Wireframe Objects.
 *
 * Absolute path to the Wireframe API for loading class files. This should
 * only be used if you choose to NOT use Composer's autoloading feature.
 *
 * @since 1.0.0 Wireframe_Plugin
 */
define( 'WIREFRAME_PLUGIN_OBJECTS', WIREFRAME_PLUGIN_DIR . '/wireframe_dev/wireframe/' );

/**
 * §.03. Constant: Plugin path to template files (optional).
 *
 * @since 1.0.0 Wireframe_Plugin
 */
define( 'WIREFRAME_PLUGIN_TPL', WIREFRAME_PLUGIN_DIR . WIREFRAME_PLUGIN_CLIENT . 'tpl/' );

/**
 * §.03. Constant: Plugin URI for CSS files (optional).
 *
 * @since 1.0.0 Wireframe_Plugin
 */
define( 'WIREFRAME_PLUGIN_CSS', WIREFRAME_PLUGIN_URI . WIREFRAME_PLUGIN_CLIENT . 'css/' );

/**
 * §.03. Constant: Plugin URI for images (optional).
 *
 * @since 1.0.0 Wireframe_Plugin
 */
define( 'WIREFRAME_PLUGIN_IMG', WIREFRAME_PLUGIN_URI . WIREFRAME_PLUGIN_CLIENT . 'img/' );

/**
 * §.03. Constant: Plugin URI for JavaScript files (optional).
 *
 * @since 1.0.0 Wireframe_Plugin
 */
define( 'WIREFRAME_PLUGIN_JS', WIREFRAME_PLUGIN_URI . WIREFRAME_PLUGIN_CLIENT . 'js/' );

/**
 * §.03. Constant: Plugin URI for language files.
 *
 * @since 1.0.0 Wireframe_Plugin
 */
define( 'WIREFRAME_PLUGIN_LANG', WIREFRAME_PLUGIN_TEXTDOMAIN . '/' . WIREFRAME_PLUGIN_CLIENT . 'lang/' );

/**
 * §.04. Functions: Load helper functions.
 * =============================================================================
 *
 * Loads helper functions and callbacks. These functions should load before your
 * classes, so they become available to your objects. Once you get the hang of
 * Wireframe_Plugin, these files can probably be merged to save on file count.
 *
 * @since 1.0.0 Wireframe_Plugin
 */
require_once WIREFRAME_PLUGIN_API . 'functions/functions-helpers.php';
require_once WIREFRAME_PLUGIN_API . 'functions/functions-views.php';

/**
 * § 05. Objects.
 * =============================================================================
 *
 * Option #1: Use `require_once()` to load your class dependencies 1-by-1.
 *            This is the default option because some Developers don't use Composer.
 *
 * Option #2: Autoload class dependencies via Composer's `composer.json` file.
 *            If you add new class files, you must re-compile `composer.json`.
 *            This is the preferred option for loading your objects.
 *
 * Autoload Example:
 *
 *            require_once WIREFRAME_PLUGIN_DEV . 'vendor/autoload.php';
 *
 * PRO-TIP: To re-compile the autoloader in CLI, replace all the require_once()
 * lines below with the `Autoload Example` above, `cd` to the directory where the
 * `composer.json` file is located, then execute: composer dump-autoload -o
 *
 * PRO-TIP: For completeness, the default Wireframe_Plugin is packaged with
 * multiple objects files. You most likely do not need all these.
 *
 * @since 1.0.0 Wireframe_Plugin
 * @since 1.1.2 Composer
 * @see   composer.json
 * @see   https://getcomposer.org
 *
 * @internal CLI: composer update
 * @internal CLI: composer dump-autoload -o
 * @internal WPCS expects a lowercase filename (PSR-2, PSR-4 invalid).
 */
require_once WIREFRAME_PLUGIN_OBJECTS . 'core/core-module-abstract.php';
require_once WIREFRAME_PLUGIN_OBJECTS . 'core/core-container-interface.php';
require_once WIREFRAME_PLUGIN_OBJECTS . 'core/core-container.php';
require_once WIREFRAME_PLUGIN_OBJECTS . 'core/core-controller-interface.php';
require_once WIREFRAME_PLUGIN_OBJECTS . 'core/core-controller.php';
require_once WIREFRAME_PLUGIN_OBJECTS . 'core/core-enqueue-interface.php';
require_once WIREFRAME_PLUGIN_OBJECTS . 'core/core-enqueue.php';
require_once WIREFRAME_PLUGIN_OBJECTS . 'core/core-language-interface.php';
require_once WIREFRAME_PLUGIN_OBJECTS . 'core/core-language.php';
require_once WIREFRAME_PLUGIN_OBJECTS . 'core/core-plugin-interface.php';
require_once WIREFRAME_PLUGIN_OBJECTS . 'core/core-plugin.php';
require_once WIREFRAME_PLUGIN_OBJECTS . 'plugin/admin/plugin-admin-interface.php';
require_once WIREFRAME_PLUGIN_OBJECTS . 'plugin/admin/plugin-admin.php';
require_once WIREFRAME_PLUGIN_OBJECTS . 'plugin/cpt/plugin-cpt-interface.php';
require_once WIREFRAME_PLUGIN_OBJECTS . 'plugin/cpt/plugin-cpt.php';
require_once WIREFRAME_PLUGIN_OBJECTS . 'plugin/dbtables/plugin-dbtables-interface.php';
require_once WIREFRAME_PLUGIN_OBJECTS . 'plugin/dbtables/plugin-dbtables.php';
require_once WIREFRAME_PLUGIN_OBJECTS . 'plugin/options/plugin-options-interface.php';
require_once WIREFRAME_PLUGIN_OBJECTS . 'plugin/options/plugin-options.php';
require_once WIREFRAME_PLUGIN_OBJECTS . 'plugin/settings/plugin-settings-interface.php';
require_once WIREFRAME_PLUGIN_OBJECTS . 'plugin/settings/plugin-settings.php';
require_once WIREFRAME_PLUGIN_OBJECTS . 'plugin/shortcode/plugin-shortcode-interface.php';
require_once WIREFRAME_PLUGIN_OBJECTS . 'plugin/shortcode/plugin-shortcode.php';
require_once WIREFRAME_PLUGIN_OBJECTS . 'plugin/taxonomy/plugin-taxonomy-interface.php';
require_once WIREFRAME_PLUGIN_OBJECTS . 'plugin/taxonomy/plugin-taxonomy.php';
require_once WIREFRAME_PLUGIN_OBJECTS . 'plugin/ui/plugin-ui-interface.php';
require_once WIREFRAME_PLUGIN_OBJECTS . 'plugin/ui/plugin-ui.php';

/**
 * Check if the `Core_Plugin` class exists then configure Wireframe_Plugin defaults.
 *
 * Security Note: If you save any data to your WordPress Database, you should
 * validate and/or sanitize untrusted data before entering into the database.
 * All untrusted data should be escaped before output.
 *
 * @since 1.0.0 Wireframe_Plugin
 */
if ( class_exists( 'MixaTheme\Wireframe\Plugin\Core_Plugin' ) ) :
	/**
	 * §.06. Container.
	 * =========================================================================
	 *
	 * Wireframe Plugin needs to wire objects to the Core_Container::$storage array.
	 *
	 * @since 1.0.0 Wireframe_Plugin
	 * @see   object   Core_Container
	 * @var   callable $wireframe_plugin_container
	 */
	$wireframe_plugin_container = new Core_Container();

	/**
	 * §.07. Configs.
	 * =========================================================================
	 *
	 * Option #1: Load config data for passing arrays into plugin objects.
	 *
	 * Option #2: You can set properties for objects inside an object closure
	 *            (see `Closure` section below). If you wish to set your config
	 *            data inside closures, then you don't need to require files.
	 *
	 * Data files are located in: `wireframe_dev/wireframe/config/`
	 *
	 * PRO-TIP: For completeness, the default Wireframe_Plugin is packaged with
	 * multiple config files. You most likely do not need all these.
	 *
	 * @since 1.0.0 Wireframe_Plugin
	 */
	require_once WIREFRAME_PLUGIN_API . 'config/config-language.php';
	require_once WIREFRAME_PLUGIN_API . 'config/config-admin.php';
	require_once WIREFRAME_PLUGIN_API . 'config/config-dbtables.php';
	require_once WIREFRAME_PLUGIN_API . 'config/config-cpt.php';
	require_once WIREFRAME_PLUGIN_API . 'config/config-taxonomy.php';
	require_once WIREFRAME_PLUGIN_API . 'config/config-shortcode.php';
	require_once WIREFRAME_PLUGIN_API . 'config/config-options.php';
	require_once WIREFRAME_PLUGIN_API . 'config/config-settings.php';
	require_once WIREFRAME_PLUGIN_API . 'config/config-ui.php';

	/**
	 * §.07. Configs: Required config files.
	 * =========================================================================
	 *
	 * These config files are required for activation and deactivation of your
	 * plugin and should be loaded last because they might use configs above.
	 *
	 * Config files are located in: `wireframe_dev/wireframe/config/`
	 *
	 * @since 1.0.0 Wireframe_Plugin
	 */
	require_once WIREFRAME_PLUGIN_API . 'config/config-controller.php';

	/**
	 * § 08. Service: Language.
	 * =========================================================================
	 *
	 * This closure registers a service with the Core_Container::$storage array,
	 * and instantiates a new Core_Language object with config data passed-in.
	 *
	 * @since  1.0.0 Wireframe_Theme
	 * @see    wireframe_plugin_config_language()
	 * @return object Core_Language( @param array Object args. )
	 */
	$wireframe_plugin_container->language = function () {
		return new Core_Language( wireframe_plugin_config_language() );
	};

	/**
	 * §.08. Service: Core_Controller.
	 *
	 * This closure registers a service with the Core_Container::$storage array,
	 * and instantiates a new Core_Controller object with config data passed-in.
	 *
	 * @since  1.0.0 Wireframe_Plugin
	 * @see    wireframe_plugin_config_language()
	 * @return object Core_Controller( @param array )
	 */
	$wireframe_plugin_container->controller = function () {
		return new Core_Controller( wireframe_plugin_config_controller() );
	};

	/**
	 * §.08. Service: Plugin_Admin.
	 * =========================================================================
	 *
	 * This closure registers a service with the Core_Container::$storage array,
	 * and instantiates a new Plugin_Admin object with config data passed-in.
	 *
	 * @since  1.0.0 Wireframe_Plugin
	 * @see    wireframe_plugin_config_language()
	 * @return object Plugin_Admin( @param array )
	 */
	$wireframe_plugin_container->admin = function () {
		return new Plugin_Admin( wireframe_plugin_config_admin() );
	};

	/**
	 * § 08. Service: UI.
	 *
	 * This closure registers a service with the Core_Container::$storage array,
	 * and instantiates a new Plugin_UI object with config data passed-in.
	 *
	 * @since  1.0.0 Wireframe_Plugin
	 * @see    wireframe_plugin_config_ui()
	 * @return object Plugin_UI( @param array Object args. )
	 */
	$wireframe_plugin_container->ui = function () {
		return new Plugin_UI( wireframe_plugin_config_ui() );
	};

	/**
	 * §.09. Wireframe is alive!
	 * =========================================================================
	 *
	 * Instantiates the base `Core_Plugin` object, then wires together the default
	 * services you added to the `$wireframe_plugin_container` object (above).
	 *
	 * Option #1: You can re-declare which objects your plugin wires via the
	 *            _construct() method in the `Core_Plugin` class. Then, DI only
	 *            the objects you need. We started you off with common objects.
	 *
	 * Option #2: You can entirely swap-out the `Core_Plugin` class with your
	 *            own custom class, or make the `Core_Plugin` class abstract,
	 *            then extend it.
	 *
	 * @since  1.0.0 Wireframe_Plugin
	 * @var    object $wireframe_plugin
	 * @return object Core_Plugin(
	 *         @param object Core_Language   DI the default language.
	 *         @param object Core_Controller DI the default controller.
	 *         @param object Plugin_Admin    DI the default Admin views.
	 *         @param object Plugin_UI       DI the default front-end UI.
	 * )
	 */
	$wireframe_plugin = new Core_Plugin(
		$wireframe_plugin_container->language,
		$wireframe_plugin_container->controller,
		$wireframe_plugin_container->admin,
		$wireframe_plugin_container->ui
	);

	/**
	 * §.10. Housekeeping.
	 * =========================================================================
	 *
	 * Check if Wireframe_Plugin is properly initialized. You can perform any clean-up
	 * tasks here, or simply output a warning if `$wireframe_plugin` fails. Also note:
	 * your plugin files now have access to objects beyond this point.
	 *
	 * @since 1.0.0 Wireframe_Plugin
	 */
	if ( ! isset( $wireframe_plugin ) ) {
		esc_html_e( 'Wireframe Plugin failed to initialize. Please verify your setup.', 'wireframe-plugin' );
	}

	/**
	 * §.11. Hooks.
	 * =========================================================================
	 *
	 * Most objects are not required to be wired (hooked) when instantiated.
	 * In your config data file(s), you can set the `$wired` value
	 * to true or false. If false, you can decouple any hooks and declare
	 * them here. If true, then objects fire hooks onload.
	 *
	 * Data files are located in: `wireframe_dev/wireframe/config/`
	 *
	 * @since 1.0.0 Wireframe_Plugin
	 * @see   object $wireframe_plugin Instance of Core_Plugin.
	 */
	register_activation_hook( __FILE__, array( $wireframe_plugin->controller(), 'activate' ) );
	register_deactivation_hook( __FILE__, array( $wireframe_plugin->controller(), 'deactivate' ) );
	register_uninstall_hook( __FILE__, $wireframe_plugin->controller()->uninstall() );

endif; // Thanks for using MixaTheme products!
