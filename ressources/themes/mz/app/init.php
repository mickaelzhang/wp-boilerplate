<?php

use Timber\Timber;
use App\PostType;
use App\Core;

$app = array();

/**
 * Initialize Timber and check if it has been installed
 * @link http://timber.github.io/timber/
 */
$timber = new Timber();

if ( ! class_exists( 'Timber' ) ) {
	add_action( 'admin_notices', function() {
			echo '<div class="error"><p>Timber not activated. Activate the plugin in <a href="' . esc_url( admin_url( 'plugins.php#timber' ) ) . '">' . esc_url( admin_url( 'plugins.php' ) ) . '</a> or install it via Composer.</p></div>';
		} );
	return;
}

Timber::$dirname = array(
	'/views/templates/',
	'/views/layout/',
	'/views/components/',
	'/views/pages/',
	'/views/ajax/'
);

//
new Core\BaseTheme();
new Core\SetupTheme();
new Core\SetupTimber();

/**
 * Custom Post Types
   new PostType\PostTypeName();
 */

// Include AJAX files
foreach (glob(__DIR__.'/Ajax/*.php') as $filename) {
	include $filename;
}
