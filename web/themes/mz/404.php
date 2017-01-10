<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package  WordPress
 * @subpackage  Timber
 */
$context = Timber::get_context();
Timber::render( '404.twig', $context );
