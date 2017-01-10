<?php

add_action( 'wp_ajax_nopriv_ajax-example', 'ajaxExample' );
add_action( 'wp_ajax_ajax-example', 'ajaxExample' );

function ajaxExample() {
    $context = Timber::get_context();

	Timber::render( 'ajax-example.twig', $context );

    exit;
}
