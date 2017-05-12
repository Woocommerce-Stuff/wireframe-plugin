<?php
/**
 * Views callback functions for Wireframe_Plugin.
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
 * Wireframe Plugin Admin Page: Quickstart tabs.
 *
 * These tabs are called by each Admin page. The tabs were modeled after the
 * core WordPress `about.php` page, therefore we maintain a level of WordPress
 * consistency. Different people prefer their own favorite tabs/navs for pages.
 * This is just an example to get you going quickly!
 *
 * Example jQuery:
 *
 * 	<script>
 *	jQuery( function( $ ) {
 *		$( '.nav-tab' ).click( function() {
 *			$( this ).addClass( 'nav-tab-active' );
 *		} );
 *	} );
 *	</script>
 *
 * @since 1.0.0 Wireframe
 * @since 1.0.0 Wireframe_Plugin
 * @see   wireframe.php The text-domain to use.
 */
function wireframe_plugin_admin_page_tabs_quickstart() {
	?>
	<h2 class="nav-tab-wrapper wp-clearfix">
		<a href="<?php echo esc_url( 'admin.php?page=' . esc_html( WIREFRAME_PLUGIN_TEXTDOMAIN ) ); ?>" class="nav-tab nav-tab-active"><?php esc_html_e( 'Quickstart', 'wireframe-plugin' ); ?></a>
		<a href="<?php echo esc_url( 'admin.php?page=' . esc_html( WIREFRAME_PLUGIN_TEXTDOMAIN ) . '-faq' ); ?>" class="nav-tab"><?php esc_html_e( 'FAQ', 'wireframe-plugin' ); ?></a>
		<a href="<?php echo esc_url( 'admin.php?page=' . esc_html( WIREFRAME_PLUGIN_TEXTDOMAIN ) . '-support' ); ?>" class="nav-tab"><?php esc_html_e( 'Support', 'wireframe-plugin' ); ?></a>
	</h2>
	<?php
}

/**
 * Wireframe Plugin Admin Page: FAQ tabs.
 *
 * These tabs are called by each Admin page. The tabs were modeled after the
 * core WordPress `about.php` page, therefore we maintain a level of WordPress
 * consistency. Different people prefer their own favorite tabs/navs for pages.
 * This is just an example to get you going quickly!
 *
 * Example jQuery:
 *
 * 	<script>
 *	jQuery( function( $ ) {
 *		$( '.nav-tab' ).click( function() {
 *			$( this ).addClass( 'nav-tab-active' );
 *		});
 *	});
 *	</script>
 *
 * @since 1.0.0 Wireframe
 * @since 1.0.0 Wireframe_Plugin
 * @see   wireframe.php The text-domain to use.
 */
function wireframe_plugin_admin_page_tabs_faq() {
	?>
	<h2 class="nav-tab-wrapper wp-clearfix">
		<a href="<?php echo esc_url( 'admin.php?page=' . esc_html( WIREFRAME_PLUGIN_TEXTDOMAIN ) ); ?>" class="nav-tab"><?php esc_html_e( 'Quickstart', 'wireframe-plugin' ); ?></a>
		<a href="<?php echo esc_url( 'admin.php?page=' . esc_html( WIREFRAME_PLUGIN_TEXTDOMAIN ) . '-faq' ); ?>" class="nav-tab nav-tab-active"><?php esc_html_e( 'FAQ', 'wireframe-plugin' ); ?></a>
		<a href="<?php echo esc_url( 'admin.php?page=' . esc_html( WIREFRAME_PLUGIN_TEXTDOMAIN ) . '-support' ); ?>" class="nav-tab"><?php esc_html_e( 'Support', 'wireframe-plugin' ); ?></a>
	</h2>
	<?php
}

