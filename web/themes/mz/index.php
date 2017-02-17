<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 */

if ( ! class_exists( 'Timber' ) ) {
	echo 'Timber not activated. Activate the plugin in <a href="/wp-admin/plugins.php#timber">/wp-admin/plugins.php</a>';
	return;
}

$context = Timber::get_context();
$context['posts'] = Timber::get_posts();
$templates = array( 'index.twig' );

if ( is_home() ) {
	array_unshift( $templates, 'pages/home.twig' );
}

Timber::render( $templates, $context );
