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
 * Tabs.
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
 * @since 1.0.0 Wireframe_Plugin
 * @see   functions-helpers.php
 * @see   config-admin.php
 */
function wireframe_plugin_tpl_tabs() {
	wireframe_plugin_admin_check();
	wireframe_plugin_admin_check_screen();
	?>
	<h2 class="nav-tab-wrapper wp-clearfix">
		<a href="<?php echo esc_url( 'admin.php?page=' . esc_html( WIREFRAME_PLUGIN_TEXTDOMAIN ) ); ?>" class="nav-tab nav-tab-active"><?php esc_html_e( 'About', 'wireframe-plugin' ); ?></a>
		<a href="<?php echo esc_url( 'admin.php?page=' . esc_html( WIREFRAME_PLUGIN_TEXTDOMAIN ) . '-faq' ); ?>" class="nav-tab"><?php esc_html_e( 'FAQ', 'wireframe-plugin' ); ?></a>
		<a href="<?php echo esc_url( 'admin.php?page=' . esc_html( WIREFRAME_PLUGIN_TEXTDOMAIN ) . '-support' ); ?>" class="nav-tab"><?php esc_html_e( 'Support', 'wireframe-plugin' ); ?></a>
	</h2>
	<?php
}

/**
 * Badge.
 *
 * @since 1.0.0 Wireframe_Plugin
 * @see   functions-helpers.php
 * @see   config-admin.php
 */
function wireframe_plugin_tpl_badge() {
	wireframe_plugin_admin_check();
	wireframe_plugin_admin_check_screen();
	?>
	<div class="wp-badge">
		<?php esc_html_e( 'Version', 'wireframe-plugin' ); ?> <?php echo esc_html( WIREFRAME_PLUGIN_VERSION ); ?>
	</div>
	<?php
}

/**
 * Header.
 *
 * @since 1.0.0 Wireframe_Plugin
 * @see   functions-helpers.php
 * @see   config-admin.php
 */
function wireframe_plugin_tpl_header() {
	wireframe_plugin_admin_check();
	wireframe_plugin_admin_check_screen();
	?>
	<h1><?php echo esc_html( WIREFRAME_PLUGIN_PRODUCT ); ?> <?php echo esc_html( WIREFRAME_PLUGIN_VERSION ); ?></h1>
	<div class="about-text">
		<?php esc_html_e( 'This is a brief plugin description.', 'wireframe-plugin' ); ?>
	</div>
	<?php wireframe_plugin_tpl_badge(); ?>
	<?php wireframe_plugin_tpl_tabs(); ?>
	<?php
}

/**
 * Example callback: Landing page.
 *
 * @since 1.0.0 Wireframe_Plugin
 * @see   functions-helpers.php
 * @see   config-admin.php
 */
function wireframe_plugin_callback_landing() {
	wireframe_plugin_admin_check();
	?>
	<div class="wrap about-wrap">
		<?php wireframe_plugin_tpl_header(); ?>
	</div>
<?php
}

/**
 * Example callback: About page.
 *
 * @since 1.0.0 Wireframe_Plugin
 * @see   functions-helpers.php
 * @see   config-admin.php
 */
function wireframe_plugin_callback_about() {
	wireframe_plugin_admin_check();
	?>
	<div class="wrap about-wrap">
		<h3><?php esc_html_e( 'About Heading', 'wireframe-plugin' ); ?></h3>
		<p><?php esc_html_e( 'About content can go here...', 'wireframe-plugin' ); ?></p>
	</div>
<?php
}

/**
 * Example callback: FAQ page.
 *
 * @since 1.0.0 Wireframe_Plugin
 * @see   functions-helpers.php
 * @see   config-admin.php
 */
function wireframe_plugin_callback_faq() {
	wireframe_plugin_admin_check();
	?>
	<div class="wrap about-wrap">
		<?php wireframe_plugin_tpl_header(); ?>
		<h3><?php esc_html_e( 'FAQ Heading', 'wireframe-plugin' ); ?></h3>
		<p><?php esc_html_e( 'Frequently Asked Questions content can go here...', 'wireframe-plugin' ); ?></p>
	</div>
<?php
}

/**
 * Example callback: Support page.
 *
 * @since 1.0.0 Wireframe_Plugin
 * @see   functions-helpers.php
 * @see   config-admin.php
 */
function wireframe_plugin_callback_support() {
	wireframe_plugin_admin_check();
	?>
	<div class="wrap about-wrap">
		<?php wireframe_plugin_tpl_header(); ?>
		<h3><?php esc_html_e( 'Support Heading', 'wireframe-plugin' ); ?></h3>
		<p><?php esc_html_e( 'Support content can go here...', 'wireframe-plugin' ); ?></p>
	</div>
<?php
}