/**
 * Wireframe Plugin Admin Page: Support tabs.
 *
 * These tabs are called by each Admin page. The tabs were modeled after the
 * core WordPress `about.php` page, therefore we maintain a level of WordPress
 * consistency. Different people prefer their own favorite tabs/navs for pages.
 * This is just an example to get you going quickly!
 *
 * Example jQuery:
 *
 * 	<script>
 *	jQuery( function( $ ) {
 *		$( '.nav-tab' ).click( function() {
 *			$( this ).addClass( 'nav-tab-active' );
 *		});
 *	});
 *	</script>
 *
 * @since 1.0.0 Wireframe
 * @since 1.0.0 Wireframe_Plugin
 * @see   functions-helpers.php
 * @see   wireframe.php The text-domain to use.
 */
function wireframe_plugin_admin_page_tabs_support() {
	?>
	<h2 class="nav-tab-wrapper wp-clearfix">
		<a href="<?php echo esc_url( 'admin.php?page=' . esc_html( WIREFRAME_PLUGIN_TEXTDOMAIN ) ); ?>" class="nav-tab"><?php esc_html_e( 'Quickstart', 'wireframe-plugin' ); ?></a>
		<a href="<?php echo esc_url( 'admin.php?page=' . esc_html( WIREFRAME_PLUGIN_TEXTDOMAIN ) . '-faq' ); ?>" class="nav-tab"><?php esc_html_e( 'FAQ', 'wireframe-plugin' ); ?></a>
		<a href="<?php echo esc_url( 'admin.php?page=' . esc_html( WIREFRAME_PLUGIN_TEXTDOMAIN ) . '-support' ); ?>" class="nav-tab nav-tab-active"><?php esc_html_e( 'Support', 'wireframe-plugin' ); ?></a>
	</h2>
	<?php
}

/**
 * Wireframe Plugin Admin Page: Badge.
 *
 * This is the badge graphic which appears on the Admin page.
 *
 * Replacing the badge with your own custom graphic:
 *
 * 		1. Locate SVG file in: wireframe-plugin/wireframe_dev/img/wireframe-plugin-badge-white.svg
 * 		2. Open the file in your favorite SVG/Vector application.
 * 		3. Replace artwork with your own graphics or logo.
 * 		4. Export the graphic as a SVG file with the same filename.
 * 		5. Export the graphic as a PNG file with the same filename.
 *
 * @since 1.0.0 Wireframe
 * @since 1.0.0 Wireframe_Plugin
 * @see   functions-helpers.php Admin check function.
 * @see   wp-admin/images/wordpress-logo-white.svg
 * @see   wireframe-plugin/wireframe_client/img/wireframe-plugin-badge-white.svg
 * @see   wireframe-plugin/wireframe_client/img/wireframe-plugin-badge-white.png
 * @see   wireframe-plugin/wireframe_client/css/wireframe-plugin-admin.scss
 * @see   wireframe-plugin/wireframe_client/css/wireframe-plugin-admin-min.css
 */
function wireframe_plugin_admin_page_badge() {
	wireframe_plugin_admin_check();
	?>
	<div class="wireframe-plugin-badge">
		<?php esc_html_e( 'Version', 'wireframe-plugin' ); ?> <?php echo esc_html( WIREFRAME_PLUGIN_VERSION ); ?>
	</div>
	<?php
}

/**
 * Wireframe Plugin Admin Page: Header.
 *
 * This is the persistent header on all Admin pages for your plugin.
 *
 * @since 1.0.0 Wireframe
 * @since 1.0.0 Wireframe_Plugin
 * @see   functions-helpers.php Admin check function.
 */
function wireframe_plugin_admin_page_header() {
	wireframe_plugin_admin_check();
	?>
	<h1><?php echo esc_html( WIREFRAME_PLUGIN_PRODUCT ); ?> <?php echo esc_html( WIREFRAME_PLUGIN_VERSION ); ?></h1>
	<div class="about-text">
		<?php esc_html_e( 'Wireframe Plugin is an OOP WordPress plugin boilerplate. Wireframe Plugin enables WordPress Developers to rapidly wire GPL and WordPress Coding Standards compliant plugins for professional client projects or for selling premium plugins in any marketplace. Wireframe Plugin is part of the Wireframe Suite for WordPress by MixaTheme.', 'wireframe-plugin' ); ?>
	</div>
	<?php wireframe_plugin_admin_page_badge(); ?>
	<?php
}

