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
 * @see   helpers-functions.php
 */
function wireframe_plugin_tpl_tabs() {
	wireframe_plugin_check_admin();
	wireframe_plugin_check_screen();
	?>
	<h2 class="nav-tab-wrapper wp-clearfix">
		<a href="<?php echo esc_url( 'admin.php?page=' . esc_html( WIREFRAME_PLUGIN_TEXTDOMAIN ) ); ?>" class="nav-tab nav-tab-active"><?php esc_html_e( 'Landing', 'wireframe-plugin' ); ?></a>
		<a href="<?php echo esc_url( 'admin.php?page=' . esc_html( WIREFRAME_PLUGIN_TEXTDOMAIN ) . '-page2' ); ?>" class="nav-tab"><?php esc_html_e( 'Page 2', 'wireframe-plugin' ); ?></a>
		<a href="<?php echo esc_url( 'admin.php?page=' . esc_html( WIREFRAME_PLUGIN_TEXTDOMAIN ) . '-page3' ); ?>" class="nav-tab"><?php esc_html_e( 'Page 3', 'wireframe-plugin' ); ?></a>
		<a href="<?php echo esc_url( 'admin.php?page=' . esc_html( WIREFRAME_PLUGIN_TEXTDOMAIN ) . '-page4' ); ?>" class="nav-tab"><?php esc_html_e( 'Page 4', 'wireframe-plugin' ); ?></a>
	</h2>
	<?php
}

/**
 * Page 1: Landing.
 *
 * @since 1.0.0 Wireframe_Plugin
 * @see   helpers-functions.php
 */
function wireframe_plugin_view_quickstart() {
	wireframe_plugin_check_admin();
	?>
	<div class="wrap about-wrap">
		<h1><?php echo esc_html( WIREFRAME_PLUGIN_PRODUCT ); ?> <?php echo esc_html( WIREFRAME_PLUGIN_VERSION ); ?></h1>
		<div class="about-text">
			<?php esc_html_e( 'This is a brief plugin description.', 'wireframe-plugin' ); ?>
		</div>
		<div class="wp-badge">
			<?php esc_html_e( 'Version', 'wireframe-plugin' ); ?> <?php echo esc_html( WIREFRAME_PLUGIN_VERSION ); ?>
		</div>
		<?php wireframe_plugin_tpl_tabs(); ?>
		<h3><?php esc_html_e( 'This is a landing page', 'wireframe-plugin' ); ?></h3>
		<p><?php esc_html_e( 'You should arrive here after clicking the 1st tab or top-tier menu item.', 'wireframe-plugin' ); ?></p>
	</div>
<?php
}

/**
 * Page 2: Example.
 *
 * @since 1.0.0 Wireframe_Plugin
 * @see   helpers-functions.php
 */
function wireframe_plugin_view_sub2() {
	wireframe_plugin_check_admin();
	?>
	<div class="wrap about-wrap">
		<h1><?php echo esc_html( WIREFRAME_PLUGIN_PRODUCT ); ?>&nbsp;<?php echo esc_html( WIREFRAME_PLUGIN_VERSION ); ?></h1>
		<div class="about-text">
			<?php esc_html_e( 'This is a brief plugin description.', 'wireframe-plugin' ); ?>
		</div>
		<div class="wp-badge">
			<?php esc_html_e( 'Version', 'wireframe-plugin' ); ?> <?php echo esc_html( WIREFRAME_PLUGIN_VERSION ); ?>
		</div>
		<?php wireframe_plugin_tpl_tabs(); ?>
		<h3><?php esc_html_e( 'The 2nd subpage', 'wireframe-plugin' ); ?></h3>
		<p><?php esc_html_e( 'This is the 2nd tab (not the Landing page).', 'wireframe-plugin' ); ?></p>
	</div>
<?php
}

/**
 * Page 3: Example.
 *
 * @since 1.0.0 Wireframe_Plugin
 * @see   helpers-functions.php
 */
function wireframe_plugin_view_sub3() {
	wireframe_plugin_check_admin();
	?>
	<div class="wrap about-wrap">
		<h1><?php echo esc_html( WIREFRAME_PLUGIN_PRODUCT ); ?>&nbsp;<?php echo esc_html( WIREFRAME_PLUGIN_VERSION ); ?></h1>
		<div class="about-text">
			<?php esc_html_e( 'This is a brief plugin description.', 'wireframe-plugin' ); ?>
		</div>
		<div class="wp-badge">
			<?php esc_html_e( 'Version', 'wireframe-plugin' ); ?> <?php echo esc_html( WIREFRAME_PLUGIN_VERSION ); ?>
		</div>
		<?php wireframe_plugin_tpl_tabs(); ?>
		<h3><?php esc_html_e( 'This is Subpage 3', 'wireframe-plugin' ); ?></h3>
		<p><?php esc_html_e( 'This should appear after clicking the 3rd tab, yo.', 'wireframe-plugin' ); ?></p>
	</div>
<?php
}

/**
 * Page 4: Example.
 *
 * @since 1.0.0 Wireframe_Plugin
 * @see   helpers-functions.php
 */
function wireframe_plugin_view_sub4() {
	wireframe_plugin_check_admin();
	?>
	<div class="wrap about-wrap">
		<h1><?php echo esc_html( WIREFRAME_PLUGIN_PRODUCT ); ?>&nbsp;<?php echo esc_html( WIREFRAME_PLUGIN_VERSION ); ?></h1>
		<div class="about-text">
			<?php esc_html_e( 'This is a brief plugin description.', 'wireframe-plugin' ); ?>
		</div>
		<div class="wp-badge">
			<?php esc_html_e( 'Version', 'wireframe-plugin' ); ?> <?php echo esc_html( WIREFRAME_PLUGIN_VERSION ); ?>
		</div>
		<?php wireframe_plugin_tpl_tabs(); ?>
		<h3><?php esc_html_e( 'Here we have the delicious subpage #4', 'wireframe-plugin' ); ?></h3>
		<p><?php esc_html_e( 'Clicking the 4th tab brings you here.', 'wireframe-plugin' ); ?></p>
	</div>
<?php
}
