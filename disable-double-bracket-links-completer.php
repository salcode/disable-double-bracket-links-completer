<?php
/**
 * Plugin Name:       Disable Double Bracket Links Completer
 * Plugin URI:        https://github.com/salcode/disable-double-bracket-links-completer
 * Description:       Disable the double bracket links auto-completer in the WordPress block editor.
 * Version:           1.0.0
 * Author:            Sal Ferrarello
 * Author URI:        https://salferrarello.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       disable-double-bracket-links-completer
 * Domain Path:       /languages
 */

namespace salcode\DisableDoubleBracketLinksCompleter;

function register_script() {
	wp_register_script(
		'disable-double-bracket-links-completer',
		plugins_url( 'js/disable-double-bracket-links-completer.js', __FILE__ ),
		[],
		'1.0.0',
		true
	);
}

function enqueue_script() {
	wp_enqueue_script( 'disable-double-bracket-links-completer' );
}

add_action( 'init', __NAMESPACE__ . '\register_script' );
add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\enqueue_script' );
