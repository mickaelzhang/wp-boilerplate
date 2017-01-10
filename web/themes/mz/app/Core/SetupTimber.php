<?php

namespace App\Core;

class SetupTimber extends \TimberSite {
	function __construct() {
		add_filter( 'timber_context', array( $this, 'add_to_context' ) );
		add_filter( 'get_twig', array( $this, 'add_to_twig' ) );

		parent::__construct();
	}

	function add_to_context( $context ) {
		$context['menu'] = new \TimberMenu();
		$context['site'] = $this;
		
		$context['url'] = array(
					'theme' => THEME_URL,
					'css' => CSS_URL,
					'img' => IMAGES_URL,
					'js' => JS_URL
				);
		return $context;
	}

	function add_to_twig( $twig ) {
		/* this is where you can add your own fuctions to twig */
		$twig->addExtension( new \Twig_Extension_StringLoader() );
		$twig->addFilter('myfoo', new \Twig_SimpleFilter('myfoo', array($this, 'myfoo')));

		return $twig;
	}

    function myfoo( $text ) {
        $text .= ' bar!';
        return $text;
    }
}