/**
 * Wireframe Plugin Admin Page: Quickstart page callback.
 *
 * This is a callback when your plugin hooks a new menu page. This is just an
 * example. Often, these pages can get complex with jQuery, AJAX, APIs, etc.
 *
 * 		1. Checks if User is authorized.
 * 		2. Loads the Admin page header.
 * 		3. Loads the Admin page tabs.
 * 		4. Loads any specific content for this Admin page.
 *
 * @since 1.0.0 Wireframe
 * @since 1.0.0 Wireframe_Plugin
 * @see   config-admin.php 		Hooks into this callback function.
 * @see   functions-helpers.php Admin check function.
 */
function wireframe_plugin_admin_page_callback_quickstart() {
	wireframe_plugin_admin_check();
	?>
	<div class="wrap about-wrap">
		<?php wireframe_plugin_admin_page_header(); ?>
		<?php wireframe_plugin_admin_page_tabs_quickstart(); ?>
		<h3><?php esc_html_e( 'Quickstart Heading', 'wireframe-plugin' ); ?></h3>
		<p><?php esc_html_e( 'Quickstart content can go here...', 'wireframe-plugin' ); ?></p>
	</div>
<?php
}

/**
 * Wireframe Plugin Admin Page: FAQ page callback.
 *
 * This is a callback when your plugin hooks a new menu page. This is just an
 * example. Often, these pages can get complex with jQuery, AJAX, APIs, etc.
 *
 * 		1. Checks if User is authorized.
 * 		2. Loads the Admin page header.
 * 		3. Loads the Admin page tabs.
 * 		4. Loads any specific content for this Admin page.
 *
 * @since 1.0.0 Wireframe
 * @since 1.0.0 Wireframe_Plugin
 * @see   config-admin.php 		Hooks into this callback function.
 * @see   functions-helpers.php Admin check function.
 */
function wireframe_plugin_admin_page_callback_faq() {
	wireframe_plugin_admin_check();
	?>
	<div class="wrap about-wrap">
		<?php wireframe_plugin_admin_page_header(); ?>
		<?php wireframe_plugin_admin_page_tabs_faq(); ?>
		<h3><?php esc_html_e( 'FAQ Heading', 'wireframe-plugin' ); ?></h3>
		<p><?php esc_html_e( 'Frequently Asked Questions content can go here...', 'wireframe-plugin' ); ?></p>
	</div>
<?php
}

/**
 * Wireframe Plugin Admin Page: Support page callback.
 *
 * This is a callback when your plugin hooks a new menu page. This is just an
 * example. Often, these pages can get complex with jQuery, AJAX, APIs, etc.
 *
 * 		1. Checks if User is authorized.
 * 		2. Loads the Admin page header.
 * 		3. Loads the Admin page tabs.
 * 		4. Loads any specific content for this Admin page.
 *
 * @since 1.0.0 Wireframe
 * @since 1.0.0 Wireframe_Plugin
 * @see   config-admin.php 		Hooks into this callback function.
 * @see   functions-helpers.php Admin check function.
 */
function wireframe_plugin_admin_page_callback_support() {
	wireframe_plugin_admin_check();
	?>
	<div class="wrap about-wrap">
		<?php wireframe_plugin_admin_page_header(); ?>
		<?php wireframe_plugin_admin_page_tabs_support(); ?>
		<h3><?php esc_html_e( 'Support Heading', 'wireframe-plugin' ); ?></h3>
		<p><?php esc_html_e( 'Support content can go here...', 'wireframe-plugin' ); ?></p>
	</div>
<?php
}
