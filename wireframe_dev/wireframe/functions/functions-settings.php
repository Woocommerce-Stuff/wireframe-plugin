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
 * Settings section callback function
 *
 * This function is needed if we added a new section. This function
 * will be run at the start of our section
 */
function eg_setting_section_callback_function() {
	echo '<p>Intro text for our settings section</p>';
}

/**
 * Callback function for our example setting
 *
 * Creates a checkbox true/false option. Other types are surely possible.
 */
function eg_setting_callback_function() {
	echo '<input name="eg_setting_name" id="eg_setting_name" type="checkbox" value="1" class="code" ' . checked( 1, get_option( 'eg_setting_name' ), false ) . ' /> Explanation text';
}
